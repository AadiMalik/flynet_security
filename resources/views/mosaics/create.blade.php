@extends('layouts.app')
@section('css')
@section('content')
<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">

      <div class="row page-titles mx-0">
            <div class="col p-md-0">
                  <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{url('list-mosaic')}}">Mosaics</a></li>
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
                                    <h4 class="card-title mb-0">Add New Mosaic</h4>
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
                                                                  <label class="col-form-label" for="Type">Type <span class="text-danger">*</span>
                                                                  </label>
                                                                  <select name="type" class="form-control" id="type">
                                                                        <option value="1">Cameras</option>
                                                                  </select>
                                                            </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                            <div class="form-group">
                                                                  <label class="col-form-label" for="no_of_camera">Number Of Cameras <span class="text-danger">*</span>
                                                                  </label>
                                                                  <select name="no_of_camera" class="form-control" id="no_of_camera">
                                                                        <option value="1">1 Camera</option>
                                                                        <option value="2">2 Cameras</option>
                                                                        <option value="4">4 Cameras</option>
                                                                        <option value="6">6 Cameras</option>
                                                                        <option value="9">9 Cameras</option>
                                                                        <option value="12">12 Cameras</option>
                                                                        <option value="16">16 Cameras</option>
                                                                  </select>
                                                            </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                            <div class="form-group">
                                                                  <label class="col-form-label" for="users">Users <span class="text-danger">*</span>
                                                                  </label>
                                                                  <select name="users" class="form-control" id="users" multiple>
                                                                        <option value="1">Johnson (john@example.com)</option>
                                                                        <option value="2">Sophia (sophia@example.com)</option>
                                                                  </select>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="row">
                                                      <div class="col-lg-12 mt-4">
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