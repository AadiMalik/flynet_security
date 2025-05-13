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
                        <li class="breadcrumb-item"><a href="{{url('my-patrols')}}">My Patrols</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Patrol View</a></li>
                  </ol>
            </div>
      </div>
      <!-- row -->

      <div class="container-fluid">
            <div class="row">
                  <div class="col-12">
                        <div class="card">
                              <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title mb-0">View Patrol</h4>
                              </div>
                              <div class="card-body">
                                    <div id="mosaic-container">
                                          <div class="col-md-12">
                                                <div class="d-flex justify-content-between align-items-center">
                                                      <h4 class="mb-0" id="mosaic-name">{{ $patrol->mosaics[0]->name ?? '' }}</h4>
                                                      <small><strong>Next switch in: <span id="patrol-timer">{{ $patrol->patrol_time }}</span>s</strong></small>
                                                </div>
                                                <br>
                                          </div>

                                          <div id="mosaic-container">
                                                @foreach($patrol->mosaics as $index => $mosaic)
                                                <div class="mosaic-group" style="{{ $index !== 0 ? 'display: none;' : '' }}">
                                                      <div class="row">
                                                            @foreach($mosaic->cameras as $camera)
                                                            <div class="col-md-6">
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
                                                            </div>
                                                            @endforeach
                                                      </div>
                                                </div>
                                                @endforeach
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>
<!-- #/ container -->
</div>
<input type="hidden" id="mosaic-data" value='{{json_encode($patrol->mosaics->pluck("name")->values())}}'>
<!--**********************************
            Content body end
        ***********************************-->
@endsection
@section('js')
<script>
      // Collect mosaic groups and names
      const mosaicGroups = document.querySelectorAll('.mosaic-group');
      const mosaicNames = JSON.parse($("#mosaic-data").val());
      console.log(mosaicNames);
      const patrolTimeSeconds = Number("{{ $patrol->patrol_time }}");

      const mosaicNameEl = document.getElementById('mosaic-name');
      const timerDisplay = document.getElementById('patrol-timer');

      let currentIndex = 0;
      let timeLeft = patrolTimeSeconds;

      function showMosaic(index) {
            // Hide all mosaics
            mosaicGroups.forEach(group => group.style.display = 'none');

            // Show the selected one
            mosaicGroups[index].style.display = 'block';

            // Update mosaic name
            mosaicNameEl.textContent = mosaicNames[index];
      }

      function switchMosaic() {
            currentIndex = (currentIndex + 1) % mosaicGroups.length;
            showMosaic(currentIndex);
            timeLeft = patrolTimeSeconds;
      }

      // Initial display
      showMosaic(currentIndex);

      // Countdown and switch logic
      setInterval(() => {
            timeLeft--;
            if (timeLeft <= 0) {
                  switchMosaic();
            }
            timerDisplay.textContent = timeLeft;
      }, 1000);
</script>

@endsection