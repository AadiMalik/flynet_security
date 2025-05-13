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
                        <div class="card">
                              <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title mb-0">View Camera</h4>
                              </div>
                              <div class="card-body">
                                    @if($camera->protocol === 'RTSP')
                                    <iframe
                                          src="http://localhost:8889/webrtc/play/{{$camera->slug}}"
                                          style="width: 100%; height: 400px; border: none;"
                                          allow="camera; microphone; fullscreen"
                                          allowfullscreen></iframe>
                                    @elseif($camera->protocol === 'P2P')
                                    <img src="{{ $camera->stream_url }}" alt="Camera Feed" style="width: 100%; height: 400px;" class="img-fluid">
                                    @elseif($camera->protocol === 'RTMP')
                                    <iframe
                                          src="http://localhost:8889/webrtc/play/{{$camera->slug}}"
                                          style="width: 100%; height: 400px; border: none;"
                                          allow="camera; microphone; fullscreen"
                                          allowfullscreen></iframe>
                                    @endif
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
                                          <a class="btn btn-primary btn-md m-1"
                                                href="{{ url('cameras/recording/'. $camera->id) }}">
                                                <i class="fa fa-video"></i> Record New Video
                                          </a>
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
      // document.addEventListener('DOMContentLoaded', function() {
      //       var video = document.getElementById('video');
      //       var streamUrl = "{{ $camera->stream_url }}"; // Should be .m3u8 URL

      //       if (Hls.isSupported()) {
      //             var hls = new Hls();
      //             hls.loadSource(streamUrl);
      //             hls.attachMedia(video);
      //             hls.on(Hls.Events.MANIFEST_PARSED, function() {
      //                   video.play();
      //             });
      //       } else if (video.canPlayType('application/vnd.apple.mpegurl')) {
      //             video.src = streamUrl;
      //             video.addEventListener('loadedmetadata', function() {
      //                   video.play();
      //             });
      //       }
      // });
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
@endsection