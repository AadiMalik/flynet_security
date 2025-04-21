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
                        <li class="breadcrumb-item"><a href="{{url('list-permission')}}">Permissions</a></li>
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
                                    <h4 class="card-title mb-0">Add New Permission</h4>
                              </div>
                              <div class="card-body">
                                    <div class="form-validation">
                                          <form class="form-valide" action="javascript:void(0)" method="post">
                                                <div class="row">
                                                      <div class="col-md-6">
                                                            <div class="form-group">
                                                                  <label class="col-form-label" for="permission">Permission <span class="text-danger">*</span>
                                                                  </label>
                                                                  <input type="text" class="form-control" id="permission" name="permission" placeholder="Enter permission..">
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