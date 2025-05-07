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
                        <li class="breadcrumb-item"><a href="{{url('my-cameras')}}">My Cameras</a></li>
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
                                    <div class="row">
                                          <div class="col-md-8">
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
                                          <div class="col-md-4">
                                                <h5>{{$cameras->count()}} Cameras</h5>
                                                <div class="row">
                                                      <div class="col-md-12">
                                                            <div class="form-group mb-0">
                                                                  <form method="GET" action="{{ route('my-cameras.view', ['id' => $camera->id]) }}" class="mb-3">
                                                                        <div class="input-group">
                                                                              <input type="search" name="search" value="{{ request('search') }}" class="form-control" placeholder="Search cameras..." style="border-radius: 10px;">
                                                                              <button type="submit" class="input-group-text bg-white text-primary" style="border-radius: 10px;">
                                                                                    <i class="fa fa-search"></i>
                                                                              </button>
                                                                        </div>
                                                                  </form>
                                                            </div>
                                                      </div>
                                                      @foreach($cameras as $camera)
                                                      <div class="col-md-12 mt-2">
                                                            <a href="{{ route('my-cameras.view', ['id' => $camera->id]) }}">
                                                                  <div class="row">
                                                                        <div class="col-md-5 mb-4 mb-md-0">
                                                                              <img alt="Thumbnail" style="width:120px; height: 80px; border-radius: 10px;" src="{{asset('uploads/cameras/1.jpg')}}">
                                                                        </div>
                                                                        <div class="col-md-7">
                                                                              <b class="text-black">{{ $camera->name }}</b>
                                                                        </div>
                                                                  </div>
                                                            </a>
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
</div>
<!-- #/ container -->
</div>
<!--**********************************
            Content body end
        ***********************************-->
@endsection