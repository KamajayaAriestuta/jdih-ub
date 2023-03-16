<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Edumin - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('template_admin/images/favicon.png') }}">
    <link href="{{ asset('template_admin/css/style.css') }}" rel="stylesheet">

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
                                    <h4 class="text-center mb-4">Sign up your account</h4>
                                    <form action="index.html">
                                        <div class="form-group">
                                            <label><strong>Nama</strong></label>
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" class="form-control" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>No. Telp</strong></label>
                                            <input type="text" class="form-control" name="phone-number" name="phone-number">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>NIP/NIK</strong></label>
                                            <input type="text" class="form-control" name="NIP/NIK" name="NIP/NIK">
                                        </div>
                                         <div class="form-group">
                                            <label> <strong>Fakultas</strong> </label>
                                            <select class="custom-select" name="fakultas">
                                                <option value="">Kantor Pusat</option>
                                                <option value="">Fakultas Hukum</option>
                                                <option value="">Fakultas Ekonomi dan Bisnis</option>
                                                <option value="">Fakultas Ilmu Administrasi</option>
                                                <option value="">Fakultas Pertanian</option>
                                                <option value="">Fakultas Peternakan</option>
                                                <option value="">Fakultas Teknik</option>
                                                <option value="">Fakultas Kedokteran</option>
                                                <option value="">Fakultas Perikanan dan Ilmu Kelautan</option>
                                                <option value="">Fakultas Matematika dan Ilmu Pengetahuan Alam</option>
                                                <option value="">Fakultas Teknologi Pertanian</option>
                                                <option value="">Fakultas Ilmu Sosial dan Ilmu Politik</option>
                                                <option value="">Fakultas Kedokteran Hewan</option>
                                                <option value="">Fakultas Ilmu Komputer</option>
                                                <option value="">Fakultas Kedokteran Gigi</option>
                                                <option value="">Fakultas Ilmu Kesehatan</option>
                                                <option value="">Pascasarjana</option>
                                                <option value="">Fakultas Vokasi</option>
                                            </select> 
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Jabatan</strong></label>
                                            <input type="text" class="form-control" name="jabatan">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="{{route('admin.login')}}">Sign in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('template_admin/vendor/global/global.min.js') }}"></script>
	<script src="{{ asset('template_admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('template_admin/js/dlabnav-init.js') }}"></script>
    <!--endRemoveIf(production)-->
</body>

</html>