<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5">
        <a href="{{ route('halaman_utama') }}" class="navbar-brand ps-5 me-0">
            <img src="{{ asset('template_user/img/logo.png') }}" class="fa-1x"> 
            <h1 class="text-white m-2">DIH UB</h1>
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">        
                <a href="{{ route('halaman_utama') }}" class="nav-item nav-link active">Home</a>
                <a href="service.html" class="nav-item nav-link">Tentang</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Nasional</a>
                    <div class="dropdown-menu bg-light m-0">
                        @foreach ($nasional as $produk_nasional)
                        <a href="{{ route('jenis_produk', $produk_nasional->id) }}" class="dropdown-item">{{ $produk_nasional->nama_kategori }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Daerah</a>
                    <div class="dropdown-menu bg-light m-0">
                        @foreach ($daerah as $produk_daerah)
                        <a href="{{ route('jenis_produk', $produk_daerah->id) }}" class="dropdown-item">{{ $produk_daerah->nama_kategori }}</a>
                        @endforeach

                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Universitas</a>
                    <div class="dropdown-menu bg-light m-0">
                        @foreach ($universitas as $produk_universitas)
                        <a href="{{ route('jenis_produk', $produk_universitas->id) }}" class="dropdown-item">{{ $produk_universitas->nama_kategori }}</a>
                        @endforeach
                    </div>
                </div>
                <a href="{{route('kontak')}}" class="nav-item nav-link">Hubungi Kami</a>
            </div>
            <a href="{{ route('login')}}" class="btn btn-primary px-3 d-none d-lg-block"><i class="fa fa-user" aria-hidden="true"></i>  Login</a>
        </div>
</nav>