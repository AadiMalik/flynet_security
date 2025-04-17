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
                                          <div class="col-md-6">
                                                <iframe style="width: 100%; height: 400px;"
                                                      src="https://www.youtube.com/embed/3LXQWU67Ufk?si=4F_8xMZyOyC-5wjE&autoplay=1&mute=1"
                                                      title="YouTube video player"
                                                      frameborder="0"
                                                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                      referrerpolicy="strict-origin-when-cross-origin"
                                                      allowfullscreen>
                                                </iframe>
                                          </div>
                                          <div class="col-md-6">
                                                <iframe style="width: 100%; height: 400px;"
                                                      src="https://www.youtube.com/embed/3LXQWU67Ufk?si=4F_8xMZyOyC-5wjE&autoplay=1&mute=1"
                                                      title="YouTube video player"
                                                      frameborder="0"
                                                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                      referrerpolicy="strict-origin-when-cross-origin"
                                                      allowfullscreen>
                                                </iframe>
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