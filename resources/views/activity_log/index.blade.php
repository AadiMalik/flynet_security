@extends('layouts.app')
@section('css')
<style>
      ul.timeline {
            list-style-type: none;
            position: relative;
      }

      ul.timeline:before {
            content: ' ';
            background: #d4d9df;
            display: inline-block;
            position: absolute;
            left: 29px;
            width: 2px;
            height: 100%;
            z-index: 400;
      }

      ul.timeline>li {
            padding-left: 20px;
      }

      ul.timeline>li:before {
            content: ' ';
            background: white;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            border: 3px solid #22c0e8;
            left: 20px;
            width: 20px;
            height: 20px;
            z-index: 400;
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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Activity Logs</a></li>
                  </ol>
            </div>
      </div>
      <!-- row -->

      <div class="container-fluid">
            <div class="row">
                  <div class="col-12">
                        <div class="card">
                              <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title mb-0">Activity Log</h4>
                              </div>
                              <div class="card-body">
                                    <div class="row">
                                          <div class="col-md-12">
                                                <h5 style="font-size: 16px;" class="badge badge-primary">April 22, 2025</h5>
                                                <ul class="timeline" style="padding: 0px;">
                                                      <li>
                                                            <span class="float-right"><span class="fas fa-clock"></span> 14 minutes ago</span>
                                                            <p style="margin-left:30px;">3:24 PM • Reina Romero abriu a câmera 739599 - Casa Reina Romero Cam 1.1 no aplicativo mobile.</p>
                                                      </li>
                                                      <li>
                                                            <span class="float-right"><span class="fas fa-clock"></span> 14 minutes ago</span>
                                                            <p style="margin-left:30px;">2:48 PM • Napoleon Regalado abriu a câmera 726028 - Casa de Napoleon Regalado Cam1.1 no aplicativo mobile.</p>
                                                      </li>
                                                      <li>
                                                            <span class="float-right"><span class="fas fa-clock"></span> 14 minutes ago</span>
                                                            <p style="margin-left:30px;">3:24 PM • Reina Romero abriu a câmera 739565 - Casa Reina Romero Cam 1.2 no aplicativo mobile.</p>
                                                      </li>
                                                      <li>
                                                            <span class="float-right"><span class="fas fa-clock"></span> 14 minutes ago</span>
                                                            <p style="margin-left:30px;">3:24 PM • Reina Romero abriu a câmera 739565 - Casa Reina Romero Cam 1.2 no aplicativo mobile.</p>
                                                      </li>
                                                      <li>
                                                            <span class="float-right"><span class="fas fa-clock"></span> 14 minutes ago</span>
                                                            <p style="margin-left:30px;">3:24 PM • Reina Romero abriu a câmera 739565 - Casa Reina Romero Cam 1.2 no aplicativo mobile.</p>
                                                      </li>
                                                      <li>
                                                            <span class="float-right"><span class="fas fa-clock"></span> 14 minutes ago</span>
                                                            <p style="margin-left:30px;">3:24 PM • Reina Romero abriu a câmera 739565 - Casa Reina Romero Cam 1.2 no aplicativo mobile.</p>
                                                      </li>
                                                      <li>
                                                            <span class="float-right"><span class="fas fa-clock"></span> 14 minutes ago</span>
                                                            <p style="margin-left:30px;">3:24 PM • Reina Romero abriu a câmera 739565 - Casa Reina Romero Cam 1.2 no aplicativo mobile.</p>
                                                      </li>
                                                      <li>
                                                            <span class="float-right"><span class="fas fa-clock"></span> 14 minutes ago</span>
                                                            <p style="margin-left:30px;">3:24 PM • Reina Romero abriu a câmera 739565 - Casa Reina Romero Cam 1.2 no aplicativo mobile.</p>
                                                      </li>
                                                      <li>
                                                            <span class="float-right"><span class="fas fa-clock"></span> 14 minutes ago</span>
                                                            <p style="margin-left:30px;">3:24 PM • Reina Romero abriu a câmera 739565 - Casa Reina Romero Cam 1.2 no aplicativo mobile.</p>
                                                      </li>
                                                      <li>
                                                            <span class="float-right"><span class="fas fa-clock"></span> 14 minutes ago</span>
                                                            <p style="margin-left:30px;">3:24 PM • Reina Romero abriu a câmera 739565 - Casa Reina Romero Cam 1.2 no aplicativo mobile.</p>
                                                      </li>
                                                      <li>
                                                            <span class="float-right"><span class="fas fa-clock"></span> 14 minutes ago</span>
                                                            <p style="margin-left:30px;">3:24 PM • Reina Romero abriu a câmera 739565 - Casa Reina Romero Cam 1.2 no aplicativo mobile.</p>
                                                      </li>
                                                </ul>
                                          </div>
                                          <div class="col-md-12">
                                                <h5 style="font-size: 16px;" class="badge badge-primary">April 22, 2025</h5>
                                                <ul class="timeline" style="padding: 0px;">
                                                      <li>
                                                            <span class="float-right"><span class="fas fa-clock"></span> 14 minutes ago</span>
                                                            <p style="margin-left:30px;">3:24 PM • Reina Romero abriu a câmera 739599 - Casa Reina Romero Cam 1.1 no aplicativo mobile.</p>
                                                      </li>
                                                      <li>
                                                            <span class="float-right"><span class="fas fa-clock"></span> 14 minutes ago</span>
                                                            <p style="margin-left:30px;">2:48 PM • Napoleon Regalado abriu a câmera 726028 - Casa de Napoleon Regalado Cam1.1 no aplicativo mobile.</p>
                                                      </li>
                                                      <li>
                                                            <span class="float-right"><span class="fas fa-clock"></span> 14 minutes ago</span>
                                                            <p style="margin-left:30px;">3:24 PM • Reina Romero abriu a câmera 739565 - Casa Reina Romero Cam 1.2 no aplicativo mobile.</p>
                                                      </li>
                                                      <li>
                                                            <span class="float-right"><span class="fas fa-clock"></span> 14 minutes ago</span>
                                                            <p style="margin-left:30px;">3:24 PM • Reina Romero abriu a câmera 739565 - Casa Reina Romero Cam 1.2 no aplicativo mobile.</p>
                                                      </li>
                                                      <li>
                                                            <span class="float-right"><span class="fas fa-clock"></span> 14 minutes ago</span>
                                                            <p style="margin-left:30px;">3:24 PM • Reina Romero abriu a câmera 739565 - Casa Reina Romero Cam 1.2 no aplicativo mobile.</p>
                                                      </li>
                                                      <li>
                                                            <span class="float-right"><span class="fas fa-clock"></span> 14 minutes ago</span>
                                                            <p style="margin-left:30px;">3:24 PM • Reina Romero abriu a câmera 739565 - Casa Reina Romero Cam 1.2 no aplicativo mobile.</p>
                                                      </li>
                                                      <li>
                                                            <span class="float-right"><span class="fas fa-clock"></span> 14 minutes ago</span>
                                                            <p style="margin-left:30px;">3:24 PM • Reina Romero abriu a câmera 739565 - Casa Reina Romero Cam 1.2 no aplicativo mobile.</p>
                                                      </li>
                                                      <li>
                                                            <span class="float-right"><span class="fas fa-clock"></span> 14 minutes ago</span>
                                                            <p style="margin-left:30px;">3:24 PM • Reina Romero abriu a câmera 739565 - Casa Reina Romero Cam 1.2 no aplicativo mobile.</p>
                                                      </li>
                                                      <li>
                                                            <span class="float-right"><span class="fas fa-clock"></span> 14 minutes ago</span>
                                                            <p style="margin-left:30px;">3:24 PM • Reina Romero abriu a câmera 739565 - Casa Reina Romero Cam 1.2 no aplicativo mobile.</p>
                                                      </li>
                                                      <li>
                                                            <span class="float-right"><span class="fas fa-clock"></span> 14 minutes ago</span>
                                                            <p style="margin-left:30px;">3:24 PM • Reina Romero abriu a câmera 739565 - Casa Reina Romero Cam 1.2 no aplicativo mobile.</p>
                                                      </li>
                                                      <li>
                                                            <span class="float-right"><span class="fas fa-clock"></span> 14 minutes ago</span>
                                                            <p style="margin-left:30px;">3:24 PM • Reina Romero abriu a câmera 739565 - Casa Reina Romero Cam 1.2 no aplicativo mobile.</p>
                                                      </li>
                                                </ul>
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

@endsection