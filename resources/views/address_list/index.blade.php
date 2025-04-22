@extends('layouts.app')
@section('css')
<style>
      .form,
      .datatable,
      .actions {
            margin: 20px;
      }

      input,
      select {
            margin: 5px;
            padding: 5px;
      }

      table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
      }

      th,
      td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
      }

      .delete-btn,
      #clear-all {
            background: red;
            color: white;
            padding: 5px 10px;
            cursor: pointer;
            border: none;
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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Address</a></li>
                  </ol>
            </div>
      </div>
      <!-- row -->

      <div class="container-fluid">
            <div class="row">
                  <div class="col-12">
                        <div class="card">
                              <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title mb-0">RTSPs Address List</h4>
                              </div>
                              <div class="card-body">
                                    <div class="form">
                                          <div class="row">
                                                <div class="col-md-4">
                                                      <div class="form-group">
                                                            <label class="col-form-label" for="user">User </label>
                                                            <input type="text" class="form-control" id="user" placeholder="user">
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                      <div class="form-group">
                                                            <label class="col-form-label" for="password">Password </label>
                                                            <input type="text" class="form-control" id="password" placeholder="Password">
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                      <div class="form-group">
                                                            <label class="col-form-label" for="domain">Domain </label>
                                                            <input type="text" class="form-control" id="domain" placeholder="domain">
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                      <div class="form-group">
                                                            <label class="col-form-label" for="port">Port </label>
                                                            <input type="text" class="form-control" id="port" placeholder="port">
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                      <div class="form-group">
                                                            <label class="col-form-label" for="manufacturer">Manufacturer </label>
                                                            <input type="text" class="form-control" id="manufacturer" placeholder="manufacturer">
                                                      </div>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                      <div class="form-group">
                                                            <button class="btn btn-primary">Submit</button>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="row">
                                          <div class="col-md-12 mt-3">
                                                <span>EZView</span> <br>
                                                <span>IPC Sub Stream</span> <br>
                                                <span>rtsp://Tenda:Password@Domain:13/media/video2</span>
                                          </div>
                                          <div class="col-md-12 mt-3">
                                                <span>EZView</span> <br>
                                                <span>IPC Sub Stream</span> <br>
                                                <span>rtsp://Tenda:Password@Domain:13/media/video2</span>
                                          </div>
                                          <div class="col-md-12 mt-3">
                                                <span>EZView</span> <br>
                                                <span>IPC Sub Stream</span> <br>
                                                <span>rtsp://Tenda:Password@Domain:13/media/video2</span>
                                          </div>
                                          <div class="col-md-12 mt-3">
                                                <span>EZView</span> <br>
                                                <span>IPC Sub Stream</span> <br>
                                                <span>rtsp://Tenda:Password@Domain:13/media/video2</span>
                                          </div>
                                          <div class="col-md-12 mt-3">
                                                <span>EZView</span> <br>
                                                <span>IPC Sub Stream</span> <br>
                                                <span>rtsp://Tenda:Password@Domain:13/media/video2</span>
                                          </div>
                                          <div class="col-md-12 mt-3">
                                                <span>EZView</span> <br>
                                                <span>IPC Sub Stream</span> <br>
                                                <span>rtsp://Tenda:Password@Domain:13/media/video2</span>
                                          </div>
                                          <div class="col-md-12 mt-3">
                                                <span>EZView</span> <br>
                                                <span>IPC Sub Stream</span> <br>
                                                <span>rtsp://Tenda:Password@Domain:13/media/video2</span>
                                          </div>
                                          <div class="col-md-12 mt-3">
                                                <span>EZView</span> <br>
                                                <span>IPC Sub Stream</span> <br>
                                                <span>rtsp://Tenda:Password@Domain:13/media/video2</span>
                                          </div>
                                          <div class="col-md-12 mt-3">
                                                <span>EZView</span> <br>
                                                <span>IPC Sub Stream</span> <br>
                                                <span>rtsp://Tenda:Password@Domain:13/media/video2</span>
                                          </div>
                                          <div class="col-md-12 mt-3">
                                                <span>EZView</span> <br>
                                                <span>IPC Sub Stream</span> <br>
                                                <span>rtsp://Tenda:Password@Domain:13/media/video2</span>
                                          </div>
                                          <div class="col-md-12 mt-3">
                                                <span>EZView</span> <br>
                                                <span>IPC Sub Stream</span> <br>
                                                <span>rtsp://Tenda:Password@Domain:13/media/video2</span>
                                          </div>
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
      function calculateStorage(kbps, cameras, days) {
            const bitsPerSecond = kbps * 1000;
            const totalSeconds = days * 24 * 60 * 60;
            const totalBits = bitsPerSecond * cameras * totalSeconds;
            const totalBytes = totalBits / 8;
            const totalTB = totalBytes / 1e12;
            return totalTB.toFixed(2) + " TB";
      }

      $(document).ready(function() {
            $('#add').click(function() {
                  const desc = $('#description').val();
                  const res = $('#resolution').val();
                  const kbps = parseInt($('#kbps').val());
                  const cams = parseInt($('#cameras').val());
                  const days = parseInt($('#days').val());
                  const storage = calculateStorage(kbps, cams, days);

                  $('#storage').val(storage);

                  const row = `
        <tr>
          <td>${desc}</td>
          <td>${res} (${kbps}Kbps)</td>
          <td>${cams}</td>
          <td>${days}</td>
          <td>${storage}</td>
          <td><button class="delete-btn"><span class="fa fa-trash"></span></button></td>
        </tr>
      `;
                  $('#data-body').append(row);
            });

            $('#data-body').on('click', '.delete-btn', function() {
                  $(this).closest('tr').remove();
            });

            $('#clear-all').click(function() {
                  $('#data-body').empty();
            });
      });
</script>
@endsection