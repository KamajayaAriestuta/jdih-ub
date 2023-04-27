<div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
					<li>
						<a href="{{ route('superadmin.profil')}}" class="ai-icon" href="event-management.html" aria-expanded="false">
							<img src="{{ asset('storage/file/'. auth()->user()->avatar)}}" width="20" alt="">
							<span class="nav-text ml-2">{{ ucfirst(trans(auth()->user()->name)) }}</span>
						</a>
					</li>
					<div class="dropdown-divider"></div>
					<li><a href="{{ route('superadmin.dashboard')}}" class="ai-icon" href="event-management.html" aria-expanded="false">
							<i class="la la-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                    </li>
					<li><a href="{{ route('superadmin.produk')}}" class="ai-icon" href="event-management.html" aria-expanded="false">
						<i class="la la-file-text"></i>
						<span class="nav-text">Halaman Produk</span>
					</a>
					</li>
					<li>
						<a class="has-arrow" href="javascript:void()" -expanded="false"> <i class="la la-user"></i>
						<span class="nav-text">Admin</span></a>
						<ul aria-expanded="false">
							<li><a href="{{ route('superadmin.admin')}}">Semua Admin</a></li>
							<li><a href="{{ route('admin.register')}}">Tambah Admin</a></li>
						</ul>
					</li>
					<li><a href="{{ route('halaman_utama')}}" target="_blank" class="ai-icon" href="event-management.html" aria-expanded="false">
						<i class="la la-external-link-square"></i>
						<span class="nav-text">View</span>
					</a>
				</li>
				</ul>
            </div>
        </div>