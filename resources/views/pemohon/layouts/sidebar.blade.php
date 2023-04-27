<div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
					<li>
						<a href="{{ route('pemohon.profil')}}" class="ai-icon" href="event-management.html" aria-expanded="false">
							<img src="{{ asset('storage/file/'. auth()->user()->avatar)}}" width="20" alt="">
							<span class="nav-text ml-2">{{ ucfirst(trans(auth()->user()->name)) }}</span>
						</a>
					</li>
					<li><a href="{{ route('pemohon.dashboard')}}" class="ai-icon" href="event-management.html" aria-expanded="false">
							<i class="la la-home"></i>
							<span class="nav-text">Produk Terbaru</span>
						</a>
                    </li>
					</li>
				</ul>
            </div>
        </div>