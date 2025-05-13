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
                        <li class="breadcrumb-item"><a href="{{url('my-mosaics')}}">My Mosaics</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Mosaic View</a></li>
                  </ol>
            </div>
      </div>
      <!-- row -->

      <div class="container-fluid">
            <div class="row">
                  <div class="col-12">
                        <div class="card">
                              <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title mb-0">View Mosaic</h4>
                              </div>
                              <div class="card-body">
                                    <div class="row">
                                          @foreach($mosaic->cameras as $item)
                                          <div class="col-md-6">
                                                @if($item->protocol === 'RTSP')
                                                <iframe
                                                      src="http://localhost:8889/webrtc/play/{{$item->slug}}"
                                                      style="width: 100%; height: 400px; border: none;"
                                                      allow="camera; microphone; fullscreen"
                                                      allowfullscreen></iframe>
                                                @elseif($item->protocol === 'P2P')
                                                <img src="{{ $item->stream_url }}" alt="Camera Feed" style="width: 100%; height: 400px;" class="img-fluid">
                                                @elseif($item->protocol === 'RTMP')
                                                <iframe
                                                      src="http://localhost:8889/webrtc/play/{{$item->slug}}"
                                                      style="width: 100%; height: 400px; border: none;"
                                                      allow="camera; microphone; fullscreen"
                                                      allowfullscreen></iframe>
                                                @endif
                                          </div>
                                          @endforeach
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