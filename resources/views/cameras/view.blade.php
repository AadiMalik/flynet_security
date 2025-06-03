@extends('layouts.app')
@section('css')
<style>
      .caption {
            margin-top: 15px;
            background: #fff;
            padding: 10px;
            display: inline-block;
            border-radius: 5px;
            font-size: 14px;
            color: #333;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
      }
</style>
@endsection
@section('content')
<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">

      <div class="row page-titles mx-0">
            <div class="col p-md-0">
                  <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{url('cameras')}}">Cameras</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">View Camera</a></li>
                  </ol>
            </div>
      </div>
      <!-- row -->

      <div class="container-fluid">
            <div class="row">
                  <div class="col-12">
                        @if(session('success'))
                        <script>
                              toastr.success('{{ session('
                                    success ') }}');
                        </script>
                        @endif

                        @if(session('error'))
                        <script>
                              toastr.error('{{ session('
                                    error ') }}');
                        </script>
                        @endif
                        <div class="card">
                              <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title mb-0">View Camera</h4>
                              </div>
                              <div class="card-body">
                                    <video id="video" width="100%" controls autoplay muted></video>
                                    <div class="caption">
                                          🔴 {{ $camera->name ?? '' }}

                                          {{-- Show the latest recording download link --}}
                                          @php
                                          $latestRecording = $camera->recordings()->latest()->first();
                                          @endphp

                                          @if ($latestRecording)
                                          <a href="{{ url('cameras/download-recording/'. $latestRecording->id) }}" class="btn btn-success btn-md m-1">
                                                <i class="fa fa-download"></i> Download Last Video
                                          </a>
                                          @endif

                                          {{-- Trigger new recording --}}
                                          <button id="recordBtn" class="btn btn-primary btn-md m-1" data-id="{{ $camera->id }}">
                                                <i class="fa fa-video"></i> Record New Video
                                          </button>
                                          <span id="recordTimer" class="ml-2 text-danger font-weight-bold"></span>
                                    </div>


                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>
<!-- #/ container -->
</div>
<!--**********************************
            Content body end
        ***********************************-->
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
<script>
      const video = document.getElementById('video');
      const videoSrc = 'http://127.0.0.1:8888/{{ $camera->slug }}/index.m3u8';

      if (Hls.isSupported()) {
            const hls = new Hls();
            hls.loadSource(videoSrc);
            hls.attachMedia(video);
            hls.on(Hls.Events.MANIFEST_PARSED, () => video.play());
      } else if (video.canPlayType('application/vnd.apple.mpegurl')) {
            video.src = videoSrc;
            video.addEventListener('loadedmetadata', () => video.play());
      } else {
            alert("HLS not supported in this browser.");
      }
      $(document).on('click', '.delete-camera', function() {
            let id = $(this).data('id');
            if (!confirm('Are you sure to delete this camera?')) return;

            $.ajax({
                  url: "{{url('cameras/destroy')}}" + "/" + id,
                  method: 'GET',
                  headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  success: function(data) {
                        if (data.Success) {
                              toastr.success(data.Message);
                              initDataTablecamera_table();
                        } else {
                              toastr.error(data.Message);
                        }
                  },
                  error: function() {
                        toastr.error('Failed to delete.');
                  }
            });
      });
</script>
<script>
      $(document).ready(function() {
            $('#recordBtn').on('click', function() {
                  const $btn = $(this);
                  const cameraId = $btn.data('id');
                  const $timer = $('#recordTimer');

                  $btn.prop('disabled', true).text('Recording...');
                  $timer.text('⏳ 5:00');

                  let secondsLeft = 300;
                  const interval = setInterval(() => {
                        secondsLeft--;
                        const min = String(Math.floor(secondsLeft / 60)).padStart(2, '0');
                        const sec = String(secondsLeft % 60).padStart(2, '0');
                        $timer.text(`⏳ ${min}:${sec}`);

                        if (secondsLeft <= 0) {
                              clearInterval(interval);
                              $btn.prop('disabled', false).html('<i class="fa fa-video"></i> Record New Video');
                              $timer.text('');
                        }
                  }, 1000);

                  $.ajax({
                        url: "{{ url('cameras/recording/') }}/" + cameraId,
                        type: 'GET',
                        success: function(res) {
                              toastr.success(res.message || 'Recording started successfully. File will be available after 5 minutes.');
                        },
                        error: function(xhr) {
                              clearInterval(interval);
                              $btn.prop('disabled', false).html('<i class="fa fa-video"></i> Record New Video');
                              $timer.text('');

                              let message = 'Recording failed.';
                              if (xhr.responseJSON && xhr.responseJSON.message) {
                                    message = xhr.responseJSON.message;
                              }

                              toastr.error(message);
                        }
                  });
            });
      });
</script>

@endsection