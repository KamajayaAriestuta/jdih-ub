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
				</ul>
            </div>
        </div>