@extends('layouts.app')
@section('css')
<style>
      .status-button {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 16px;
            border-radius: 16px;
            border: none;
            background-color: #f4f4f4;
            color: #333;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
            height: 80px;
            width: 100%;
            transition: all 0.3s ease;
      }

      .status-button .icon {
            font-size: 22px;
      }

      .status-button .text {
            display: flex;
            flex-direction: column;
            text-align: left;
      }

      .status-button .label {
            font-size: 12px;
            color: #666;
      }

      .status-button .count {
            font-size: 20px;
            font-weight: bold;
      }

      .status-button.active {
            background-color: #007bff;
            color: #fff;
      }

      .status-button.active .label {
            color: #fff;
      }

      .status-button:hover {
            transform: scale(1.02);
            cursor: pointer;
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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Cameras</a></li>
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
                                    <div class="row">
                                          <div class="col-md-12">
                                                <div class="container mt-2">
                                                      <div class="row g-3" id="status-filters">
                                                            <div class="col-6 col-md">
                                                                  <button class="status-button active w-100" data-status="enabled">
                                                                        <div class="icon"><i class="fas fa-check"></i></div>
                                                                        <div class="text">
                                                                              <div class="label">Enabled</div>
                                                                              <div class="count">185</div>
                                                                        </div>
                                                                  </button>
                                                            </div>

                                                            <div class="col-6 col-md">
                                                                  <button class="status-button w-100" data-status="disabled">
                                                                        <div class="icon"><i class="fas fa-video-slash"></i></div>
                                                                        <div class="text">
                                                                              <div class="label">Disabled</div>
                                                                              <div class="count">0</div>
                                                                        </div>
                                                                  </button>
                                                            </div>

                                                            <div class="col-6 col-md">
                                                                  <button class="status-button w-100" data-status="online">
                                                                        <div class="icon"><i class="fas fa-wifi"></i></div>
                                                                        <div class="text">
                                                                              <div class="label">Online</div>
                                                                              <div class="count">162</div>
                                                                        </div>
                                                                  </button>
                                                            </div>

                                                            <div class="col-6 col-md">
                                                                  <button class="status-button w-100" data-status="offline">
                                                                        <div class="icon"><i class="fas fa-ban"></i></div>
                                                                        <div class="text">
                                                                              <div class="label">Offline</div>
                                                                              <div class="count">23</div>
                                                                        </div>
                                                                  </button>
                                                            </div>

                                                            <div class="col-6 col-md">
                                                                  <button class="status-button w-100" data-status="unstable">
                                                                        <div class="icon"><i class="fas fa-exclamation-triangle"></i></div>
                                                                        <div class="text">
                                                                              <div class="label">Unstable</div>
                                                                              <div class="count">0</div>
                                                                        </div>
                                                                  </button>
                                                            </div>
                                                      </div>
                                                </div>

                                          </div>
                                    </div>
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
@section('js')
<script>
      $('.status-button').on('click', function() {
            $('.status-button').removeClass('active');
            $(this).addClass('active');

            const status = $(this).data('status');

            $.ajax({
                  url: '/your-endpoint',
                  method: 'POST',
                  data: {
                        status
                  },
                  headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  success: function(response) {
                        console.log('Filtered:', response);
                        // handle UI update
                  }
            });
      });
</script>

@endsection