@extends('layouts.app')
@section('css')
<style>
      b{
            color:#000;
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
                        <li class="breadcrumb-item"><a href="{{url('list-group')}}">Groups</a></li>
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
                                    <h4 class="card-title mb-0">Add New Group</h4>
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
                                                                  <label class="col-form-label" for="comment">Comment <span class="text-danger">*</span>
                                                                  </label>
                                                                  <input type="text" class="form-control" id="comment" name="comment" placeholder="Enter comment..">
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
                                                      <div class="col-md-3">
                                                            <div class="form-check form-switch mr-3">
                                                                  <input class="form-check-input"
                                                                        type="checkbox"
                                                                        role="switch"
                                                                        id="default"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="bottom"
                                                                        title="Active">
                                                                  <label class="form-check-label" for="default">Default</label>
                                                            </div>
                                                      </div>
                                                      <div class="col-md-3">
                                                            <div class="form-check form-switch mr-3">
                                                                  <input class="form-check-input"
                                                                        type="checkbox"
                                                                        role="switch"
                                                                        id="external_default"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="bottom"
                                                                        title="Active">
                                                                  <label class="form-check-label" for="external_default">External default</label>
                                                            </div>
                                                      </div>
                                                      <div class="col-md-3">
                                                            <div class="form-check form-switch mr-3">
                                                                  <input class="form-check-input"
                                                                        type="checkbox"
                                                                        role="switch"
                                                                        id="active"
                                                                        checked
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="bottom"
                                                                        title="Active">
                                                                  <label class="form-check-label" for="active">Active</label>
                                                            </div>
                                                      </div>

                                                </div>
                                                <div class="row">
                                                      <div class="col-md-12">
                                                            <hr>
                                                            <b>Permissions</b> <br>
                                                      </div>
                                                      <div class="col-md-3">
                                                            <div class="form-check form-switch mr-3">
                                                                  <input class="form-check-input"
                                                                        type="checkbox"
                                                                        role="switch"
                                                                        id="default"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="bottom"
                                                                        title="Active">
                                                                  <label class="form-check-label" for="default">Send panic alerts</label>
                                                            </div>
                                                      </div>
                                                      <div class="col-md-3">
                                                            <div class="form-check form-switch mr-3">
                                                                  <input class="form-check-input"
                                                                        type="checkbox"
                                                                        role="switch"
                                                                        id="external_default"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="bottom"
                                                                        title="Active">
                                                                  <label class="form-check-label" for="external_default">View recordings</label>
                                                            </div>
                                                      </div>
                                                      <div class="col-md-3">
                                                            <div class="form-check form-switch mr-3">
                                                                  <input class="form-check-input"
                                                                        type="checkbox"
                                                                        role="switch"
                                                                        id="active"
                                                                        checked
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="bottom"
                                                                        title="Active">
                                                                  <label class="form-check-label" for="active">Enable chat</label>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="row">
                                                      <div class="col-md-12">
                                                            <hr>
                                                            <b>Notifications</b> <br>
                                                      </div>
                                                      <div class="col-md-3">
                                                            <div class="form-check form-switch mr-3">
                                                                  <input class="form-check-input"
                                                                        type="checkbox"
                                                                        role="switch"
                                                                        id="default"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="bottom"
                                                                        title="Active">
                                                                  <label class="form-check-label" for="default">Panic alerts</label>
                                                            </div>
                                                      </div>
                                                      <div class="col-md-3">
                                                            <div class="form-check form-switch mr-3">
                                                                  <input class="form-check-input"
                                                                        type="checkbox"
                                                                        role="switch"
                                                                        id="external_default"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="bottom"
                                                                        title="Active">
                                                                  <label class="form-check-label" for="external_default">Analytical</label>
                                                            </div>
                                                      </div>
                                                      <div class="col-md-3">
                                                            <div class="form-check form-switch mr-3">
                                                                  <input class="form-check-input"
                                                                        type="checkbox"
                                                                        role="switch"
                                                                        id="active"
                                                                        checked
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="bottom"
                                                                        title="Active">
                                                                  <label class="form-check-label" for="active">Offline camera</label>
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