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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Permissions</a></li>
                  </ol>
            </div>
      </div>
      <!-- row -->

      <div class="container-fluid">
            <div class="row">
                  <div class="col-12">
                        <div class="card">
                              <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title mb-0">Permissions</h4>
                                    <a class="btn btn-primary btn-md m-1" href="{{ url('permission/create') }}">
                                          <i class="fa fa-plus text-white mr-2"></i> New Permission
                                    </a>
                              </div>
                              <div class="card-body">
                                    <div class="table-responsive">
                                          <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                      <tr>
                                                            <th>Permission</th>
                                                            <th>Active</th>
                                                            <th>Created Date</th>
                                                            <th>Action</th>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                      <tr>
                                                            <td>dashboard</td>
                                                            <td>Yes</td>
                                                            <td>2022-05-06</td>
                                                            <td>
                                                                  <a href="{{url('permission/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('permission/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>my_camera_access</td>
                                                            <td>Yes</td>
                                                            <td>2022-05-06</td>
                                                            <td>
                                                                  <a href="{{url('permission/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('permission/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>my_camera_view</td>
                                                            <td>No</td>
                                                            <td>2023-01-10</td>
                                                            <td>
                                                                  <a href="{{url('permission/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('permission/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>my_camera_create</td>
                                                            <td>Yes</td>
                                                            <td>2024-03-15</td>
                                                            <td>
                                                                  <a href="{{url('permission/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('permission/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>my_camera_edit</td>
                                                            <td>Yes</td>
                                                            <td>2023-06-28</td>
                                                            <td>
                                                                  <a href="{{url('permission/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('permission/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>my_patrols_access</td>
                                                            <td>Yes</td>
                                                            <td>2024-08-19</td>
                                                            <td>
                                                                  <a href="{{url('permission/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('permission/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>incident_reports_view</td>
                                                            <td>No</td>
                                                            <td>2022-11-30</td>
                                                            <td>
                                                                  <a href="{{url('permission/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('permission/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>user_support_access</td>
                                                            <td>Yes</td>
                                                            <td>2025-01-05</td>
                                                            <td>
                                                                  <a href="{{url('permission/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('permission/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>roles_edit</td>
                                                            <td>Yes</td>
                                                            <td>2023-03-11</td>
                                                            <td>
                                                                  <a href="{{url('permission/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('permission/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>analytics_access</td>
                                                            <td>Yes</td>
                                                            <td>2024-10-01</td>
                                                            <td>
                                                                  <a href="{{url('permission/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('permission/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>settings_update</td>
                                                            <td>No</td>
                                                            <td>2022-09-12</td>
                                                            <td>
                                                                  <a href="{{url('permission/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('permission/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                </tbody>
                                                <tfoot>
                                                      <th>Permisson</th>
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