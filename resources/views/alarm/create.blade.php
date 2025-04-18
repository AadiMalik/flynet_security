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
                        <li class="breadcrumb-item"><a href="{{url('list-alarm')}}">Alarms</a></li>
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
                                    <h4 class="card-title mb-0">Add New Alarm</h4>
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
                                                                  <label class="col-form-label" for="description">Description <span class="text-danger">*</span>
                                                                  </label>
                                                                  <input type="text" class="form-control" id="description" name="description" placeholder="Enter description..">
                                                            </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                            <div class="form-group">
                                                                  <label class="col-form-label" for="users">Users <span class="text-danger">*</span>
                                                                  </label>
                                                                  <select class="form-control" name="users" id="users" multiple>
                                                                        <option value="1">John Doe (john@gmail.com)</option>
                                                                        <option value="2">Jane Smith (smith@gmail.com)</option>
                                                                  </select>
                                                            </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                            <div class="form-group">
                                                                  <label class="col-form-label" for="cameras">Cameras <span class="text-danger">*</span>
                                                                  </label>
                                                                  <select class="form-control" name="cameras" id="cameras" multiple>
                                                                        <option value="1">Cam A2</option>
                                                                        <option value="2">Cam A1</option>
                                                                  </select>
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