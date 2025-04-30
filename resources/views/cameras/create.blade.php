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
                        <li class="breadcrumb-item"><a href="{{url('cameras')}}">My Camera</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Create</a></li>
                  </ol>
            </div>
      </div>
      <!-- row -->

      <div class="container-fluid">
            <div class="row justify-content-center">
                  <div class="col-lg-12">
                        @if (session()->has('error'))
                        <div class="alert alert-danger">
                              {{ session()->get('error') }}
                        </div>
                        @endif
                        <div class="card">
                              <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title mb-0">{{isset($camera)?'Update':'Add New'}} Camera</h4>
                              </div>
                              <form action="{{ url('cameras/store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                          <div class="row">
                                                <input type="hidden" name="id" value="{{isset($camera)?$camera->id:''}}" />
                                                <div class="col-md-6">
                                                      <div class="form-group">
                                                            <label class="col-form-label" for="name">Name <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="name" name="name" value="{{isset($camera)?$camera->name:old('name')}}" placeholder="Enter name.." required>
                                                            @error('name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                      <div class="form-group">
                                                            <label class="col-form-label" for="manufacturer">Manufacturer/Plantilla <span class="text-danger">*</span>
                                                            </label>
                                                            <select class="form-control" name="manufacturer" id="manufacturer" required>
                                                                  <option value="">--Select Manufacturer--</option>
                                                                  <option value="RTSP Generic" {{(isset($camera) && $camera->manufacturer=='RTSP Generic')?'selected':''}}>RTSP Generic</option>
                                                            </select>
                                                            @error('manufacturer')
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                      <div class="form-group">
                                                            <label class="col-form-label" for="protocol">Protocol <span class="text-danger">*</span>
                                                            </label>
                                                            <select class="form-control" name="protocol" id="protocol" required>
                                                                  <option value="" selected disabled>--Select Protocol--</option>
                                                                  <option value="RTSP" {{(isset($camera) && $camera->protocol=='RTSP')?'selected':''}}>RTSP</option>
                                                                  <option value="P2P" {{(isset($camera) && $camera->protocol=='P2P')?'selected':''}}>P2P</option>
                                                                  <option value="RTMP" {{(isset($camera) && $camera->protocol=='RTMP')?'selected':''}}>RTMP</option>
                                                            </select>
                                                            @error('protocol')
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                      <div class="form-group">
                                                            <label class="col-form-label" for="ip_address">IP Address <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="ip_address" value="{{isset($camera)?$camera->ip_address:old('ip_address')}}" name="ip_address" placeholder="Enter ip address..">
                                                            @error('ip_address')
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                      <div class="form-group">
                                                            <label class="col-form-label" for="location">Location <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="location" name="location" value="{{isset($camera)?$camera->location:old('location')}}" placeholder="Enter location..">
                                                            @error('location')
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                      <div class="form-group">
                                                            <label class="col-form-label" for="longitude">Longitude <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="longitude" name="longitude" value="{{isset($camera)?$camera->longitude:old('longitude')}}" placeholder="Enter longitude..">
                                                            @error('longitude')
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                      <div class="form-group">
                                                            <label class="col-form-label" for="latitude">Latitude <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="latitude" name="latitude" value="{{isset($camera)?$camera->latitude:old('latitude')}}" placeholder="Enter latitude..">
                                                            @error('latitude')
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                      <div class="form-group">
                                                            <label class="col-form-label" for="port">Port</label>
                                                            <input type="text" class="form-control" id="port" name="port" value="{{isset($camera)?$camera->port:old('port')}}" placeholder="Enter port..">
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                      <div class="form-group">
                                                            <label class="col-form-label" for="username">Username</label>
                                                            <input type="text" class="form-control" id="username" name="username" value="{{isset($camera)?$camera->username:old('username')}}" placeholder="Enter username..">
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                      <div class="form-group">
                                                            <label class="col-form-label" for="password">Password</label>
                                                            <input type="text" class="form-control" id="password" name="password" value="{{isset($camera)?$camera->password:old('password')}}" placeholder="Enter password..">
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="card-footer">

                                          <div class="row">
                                                <div class="col-md-12">
                                                      <a href="{{ url('cameras') }}" class="btn btn-danger">Cancel</a>
                                                      <button class="btn btn-primary">{{isset($camera)?'Update':'Save'}}</button>
                                                </div>
                                          </div>
                                    </div>
                              </form>
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