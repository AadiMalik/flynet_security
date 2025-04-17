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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">My Cameras</a></li>
                  </ol>
            </div>
      </div>
      <!-- row -->

      <div class="container-fluid">
            <div class="row">
                  <div class="col-12">
                        <div class="card">
                              <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title mb-0">Cameras</h4>
                                    <a class="btn btn-primary btn-md m-1" href="{{ url('camera/create') }}">
                                          <i class="fa fa-plus text-white mr-2"></i> New Camera
                                    </a>
                              </div>
                              <div class="card-body">

                                    <div class="table-responsive">
                                          <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                      <tr>
                                                            <th>Name</th>
                                                            <th>IP</th>
                                                            <th>Location</th>
                                                            <th>Longitude</th>
                                                            <th>Latitude</th>
                                                            <th>Created Date</th>
                                                            <th>Action</th>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                      <tr>
                                                            <td>Camera 01</td>
                                                            <td>192.168.1.10</td>
                                                            <td>New York, USA</td>
                                                            <td>-74.0060</td>
                                                            <td>40.7128</td>
                                                            <td>2025-04-17 09:45 AM</td>
                                                            <td>
                                                                  <a href="{{url('camera/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('camera/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('camera/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Lobby Cam</td>
                                                            <td>10.0.0.2</td>
                                                            <td>London, UK</td>
                                                            <td>-0.1276</td>
                                                            <td>51.5074</td>
                                                            <td>2025-03-25 03:12 PM</td>
                                                            <td>
                                                                  <a href="{{url('camera/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('camera/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('camera/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Warehouse</td>
                                                            <td>172.16.5.22</td>
                                                            <td>Berlin, Germany</td>
                                                            <td>13.4050</td>
                                                            <td>52.5200</td>
                                                            <td>2025-04-01 10:30 AM</td>
                                                            <td>
                                                                  <a href="{{url('camera/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('camera/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('camera/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Main Entrance</td>
                                                            <td>192.168.0.101</td>
                                                            <td>Karachi, Pakistan</td>
                                                            <td>67.0011</td>
                                                            <td>24.8607</td>
                                                            <td>2025-04-15 08:15 AM</td>
                                                            <td>
                                                                  <a href="{{url('camera/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('camera/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('camera/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Roof Cam</td>
                                                            <td>10.1.1.5</td>
                                                            <td>Tokyo, Japan</td>
                                                            <td>139.6917</td>
                                                            <td>35.6895</td>
                                                            <td>2025-04-10 06:00 PM</td>
                                                            <td>
                                                                  <a href="{{url('camera/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('camera/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('camera/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Parking Lot</td>
                                                            <td>192.168.5.20</td>
                                                            <td>Toronto, Canada</td>
                                                            <td>-79.3832</td>
                                                            <td>43.6532</td>
                                                            <td>2025-04-05 11:22 AM</td>
                                                            <td>
                                                                  <a href="{{url('camera/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('camera/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('camera/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Back Door</td>
                                                            <td>10.10.0.15</td>
                                                            <td>Dubai, UAE</td>
                                                            <td>55.2708</td>
                                                            <td>25.2048</td>
                                                            <td>2025-04-13 02:48 PM</td>
                                                            <td>
                                                                  <a href="{{url('camera/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('camera/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('camera/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Server Room</td>
                                                            <td>172.20.1.3</td>
                                                            <td>Sydney, Australia</td>
                                                            <td>151.2093</td>
                                                            <td>-33.8688</td>
                                                            <td>2025-04-02 09:10 AM</td>
                                                            <td>
                                                                  <a href="{{url('camera/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('camera/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('camera/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Reception</td>
                                                            <td>192.168.2.25</td>
                                                            <td>Paris, France</td>
                                                            <td>2.3522</td>
                                                            <td>48.8566</td>
                                                            <td>2025-03-30 04:18 PM</td>
                                                            <td>
                                                                  <a href="{{url('camera/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('camera/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('camera/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Storefront</td>
                                                            <td>10.0.5.8</td>
                                                            <td>Rome, Italy</td>
                                                            <td>12.4964</td>
                                                            <td>41.9028</td>
                                                            <td>2025-04-11 12:00 PM</td>
                                                            <td>
                                                                  <a href="{{url('camera/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('camera/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('camera/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Side Alley</td>
                                                            <td>192.168.100.50</td>
                                                            <td>Istanbul, Turkey</td>
                                                            <td>28.9784</td>
                                                            <td>41.0082</td>
                                                            <td>2025-04-16 07:30 PM</td>
                                                            <td>
                                                                  <a href="{{url('camera/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('camera/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('camera/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Hallway</td>
                                                            <td>172.16.10.9</td>
                                                            <td>Seoul, South Korea</td>
                                                            <td>126.9780</td>
                                                            <td>37.5665</td>
                                                            <td>2025-04-12 01:05 PM</td>
                                                            <td>
                                                                  <a href="{{url('camera/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('camera/view')}}" class="btn btn-warning btn-sm"><span class="fa fa-eye"></span> View</a>
                                                                  <a href="{{url('camera/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>

                                                </tbody>
                                                <tfoot>
                                                      <th>Name</th>
                                                      <th>IP</th>
                                                      <th>Location</th>
                                                      <th>Longitude</th>
                                                      <th>Latitude</th>
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