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
                                    <video style="width: 100%; height: 400px;" controls autoplay>
                                          <source src="{{ $camera->stream_url }}" type="video/mp4">
                                          Your browser does not support the video tag.
                                    </video>
                                    @elseif($camera->protocol === 'P2P')
                                    <img src="{{ $camera->stream_url }}" alt="Camera Feed" style="width: 100%; height: 400px;" class="img-fluid">
                                    @elseif($camera->protocol === 'RTMP')
                                    <video style="width: 100%; height: 400px;" controls autoplay>
                                          <source src="{{ $camera->stream_url }}" type="application/x-mpegURL">
                                          Your browser does not support the video tag.
                                    </video>
                                    @endif
                                    <div class="caption">
                                          🔴 {{$camera->name??''}} <a class="btn btn-primary btn-md m-1" href="javascript:void(0)">
                                                <i class="fa fa-download"></i> Save Video
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