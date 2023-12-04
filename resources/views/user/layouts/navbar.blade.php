<nav class="navbar navbar-expand-lg bg-dark navbar-light sticky-top py-2 pe-5">
        <a href="{{ route('halaman_utama') }}" class="navbar-brand">
            <img src="{{ asset('template_user/img/logodhbaru.png') }}" class="fa-1x m-4" width="45%">
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">        
                <a href="{{ route('halaman_utama') }}" class="nav-item nav-link text-white">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Peraturan</a>
                    <div class="dropdown-menu bg-light m-0">
                        @foreach ($kategori as $kategori_peraturan)
                        <a href="{{ route('jenis_produk', $kategori_peraturan->id) }}" class="dropdown-item">{{ $kategori_peraturan->nama_kategori }}</a>
                        @endforeach
                        <a href="{{ route('rapertor') }}" class="dropdown-item">Rancangan Peraturan Rektor</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Tahun</a>
                    <div class="dropdown-menu bg-light m-0 flex-column">
                        <a href="{{ route('per2010') }}" class="dropdown-item">2010</a>                    
                        <a href="{{ route('per2011') }}" class="dropdown-item">2011</a>                    
                        <a href="{{ route('per2012') }}" class="dropdown-item">2012</a>
                        <a href="{{ route('per2013') }}" class="dropdown-item">2013</a>
                        <a href="{{ route('per2014') }}" class="dropdown-item">2014</a>
                        <a href="{{ route('per2015') }}" class="dropdown-item">2015</a>
                        <a href="{{ route('per2016') }}" class="dropdown-item">2016</a>
                        <a href="{{ route('per2017') }}" class="dropdown-item">2017</a>
                        <a href="{{ route('per2018') }}" class="dropdown-item">2018</a>
                        <a href="{{ route('per2019') }}" class="dropdown-item">2019</a>
                        <a href="{{ route('per2020') }}" class="dropdown-item">2020</a>
                        <a href="{{ route('per2021') }}" class="dropdown-item">2021</a>
                        <a href="{{ route('per2022') }}" class="dropdown-item">2022</a>
                        <a href="{{ route('per2023') }}" class="dropdown-item">2023</a>
                    </div>
                </div>
                <a href="{{ route('instruksi') }}" class="nav-item nav-link text-white">Instruksi</a>
                <a href="{{route('infografis')}}" class="nav-item nav-link text-white">Infografis</a>
                <a href="{{route('tentang')}}" class="nav-item nav-link text-white">Tentang</a>
                <a href="{{route('kontak')}}" class="nav-item nav-link text-white">Kontak</a>
            </div>
        </div>
</nav>