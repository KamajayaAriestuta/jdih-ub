<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Register Pemohon</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('template_admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('template_admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('template_admin/dist/css/adminlte.css') }}">
</head>
<body class="hold-transition register-page">

<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Register </b>Pemohon</a>
  </div>
  
  <div class="card p-3">
    <div class="card-body register-card-body">
         <form enctype="multipart/form-data" method="POST" action="{{ route('pemohon.register.store') }}">
        @csrf
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Masukan Nama Lengkap">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
            <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

         <div class="input-group mb-3">
            <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" placeholder="Masukan No.Telp">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-phone"></span>
              </div>
            </div>
        </div>

        <div class="input-group mb-3">
         <select class="custom-select" name="unit_kerja_id">
              <option value=""> - Pilih Tujuan Data -</option>
              @foreach ($unit_kerja as $data_tujuan)
                  <option value="{{ $data_tujuan->id }}" {{ old('unit_kerja_id') == $data_tujuan->id ? 'selected' : null }}> {{ $data_tujuan->name }} </option>
              @endforeach
            </select> 
        </div>

          <div class="input-group mb-3">
                  <input type="file" class="form-control" id="file_upload" name="file_upload" >
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-file"></span>
              </div>
            </div>
        </div>
     <div class="row">

          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <a href="login.html" class="text-primary">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{ asset('template_admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('template_admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('template_admin/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
