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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Roles</a></li>
                  </ol>
            </div>
      </div>
      <!-- row -->

      <div class="container-fluid">
            <div class="row">
                  <div class="col-12">
                        <div class="card">
                              <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title mb-0">Roles</h4>
                                    <a class="btn btn-primary btn-md m-1" href="{{ url('role/create') }}">
                                          <i class="fa fa-plus text-white mr-2"></i> New Role
                                    </a>
                              </div>
                              <div class="card-body">
                                    <div class="table-responsive">
                                          <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                      <tr>
                                                            <th>Name</th>
                                                            <th>Permissions</th>
                                                            <th>Active</th>
                                                            <th>Created Date</th>
                                                            <th>Action</th>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                      <tr>
                                                            <td>Editor</td>
                                                            <td>
                                                                  <span class="badge badge-primary">dashboard</span>
                                                                  <span class="badge badge-primary">my_camera_view</span>
                                                                  <span class="badge badge-primary">my_camera_edit</span>
                                                            </td>
                                                            <td>Yes</td>
                                                            <td>2024-08-10</td>
                                                            <td>
                                                                  <a href="{{url('role/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('role/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('role/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Viewer</td>
                                                            <td>
                                                                  <span class="badge badge-primary">dashboard</span>
                                                                  <span class="badge badge-primary">my_camera_view</span>
                                                            </td>
                                                            <td>No</td>
                                                            <td>2023-12-01</td>
                                                            <td>
                                                                  <a href="{{url('role/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('role/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('role/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Manager</td>
                                                            <td>
                                                                  <span class="badge badge-primary">dashboard</span>
                                                                  <span class="badge badge-primary">my_camera_access</span>
                                                                  <span class="badge badge-primary">my_camera_create</span>
                                                                  <span class="badge badge-primary">my_patrols_access</span>
                                                            </td>
                                                            <td>Yes</td>
                                                            <td>2025-01-22</td>
                                                            <td>
                                                                  <a href="{{url('role/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('role/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('role/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Security Chief</td>
                                                            <td>
                                                                  <span class="badge badge-primary">dashboard</span>
                                                                  <span class="badge badge-primary">my_patrols_access</span>
                                                                  <span class="badge badge-primary">incident_reports_view</span>
                                                            </td>
                                                            <td>Yes</td>
                                                            <td>2023-09-12</td>
                                                            <td>
                                                                  <a href="{{url('role/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('role/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('role/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Admin Assistant</td>
                                                            <td>
                                                                  <span class="badge badge-primary">dashboard</span>
                                                                  <span class="badge badge-primary">my_camera_view</span>
                                                                  <span class="badge badge-primary">user_support_access</span>
                                                            </td>
                                                            <td>No</td>
                                                            <td>2022-05-06</td>
                                                            <td>
                                                                  <a href="{{url('role/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('role/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('role/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>IT Supervisor</td>
                                                            <td>
                                                                  <span class="badge badge-primary">dashboard</span>
                                                                  <span class="badge badge-primary">my_camera_access</span>
                                                                  <span class="badge badge-primary">my_camera_edit</span>
                                                                  <span class="badge badge-primary">system_logs_view</span>
                                                            </td>
                                                            <td>Yes</td>
                                                            <td>2024-03-03</td>
                                                            <td>
                                                                  <a href="{{url('role/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('role/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('role/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>

                                                </tbody>
                                                <tfoot>
                                                      <th>Name</th>
                                                      <th>Permissions</th>
                                                      <th>Active</th>
                                                      <th>Created Date</th>
                                                      <th>Action</th>
                                                </tfoot>
                                          </table>
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