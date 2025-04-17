@extends('layouts.app')
@section('css')
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
                        <li class="breadcrumb-item"><a href="javascript:void(0)">My Cameras</a></li>
                  </ol>
            </div>
      </div>
      <!-- row -->

      <div class="container-fluid">
            <div class="row">
                  <div class="col-12">
                        <div class="card">
                              <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title mb-0">My Cameras</h4>
                              </div>
                              <div class="card-body">
                                    <div class="row">
                                          <div class="col-md-8">
                                                <iframe style="width: 100%; height: 400px;" src="https://www.openstreetmap.org/export/embed.html?bbox=2.292292%2C48.857166%2C2.296495%2C48.859723&layer=mapnik&marker=48.858844%2C2.294351"></iframe>
                                          </div>
                                          <div class="col-md-4">
                                                <h5>4 Cameras</h5>
                                                <div class="row">
                                                      <div class="col-md-12">
                                                            <div class="form-group mb-0">
                                                                  <div class="input-group">
                                                                        <input type="search" style=" border-radius: 10px;" class="form-control rounded-start" placeholder="Search" aria-label="Search">
                                                                        <button class="input-group-text bg-white text-primary rounded-end"  style=" border-radius: 10px;">
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
      <!-- #/ container -->
</div>
<!--**********************************
            Content body end
        ***********************************-->
@endsection