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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Users</a></li>
                  </ol>
            </div>
      </div>
      <!-- row -->

      <div class="container-fluid">
            <div class="row">
                  <div class="col-12">
                        <div class="card">
                              <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title mb-0">Users</h4>
                                    <a class="btn btn-primary btn-md m-1" href="{{ url('user/create') }}">
                                          <i class="fa fa-plus text-white mr-2"></i> New User
                                    </a>
                              </div>
                              <div class="card-body">
                                    <div class="table-responsive">
                                          <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                      <tr>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Phone</th>
                                                            <th>Role</th>
                                                            <th>Address</th>
                                                            <th>Active</th>
                                                            <th>Created Date</th>
                                                            <th>Action</th>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                      <tr>
                                                            <td>Jane Doe</td>
                                                            <td>jane.doe@example.com</td>
                                                            <td>(555) 123-4567</td>
                                                            <td>Admin</td>
                                                            <td>123 Elm St, Springfield, IL</td>
                                                            <td>Yes</td>
                                                            <td>2024-11-15</td>
                                                            <td>
                                                                  <a href="{{url('user/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('user/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('user/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Michael Smith</td>
                                                            <td>michael.smith@example.com</td>
                                                            <td>(555) 987-6543</td>
                                                            <td>User</td>
                                                            <td>456 Oak Ave, Portland, OR</td>
                                                            <td>No</td>
                                                            <td>2023-07-20</td>
                                                            <td>
                                                                  <a href="{{url('user/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('user/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('user/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Emily Johnson</td>
                                                            <td>emily.johnson@example.com</td>
                                                            <td>(555) 222-3344</td>
                                                            <td>Editor</td>
                                                            <td>789 Maple Dr, Austin, TX</td>
                                                            <td>Yes</td>
                                                            <td>2025-02-10</td>
                                                            <td>
                                                                  <a href="{{url('user/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('user/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('user/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Chris Lee</td>
                                                            <td>chris.lee@example.com</td>
                                                            <td>(555) 444-5566</td>
                                                            <td>Moderator</td>
                                                            <td>321 Pine Ln, Seattle, WA</td>
                                                            <td>Yes</td>
                                                            <td>2022-09-05</td>
                                                            <td>
                                                                  <a href="{{url('user/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('user/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('user/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Olivia Brown</td>
                                                            <td>olivia.brown@example.com</td>
                                                            <td>(555) 777-8899</td>
                                                            <td>User</td>
                                                            <td>654 Cedar Ct, Miami, FL</td>
                                                            <td>No</td>
                                                            <td>2024-04-01</td>
                                                            <td>
                                                                  <a href="{{url('user/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('user/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('user/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Liam Martinez</td>
                                                            <td>liam.martinez@example.com</td>
                                                            <td>(555) 666-7788</td>
                                                            <td>Manager</td>
                                                            <td>102 Sunset Blvd, Los Angeles, CA</td>
                                                            <td>Yes</td>
                                                            <td>2023-01-12</td>
                                                            <td>
                                                                  <a href="{{url('user/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('user/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('user/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Sophia Davis</td>
                                                            <td>sophia.davis@example.com</td>
                                                            <td>(555) 111-2233</td>
                                                            <td>Admin</td>
                                                            <td>87 River Rd, Nashville, TN</td>
                                                            <td>No</td>
                                                            <td>2022-10-08</td>
                                                            <td>
                                                                  <a href="{{url('user/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('user/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('user/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>William Clark</td>
                                                            <td>william.clark@example.com</td>
                                                            <td>(555) 333-4455</td>
                                                            <td>Support</td>
                                                            <td>98 Hill St, Denver, CO</td>
                                                            <td>Yes</td>
                                                            <td>2024-03-18</td>
                                                            <td>
                                                                  <a href="{{url('user/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('user/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('user/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Isabella Wilson</td>
                                                            <td>isabella.wilson@example.com</td>
                                                            <td>(555) 888-9900</td>
                                                            <td>User</td>
                                                            <td>29 Birch Ln, Raleigh, NC</td>
                                                            <td>No</td>
                                                            <td>2023-05-27</td>
                                                            <td>
                                                                  <a href="{{url('user/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('user/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('user/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>James Walker</td>
                                                            <td>james.walker@example.com</td>
                                                            <td>(555) 101-2020</td>
                                                            <td>Manager</td>
                                                            <td>12 Valley View, Salt Lake City, UT</td>
                                                            <td>Yes</td>
                                                            <td>2025-01-05</td>
                                                            <td>
                                                                  <a href="{{url('user/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('user/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('user/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Ava Hernandez</td>
                                                            <td>ava.hernandez@example.com</td>
                                                            <td>(555) 505-6060</td>
                                                            <td>Editor</td>
                                                            <td>210 Palm Dr, Tampa, FL</td>
                                                            <td>No</td>
                                                            <td>2023-11-02</td>
                                                            <td>
                                                                  <a href="{{url('user/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('user/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('user/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Benjamin King</td>
                                                            <td>benjamin.king@example.com</td>
                                                            <td>(555) 222-3333</td>
                                                            <td>Admin</td>
                                                            <td>501 Liberty St, Columbus, OH</td>
                                                            <td>Yes</td>
                                                            <td>2024-08-29</td>
                                                            <td>
                                                                  <a href="{{url('user/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('user/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('user/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Charlotte Scott</td>
                                                            <td>charlotte.scott@example.com</td>
                                                            <td>(555) 999-1212</td>
                                                            <td>Support</td>
                                                            <td>312 Magnolia Ln, Boise, ID</td>
                                                            <td>No</td>
                                                            <td>2023-06-13</td>
                                                            <td>
                                                                  <a href="{{url('user/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('user/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('user/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Daniel Green</td>
                                                            <td>daniel.green@example.com</td>
                                                            <td>(555) 314-1592</td>
                                                            <td>User</td>
                                                            <td>88 Lakeview Dr, Madison, WI</td>
                                                            <td>Yes</td>
                                                            <td>2022-12-22</td>
                                                            <td>
                                                                  <a href="{{url('user/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('user/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('user/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Mia Adams</td>
                                                            <td>mia.adams@example.com</td>
                                                            <td>(555) 707-8080</td>
                                                            <td>Moderator</td>
                                                            <td>734 Forest Rd, Anchorage, AK</td>
                                                            <td>No</td>
                                                            <td>2024-06-30</td>
                                                            <td>
                                                                  <a href="{{url('user/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('user/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('user/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>

                                                </tbody>
                                                <tfoot>
                                                      <th>Name</th>
                                                      <th>Email</th>
                                                      <th>Phone</th>
                                                      <th>Role</th>
                                                      <th>Address</th>
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