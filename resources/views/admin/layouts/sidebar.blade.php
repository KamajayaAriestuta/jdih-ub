<div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
					<li>
						<a href="{{ route('admin.profil')}}" class="ai-icon" href="event-management.html" aria-expanded="false">
							<img src="{{ asset('storage/file/'. auth()->user()->avatar)}}" width="20" alt="">
							<span class="nav-text" style="color: aliceblue; font-size: 15px" ml-2">{{ ucfirst(trans(auth()->user()->name)) }}</span>
						</a>
					</li>
					<div class="dropdown-divider"></div>
					<li><a href="{{ route('admin.dashboard')}}" class="ai-icon" href="event-management.html" aria-expanded="false">
							<i class="la la-home"></i>
							<span class="nav-text" style="color: aliceblue; font-size: 15px">Dashboard</span>
						</a>
                    </li>
					<li>
						<a class="has-arrow" href="javascript:void()" -expanded="false"> <i class="la la-file-text text-white"></i>
						<span class="nav-text" style="color: aliceblue; font-size: 15px">Halaman Per.</span></a>
						<ul aria-expanded="false">
							<li><a href="{{ route('admin.produk')}}">Semua Peraturan</a></li>
							<li><a href="{{ route('admin.produk.create')}}">Tambah Peraturan</a></li>
							<li><a href="{{ route('admin.raper')}}">Rancangan</a></li>
							<li><a href="{{ route('admin.instruksi')}}">Instruksi</a></li>
							<li><a href="{{ route('admin.edaran')}}">Edaran</a></li>
						</ul>
					</li>
					<li>
						<a class="has-arrow" href="javascript:void()" -expanded="false"> <i class="la la-newspaper-o text-white"></i>
						<span class="nav-text" style="color: aliceblue; font-size: 15px">Berita</span></a>
						<ul aria-expanded="false">
							<li><a href="{{ route('admin.berita')}}">Semua Berita</a></li>
							<li><a href="{{ route('admin.berita.create')}}">Tambah Berita</a></li>
						</ul>
					</li>
					<li><a href="{{ route('halaman_utama')}}" target="_blank" class="ai-icon" href="event-management.html" aria-expanded="false">
						<i class="la la-external-link-square text-white"></i>
						<span class="nav-text" style="color: aliceblue; font-size: 15px">Halaman Utama</span>
					</a>
				</li>
				</ul>
            </div>
        </div>