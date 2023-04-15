<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Halaman Login</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('template_user/img/logo.png') }}">
  <link href="{{ asset('template_admin/css/style.css') }}" rel="stylesheet"/>
</head>
  <body class="h-100">
    <div class="authincation h-100">
      <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
          <div class="col-md-6">
            <div class="authincation-content">
              <div class="row no-gutters">
                <div class="col-xl-12">
                  <div class="auth-form">
                    <h4 class="text-center mb-4">Halaman Login</h4>
                      @if($errors->any())
                        <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{$error}}</li>
                        @endforeach
                        </ul>
                        </div>
                        @endif
                        <form action="{{ route('login.auth') }}" method="POST">
                        @csrf
                          <div class="form-group">
                            <label><strong>Email</strong></label>
                            <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
                          </div>
                          <div class="form-group">
                            <label><strong>Password</strong></label>
                            <input type="password" class="form-control" name="password" placeholder="Password" value="{{ old('password') }}">
                          </div>
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                          </div>
                        </form>
                        <div class="new-account mt-3">
                            <p>Apakah Anda Pemohon? <a class="text-primary" href="{{ route('pemohon.register')}}">Sign up</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    <script src="{{ asset('template_admin/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('template_admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('template_admin/js/custom.min.js') }}"></script>
    <script src="{{ asset('template_admin/js/dlabnav-init.js') }}"></script>
  </body>
</html>