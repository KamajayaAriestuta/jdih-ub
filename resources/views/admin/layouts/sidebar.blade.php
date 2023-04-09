<div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
					<li><a href="{{ route('admin.dashboard')}}" class="ai-icon" href="event-management.html" aria-expanded="false">
							<i class="la la-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                    </li>
					<li>
						<a class="has-arrow" href="javascript:void()" -expanded="false"> <i class="la la-file-text"></i>
						<span class="nav-text">Data</span></a>
						<ul aria-expanded="false">
							<li><a href="{{ route('admin.data')}}">All Data</a></li>
							<li><a href="{{ route('admin.data.create')}}">Add Data</a></li>
						</ul>
					</li>
					<li>
						<a class="has-arrow" href="javascript:void()" -expanded="false"> <i class="la la-user"></i>
						<span class="nav-text">Pemohon</span></a>
						<ul aria-expanded="false">
							<li><a href="{{ route('admin.pemohon') }}">Semua Pemohon</a></li>
							<li><a href="{{ route('pemohon.register') }}">Tambah Pemohon</a></li>

						</ul>
					</li>
					<li>
						<a class="has-arrow" href="javascript:void()" -expanded="false"> <i class="la la-building"></i>
						<span class="nav-text">Unit Kerja</span></a>
						<ul aria-expanded="false">
							<li><a href="{{ route('admin.unit_kerja') }}">Semua Unit Kerja</a></li>
							<li><a href="{{ route('unit_kerja.create') }}">Tambah Unit Kerja</a></li>

						</ul>
					</li>
				</ul>
            </div>
        </div>