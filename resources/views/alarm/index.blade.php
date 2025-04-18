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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Alarms</a></li>
                  </ol>
            </div>
      </div>
      <!-- row -->

      <div class="container-fluid">
            <div class="row">
                  <div class="col-12">
                        <div class="card">
                              <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title mb-0">Alarms</h4>
                                    <a class="btn btn-primary btn-md m-1" href="{{ url('alarm/create') }}">
                                          <i class="fa fa-plus text-white mr-2"></i> New Alarm
                                    </a>
                              </div>
                              <div class="card-body">
                                    <div class="table-responsive">
                                          <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                      <tr>
                                                            <th>Name</th>
                                                            <th>Description</th>
                                                            <th>Users</th>
                                                            <th>Cameras</th>
                                                            <th>Created Date</th>
                                                            <th>Action</th>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                      <tr>
                                                            <td>Alarm 1</td>
                                                            <td>Main entrance perimeter monitoring system.</td>
                                                            <td><span class="badge badge-primary">John Doe</span> <span class="badge badge-primary">Jane Smith</span></td>
                                                            <td><span class="badge badge-primary">Cam A1</span> <span class="badge badge-primary">Cam B2</span></td>
                                                            <td>2025-04-17 09:45 AM</td>
                                                            <td>
                                                                  <a href="{{url('alarm/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('alarm/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('alarm/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Alarm 2</td>
                                                            <td>Server room motion alert system.</td>
                                                            <td><span class="badge badge-primary">Alice Green</span></td>
                                                            <td><span class="badge badge-primary">Cam SR1</span></td>
                                                            <td>2025-04-17 10:15 AM</td>
                                                            <td>
                                                                  <a href="{{url('alarm/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('alarm/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('alarm/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Alarm 3</td>
                                                            <td>Back gate breach detection.</td>
                                                            <td><span class="badge badge-primary">Mark Lee</span> <span class="badge badge-primary">Nina Patel</span></td>
                                                            <td><span class="badge badge-primary">Cam G1</span></td>
                                                            <td>2025-04-17 11:00 AM</td>
                                                            <td>
                                                                  <a href="{{url('alarm/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('alarm/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('alarm/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Alarm 4</td>
                                                            <td>Parking lot activity monitor.</td>
                                                            <td><span class="badge badge-primary">Olivia Adams</span></td>
                                                            <td><span class="badge badge-primary">Cam P1</span> <span class="badge badge-primary">Cam P2</span></td>
                                                            <td>2025-04-17 11:30 AM</td>
                                                            <td>
                                                                  <a href="{{url('alarm/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('alarm/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('alarm/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Alarm 5</td>
                                                            <td>Emergency exit sensor.</td>
                                                            <td><span class="badge badge-primary">Tom Carter</span></td>
                                                            <td><span class="badge badge-primary">Cam EX1</span></td>
                                                            <td>2025-04-17 12:05 PM</td>
                                                            <td>
                                                                  <a href="{{url('alarm/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('alarm/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('alarm/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Alarm 6</td>
                                                            <td>Warehouse internal motion sensors.</td>
                                                            <td><span class="badge badge-primary">Lisa Wong</span> <span class="badge badge-primary">Ethan Hill</span></td>
                                                            <td><span class="badge badge-primary">Cam W1</span> <span class="badge badge-primary">Cam W2</span></td>
                                                            <td>2025-04-17 12:30 PM</td>
                                                            <td>
                                                                  <a href="{{url('alarm/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('alarm/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('alarm/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Alarm 7</td>
                                                            <td>Fire exit unauthorized use alert.</td>
                                                            <td><span class="badge badge-primary">Karen Bennett</span></td>
                                                            <td><span class="badge badge-primary">Cam F1</span></td>
                                                            <td>2025-04-17 01:10 PM</td>
                                                            <td>
                                                                  <a href="{{url('alarm/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('alarm/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('alarm/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Alarm 8</td>
                                                            <td>Visitor area night alert.</td>
                                                            <td><span class="badge badge-primary">Samuel King</span></td>
                                                            <td><span class="badge badge-primary">Cam V1</span> <span class="badge badge-primary">Cam V2</span></td>
                                                            <td>2025-04-17 02:00 PM</td>
                                                            <td>
                                                                  <a href="{{url('alarm/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('alarm/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('alarm/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Alarm 9</td>
                                                            <td>Reception zone after-hours activity.</td>
                                                            <td><span class="badge badge-primary">Jessica Ray</span> <span class="badge badge-primary">Aaron Cole</span></td>
                                                            <td><span class="badge badge-primary">Cam R1</span></td>
                                                            <td>2025-04-17 02:45 PM</td>
                                                            <td>
                                                                  <a href="{{url('alarm/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('alarm/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('alarm/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Alarm 10</td>
                                                            <td>Lobby glass break detection.</td>
                                                            <td><span class="badge badge-primary">Michael Scott</span></td>
                                                            <td><span class="badge badge-primary">Cam L1</span></td>
                                                            <td>2025-04-17 03:20 PM</td>
                                                            <td>
                                                                  <a href="{{url('alarm/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('alarm/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('alarm/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Alarm 11</td>
                                                            <td>Break room restricted hour monitor.</td>
                                                            <td><span class="badge badge-primary">Dwight Schrute</span></td>
                                                            <td><span class="badge badge-primary">Cam BR1</span> <span class="badge badge-primary">Cam BR2</span></td>
                                                            <td>2025-04-17 03:45 PM</td>
                                                            <td>
                                                                  <a href="{{url('alarm/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('alarm/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('alarm/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                </tbody>
                                                <tfoot>
                                                      <th>Name</th>
                                                      <th>Description</th>
                                                      <th>Users</th>
                                                      <th>Cameras</th>
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