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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Mosaics</a></li>
                  </ol>
            </div>
      </div>
      <!-- row -->

      <div class="container-fluid">
            <div class="row">
                  <div class="col-12">
                        <div class="card">
                              <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title mb-0">Mosaics</h4>
                                    <a class="btn btn-primary btn-md m-1" href="{{ url('mosaic/create') }}">
                                          <i class="fa fa-plus text-white mr-2"></i> New Mosaic
                                    </a>
                              </div>
                              <div class="card-body">
                                    <div class="table-responsive">
                                          <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                      <tr>
                                                            <th>Name</th>
                                                            <th>Capacity</th>
                                                            <th>Cameras</th>
                                                            <th>Users</th>
                                                            <th>Active</th>
                                                            <th>Created Date</th>
                                                            <th>Action</th>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                      <tr>
                                                            <td>Acodjar Agencia Ilobasco #1</td>
                                                            <td>4</td>
                                                            <td>3</td>
                                                            <td>2</td>
                                                            <td>Yes</td>
                                                            <td>2022-05-06</td>
                                                            <td>
                                                                  <a href="{{url('mosaic/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('mosaic/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>VisionTech Central Hub</td>
                                                            <td>8</td>
                                                            <td>6</td>
                                                            <td>4</td>
                                                            <td>Yes</td>
                                                            <td>2023-02-14</td>
                                                            <td>
                                                                  <a href="{{url('mosaic/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('mosaic/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>SafeWatch HQ</td>
                                                            <td>12</td>
                                                            <td>10</td>
                                                            <td>6</td>
                                                            <td>Yes</td>
                                                            <td>2024-01-20</td>
                                                            <td>
                                                                  <a href="{{url('mosaic/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('mosaic/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Guardian South Block</td>
                                                            <td>6</td>
                                                            <td>5</td>
                                                            <td>3</td>
                                                            <td>No</td>
                                                            <td>2023-05-11</td>
                                                            <td>
                                                                  <a href="{{url('mosaic/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('mosaic/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>CamCore West Agency</td>
                                                            <td>10</td>
                                                            <td>8</td>
                                                            <td>5</td>
                                                            <td>Yes</td>
                                                            <td>2024-03-03</td>
                                                            <td>
                                                                  <a href="{{url('mosaic/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('mosaic/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Atlas Security Node</td>
                                                            <td>7</td>
                                                            <td>6</td>
                                                            <td>4</td>
                                                            <td>Yes</td>
                                                            <td>2022-08-22</td>
                                                            <td>
                                                                  <a href="{{url('mosaic/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('mosaic/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Northview Camera Grid</td>
                                                            <td>5</td>
                                                            <td>4</td>
                                                            <td>2</td>
                                                            <td>No</td>
                                                            <td>2023-09-09</td>
                                                            <td>
                                                                  <a href="{{url('mosaic/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('mosaic/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>OmniTrack East Terminal</td>
                                                            <td>9</td>
                                                            <td>7</td>
                                                            <td>5</td>
                                                            <td>Yes</td>
                                                            <td>2024-06-12</td>
                                                            <td>
                                                                  <a href="{{url('mosaic/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('mosaic/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Centralized Monitoring Point</td>
                                                            <td>11</td>
                                                            <td>10</td>
                                                            <td>6</td>
                                                            <td>Yes</td>
                                                            <td>2025-04-01</td>
                                                            <td>
                                                                  <a href="{{url('mosaic/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('mosaic/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>AlphaNode Security</td>
                                                            <td>6</td>
                                                            <td>5</td>
                                                            <td>3</td>
                                                            <td>No</td>
                                                            <td>2022-12-19</td>
                                                            <td>
                                                                  <a href="{{url('mosaic/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('mosaic/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Echo Surveillance Hub</td>
                                                            <td>3</td>
                                                            <td>2</td>
                                                            <td>1</td>
                                                            <td>Yes</td>
                                                            <td>2023-07-25</td>
                                                            <td>
                                                                  <a href="{{url('mosaic/create')}}" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                                                                  <a href="{{url('mosaic/view')}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                                                            </td>
                                                      </tr>

                                                </tbody>
                                                <tfoot>
                                                      <th>Name</th>
                                                      <th>Capacity</th>
                                                      <th>Cameras</th>
                                                      <th>Users</th>
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