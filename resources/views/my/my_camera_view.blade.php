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
                                                <iframe style="width: 100%; height: 400px;"
                                                      src="https://www.youtube.com/embed/3LXQWU67Ufk?si=4F_8xMZyOyC-5wjE&autoplay=1&mute=1"
                                                      title="YouTube video player"
                                                      frameborder="0"
                                                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                      referrerpolicy="strict-origin-when-cross-origin"
                                                      allowfullscreen>
                                                </iframe>
                                                <div class="caption">
                                                      🔴 Venice V Hotel Live · Beach Live Camera · Los Angeles Live Stream <a class="btn btn-primary btn-md m-1" href="javascript:void(0)">
                                                            <i class="fa fa-download"></i> Save Video
                                                      </a>
                                                </div>

                                          </div>
                                          <div class="col-md-4">
                                                <h5>4 Cameras</h5>
                                                <div class="row">
                                                      <div class="col-md-12">
                                                            <div class="form-group mb-0">
                                                                  <div class="input-group">
                                                                        <input type="search" style=" border-radius: 10px;" class="form-control rounded-start" placeholder="Search" aria-label="Search">
                                                                        <button class="input-group-text bg-white text-primary rounded-end" style=" border-radius: 10px;">
                                                                              <i class="fa fa-search"></i>
                                                                        </button>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <div class="col-md-12 mt-2">
                                                            <a href="{{url('my-camera-view')}}">
                                                                  <div class="row">
                                                                        <div class="col-md-5 mb-4 mb-md-0">
                                                                              <img alt="Thumbnail" style="width:120px; height: 80px; border-radius: 10px;" src="https://1180.servicestream.io:8060/61f7b0d9ae7a/last.jpg">
                                                                        </div>
                                                                        <div class="col-md-7">
                                                                              <b class="text-black">Flynet CAM1.02 Porton Triangulo</b>
                                                                        </div>
                                                                  </div>
                                                            </a>
                                                      </div>
                                                      <div class="col-md-12 mt-2">
                                                            <a href="{{url('my-camera-view')}}">
                                                                  <div class="row">
                                                                        <div class="col-md-5 mb-4 mb-md-0">
                                                                              <img alt="Thumbnail" style="width:120px; height: 80px; border-radius: 10px;" src="https://1180.servicestream.io:8060/61f7b0d9ae7a/last.jpg">
                                                                        </div>
                                                                        <div class="col-md-7">
                                                                              <b class="text-black">Flynet CAM1.02 Porton Triangulo</b>
                                                                        </div>
                                                                  </div>
                                                            </a>
                                                      </div>
                                                      <div class="col-md-12 mt-2">
                                                            <a href="{{url('my-camera-view')}}">
                                                                  <div class="row">
                                                                        <div class="col-md-5 mb-4 mb-md-0">
                                                                              <img alt="Thumbnail" style="width:120px; height: 80px; border-radius: 10px;" src="https://1180.servicestream.io:8060/61f7b0d9ae7a/last.jpg">
                                                                        </div>
                                                                        <div class="col-md-7">
                                                                              <b class="text-black">Flynet CAM1.02 Porton Triangulo</b>
                                                                        </div>
                                                                  </div>
                                                            </a>
                                                      </div>
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