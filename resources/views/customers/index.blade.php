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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Customers</a></li>
                  </ol>
            </div>
      </div>
      <!-- row -->

      <div class="container-fluid">
            <div class="row">
                  <div class="col-12">
                        <div class="card">
                              <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title mb-0">Customers</h4>
                                    <a class="btn btn-primary btn-md m-1" href="{{ url('customer/create') }}">
                                          <i class="fa fa-plus text-white mr-2"></i> New Customer
                                    </a>
                              </div>
                              <div class="card-body">
                                    <div class="table-responsive">
                                          <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                      <tr>
                                                            <th>Name</th>
                                                            <th>Company</th>
                                                            <th>Email</th>
                                                            <th>Document</th>
                                                            <th>Active</th>
                                                            <th>Created Date</th>
                                                            <th>Action</th>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                      <tr>
                                                            <td>Acodjar Agencia Ilobasco #1</td>
                                                            <td>Acodjar Group</td>
                                                            <td>info@acodjar.com</td>
                                                            <td>DUI-10293845-1</td>
                                                            <td>Yes</td>
                                                            <td>2022-05-06</td>
                                                            <td>
                                                                  <a href="{{url('customer/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('customer/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Vision Central</td>
                                                            <td>VisionTech Ltd.</td>
                                                            <td>contact@visiontech.com</td>
                                                            <td>DUI-93827162-3</td>
                                                            <td>Yes</td>
                                                            <td>2023-01-15</td>
                                                            <td>
                                                                  <a href="{{url('customer/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('customer/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>SafeWatch El Salvador</td>
                                                            <td>SafeWatch Inc.</td>
                                                            <td>admin@safewatch.com</td>
                                                            <td>DUI-11234455-0</td>
                                                            <td>No</td>
                                                            <td>2023-06-22</td>
                                                            <td>
                                                                  <a href="{{url('customer/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('customer/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Patrol Pro Services</td>
                                                            <td>Patrol Pro</td>
                                                            <td>support@patrolpro.com</td>
                                                            <td>DUI-99887766-4</td>
                                                            <td>Yes</td>
                                                            <td>2024-03-12</td>
                                                            <td>
                                                                  <a href="{{url('customer/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('customer/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>AlphaSecure Agency</td>
                                                            <td>AlphaSecure</td>
                                                            <td>alpha@secure.agency</td>
                                                            <td>DUI-44332211-9</td>
                                                            <td>No</td>
                                                            <td>2022-10-08</td>
                                                            <td>
                                                                  <a href="{{url('customer/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('customer/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>OmniTrack Branch 5</td>
                                                            <td>OmniTrack</td>
                                                            <td>branch5@omni.com</td>
                                                            <td>DUI-77441100-2</td>
                                                            <td>Yes</td>
                                                            <td>2024-01-03</td>
                                                            <td>
                                                                  <a href="{{url('customer/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('customer/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>CamView Solutions</td>
                                                            <td>CamView Corp.</td>
                                                            <td>hello@camview.com</td>
                                                            <td>DUI-33225544-7</td>
                                                            <td>Yes</td>
                                                            <td>2023-08-19</td>
                                                            <td>
                                                                  <a href="{{url('customer/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('customer/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>SecureZone LatAm</td>
                                                            <td>SecureZone</td>
                                                            <td>latam@securezone.com</td>
                                                            <td>DUI-66778899-1</td>
                                                            <td>No</td>
                                                            <td>2022-12-17</td>
                                                            <td>
                                                                  <a href="{{url('customer/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('customer/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>CentralCam Monitoring</td>
                                                            <td>CentralCam Inc.</td>
                                                            <td>monitor@centralcam.com</td>
                                                            <td>DUI-12345678-9</td>
                                                            <td>Yes</td>
                                                            <td>2023-03-30</td>
                                                            <td>
                                                                  <a href="{{url('customer/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('customer/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>NovaCam Systems</td>
                                                            <td>NovaCam</td>
                                                            <td>nova@cam.systems</td>
                                                            <td>DUI-55555555-5</td>
                                                            <td>Yes</td>
                                                            <td>2024-04-14</td>
                                                            <td>
                                                                  <a href="{{url('customer/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('customer/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                </tbody>
                                                <tfoot>
                                                      <th>Name</th>
                                                      <th>Company</th>
                                                      <th>Email</th>
                                                      <th>Document</th>
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