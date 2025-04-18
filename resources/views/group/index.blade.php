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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Groups</a></li>
                  </ol>
            </div>
      </div>
      <!-- row -->

      <div class="container-fluid">
            <div class="row">
                  <div class="col-12">
                        <div class="card">
                              <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title mb-0">Groups</h4>
                                    <a class="btn btn-primary btn-md m-1" href="{{ url('group/create') }}">
                                          <i class="fa fa-plus text-white mr-2"></i> New Group
                                    </a>
                              </div>
                              <div class="card-body">
                                    <div class="table-responsive">
                                          <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                      <tr>
                                                            <th>Name</th>
                                                            <th>Cameras</th>
                                                            <th>Users</th>
                                                            <th>Default</th>
                                                            <th>Active</th>
                                                            <th>Comment</th>
                                                            <th>Created Date</th>
                                                            <th>Action</th>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                      <tr>
                                                            <td>Good Group</td>
                                                            <td><span class="badge badge-primary">181</span></td>
                                                            <td><span class="badge badge-primary">3</span></td>
                                                            <td><span class="fas fa-check text-success" title="Default Group"></span></td>
                                                            <td><span class="fas fa-times text-danger" title="Inactive"></span></td>
                                                            <td>Server room motion alert system.</td>
                                                            <td>2025-04-17 09:45 AM</td>
                                                            <td>
                                                                  <a href="{{url('group/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('group/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('group/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>

                                                      <tr>
                                                            <td>Admin Team</td>
                                                            <td><span class="badge badge-primary">96</span></td>
                                                            <td><span class="badge badge-primary">7</span></td>
                                                            <td><span class="fas fa-times text-secondary" title="Not Default"></span></td>
                                                            <td><span class="fas fa-check text-success" title="Active"></span></td>
                                                            <td>Main control access.</td>
                                                            <td>2025-04-16 02:10 PM</td>
                                                            <td>
                                                                  <a href="{{url('group/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('group/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('group/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>

                                                      <tr>
                                                            <td>Visitor Monitoring</td>
                                                            <td><span class="badge badge-primary">12</span></td>
                                                            <td><span class="badge badge-primary">2</span></td>
                                                            <td><span class="fas fa-times text-secondary"></span></td>
                                                            <td><span class="fas fa-check text-success"></span></td>
                                                            <td>Tracks visitor area after hours.</td>
                                                            <td>2025-04-15 05:20 PM</td>
                                                            <td>
                                                                  <a href="{{url('group/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('group/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('group/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>

                                                      <tr>
                                                            <td>Security Ops</td>
                                                            <td><span class="badge badge-primary">75</span></td>
                                                            <td><span class="badge badge-primary">10</span></td>
                                                            <td><span class="fas fa-times text-secondary"></span></td>
                                                            <td><span class="fas fa-check text-success"></span></td>
                                                            <td>Core team for perimeter defense.</td>
                                                            <td>2025-04-14 08:00 AM</td>
                                                            <td>
                                                                  <a href="{{url('group/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('group/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('group/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>

                                                      <tr>
                                                            <td>Night Patrol</td>
                                                            <td><span class="badge badge-primary">34</span></td>
                                                            <td><span class="badge badge-primary">4</span></td>
                                                            <td><span class="fas fa-check text-success"></span></td>
                                                            <td><span class="fas fa-check text-success"></span></td>
                                                            <td>Active during off-hours.</td>
                                                            <td>2025-04-13 11:15 PM</td>
                                                            <td>
                                                                  <a href="{{url('group/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('group/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('group/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>

                                                      <tr>
                                                            <td>Emergency Response</td>
                                                            <td><span class="badge badge-primary">50</span></td>
                                                            <td><span class="badge badge-primary">6</span></td>
                                                            <td><span class="fas fa-times text-secondary"></span></td>
                                                            <td><span class="fas fa-times text-danger"></span></td>
                                                            <td>Group for critical incidents only.</td>
                                                            <td>2025-04-12 06:25 PM</td>
                                                            <td>
                                                                  <a href="{{url('group/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('group/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('group/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>

                                                      <tr>
                                                            <td>Lobby Access</td>
                                                            <td><span class="badge badge-primary">15</span></td>
                                                            <td><span class="badge badge-primary">1</span></td>
                                                            <td><span class="fas fa-times text-secondary"></span></td>
                                                            <td><span class="fas fa-check text-success"></span></td>
                                                            <td>Front lobby door access group.</td>
                                                            <td>2025-04-11 10:30 AM</td>
                                                            <td>
                                                                  <a href="{{url('group/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('group/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('group/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>

                                                      <tr>
                                                            <td>Technical Staff</td>
                                                            <td><span class="badge badge-primary">42</span></td>
                                                            <td><span class="badge badge-primary">5</span></td>
                                                            <td><span class="fas fa-times text-secondary"></span></td>
                                                            <td><span class="fas fa-check text-success"></span></td>
                                                            <td>Monitors internal IT zones.</td>
                                                            <td>2025-04-10 03:55 PM</td>
                                                            <td>
                                                                  <a href="{{url('group/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('group/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('group/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>

                                                      <tr>
                                                            <td>Elevator Control</td>
                                                            <td><span class="badge badge-primary">10</span></td>
                                                            <td><span class="badge badge-primary">1</span></td>
                                                            <td><span class="fas fa-check text-success"></span></td>
                                                            <td><span class="fas fa-check text-success"></span></td>
                                                            <td>Controls elevator access by floor.</td>
                                                            <td>2025-04-09 01:00 PM</td>
                                                            <td>
                                                                  <a href="{{url('group/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('group/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('group/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>

                                                      <tr>
                                                            <td>Training Team</td>
                                                            <td><span class="badge badge-primary">22</span></td>
                                                            <td><span class="badge badge-primary">3</span></td>
                                                            <td><span class="fas fa-times text-secondary"></span></td>
                                                            <td><span class="fas fa-check text-success"></span></td>
                                                            <td>Used for system access simulations.</td>
                                                            <td>2025-04-08 04:40 PM</td>
                                                            <td>
                                                                  <a href="{{url('group/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('group/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('group/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>

                                                      <tr>
                                                            <td>Inactive Group</td>
                                                            <td><span class="badge badge-primary">5</span></td>
                                                            <td><span class="badge badge-primary">0</span></td>
                                                            <td><span class="fas fa-times text-secondary"></span></td>
                                                            <td><span class="fas fa-times text-danger"></span></td>
                                                            <td>No longer in use.</td>
                                                            <td>2025-04-07 09:10 AM</td>
                                                            <td>
                                                                  <a href="{{url('group/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('group/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('group/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                </tbody>
                                                <tfoot>
                                                      <th>Name</th>
                                                      <th>Cameras</th>
                                                      <th>Users</th>
                                                      <th>Default</th>
                                                      <th>Active</th>
                                                      <th>Comment</th>
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