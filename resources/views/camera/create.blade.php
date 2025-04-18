@extends('layouts.app')

@section('content')
<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">

      <div class="row page-titles mx-0">
            <div class="col p-md-0">
                  <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{url('list-camera')}}">My Camera</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Create</a></li>
                  </ol>
            </div>
      </div>
      <!-- row -->

      <div class="container-fluid">
            <div class="row justify-content-center">
                  <div class="col-lg-12">
                        <div class="card">
                              <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title mb-0">Add New Camera</h4>
                              </div>
                              <div class="card-body">
                                    <div class="form-validation">
                                          <form class="form-valide" action="javascript:void(0)" method="post">
                                                <div class="row">
                                                      <div class="col-md-6">
                                                            <div class="form-group">
                                                                  <label class="col-form-label" for="name">Name <span class="text-danger">*</span>
                                                                  </label>
                                                                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter name..">
                                                            </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                            <div class="form-group">
                                                                  <label class="col-form-label" for="manufacture">Manufacturer/Plantilla <span class="text-danger">*</span>
                                                                  </label>
                                                                  <select class="form-control" name="manufacture" id="manufacture">
                                                                        <option value="">--Select Manufacturer--</option>
                                                                        <option value="RTSP Generic">RTSP Generic</option>
                                                                  </select>
                                                            </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                            <div class="form-group">
                                                                  <label class="col-form-label" for="protocol">Protocol <span class="text-danger">*</span>
                                                                  </label>
                                                                  <select class="form-control" name="protocol" id="protocol">
                                                                        <option value="">--Select Protocolr--</option>
                                                                        <option value="RTSP">RTSP</option>
                                                                        <option value="P2P">P2P</option>
                                                                        <option value="RTMP">RTMP</option>
                                                                  </select>
                                                            </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                            <div class="form-group">
                                                                  <label class="col-form-label" for="ip">IP Address/Url <span class="text-danger">*</span>
                                                                  </label>
                                                                  <input type="text" class="form-control" id="ip" name="ip" placeholder="Enter ip address..">
                                                            </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                            <div class="form-group">
                                                                  <label class="col-form-label" for="location">Location <span class="text-danger">*</span>
                                                                  </label>
                                                                  <input type="text" class="form-control" id="location" name="location" placeholder="Enter location..">
                                                            </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                            <div class="form-group">
                                                                  <label class="col-form-label" for="longitude">Longitude <span class="text-danger">*</span>
                                                                  </label>
                                                                  <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Enter longitude..">
                                                            </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                            <div class="form-group">
                                                                  <label class="col-form-label" for="latitude">Latitude <span class="text-danger">*</span>
                                                                  </label>
                                                                  <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Enter latitude..">
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="row">
                                                      <div class="col-lg-12 mt-2">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                      </div>
                                                </div>
                                          </form>
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