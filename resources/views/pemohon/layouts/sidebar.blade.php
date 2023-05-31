<div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
					<li>
						<a href="{{ route('pemohon.profil')}}" class="ai-icon" aria-expanded="false">
							<img src="{{ asset('storage/file/'. auth()->user()->avatar)}}" width="20" alt="">
							<span class="nav-text ml-2">{{ ucfirst(trans(auth()->user()->name)) }}</span>
						</a>
					<div class="dropdown-divider"></div>
					</li>
					<li><a href="{{ route('pemohon.dashboard')}}" class="ai-icon" href="event-management.html" aria-expanded="false">
						<i class="la la-home"></i>
						<span class="nav-text">Dashboard</span>
					</a>
					</li>
					<li><a href="{{ route('pemohon.produk')}}" class="ai-icon" aria-expanded="false">
						<i class="la la-file-text"></i>
							<span class="nav-text">Produk Terbaru</span>
						</a>
                    </li>
					<li><a href="{{ route('pemohon.unit')}}" class="ai-icon" aria-expanded="false">
						<i class="la la-building"></i>
						<span class="nav-text">Informasi Unit</span>
					</a>
					</li>
					<li><a href="{{ route('halaman_utama')}}" target="_blank" class="ai-icon" href="event-management.html" aria-expanded="false">
						<i class="la la-external-link-square"></i>
						<span class="nav-text">Halaman Utama</span>
					</a>
				</li>
				</ul>
            </div>
        </div>