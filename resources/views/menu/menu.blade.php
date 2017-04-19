<nav style="background:#20c0d4;"  class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div style="background:#20c0d4;" class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a style="color:#fff;" class="navbar-brand" href="index.html">LGB Hospital</a>
	</div>
	<!-- Top Menu Items -->
	<ul style="background:#20c0d4;" class="nav navbar-right top-nav">
		<li><a class="top_list"><i class="fa fa-search" aria-hidden="true"></i></a></li>
		<li><a class="top_list" href=""><i class="fa fa-fw fa-envelope-open-o"></i><sup><span class="badge badge-notify">{{ $mailbox_count }}</span></sup></a></li>
		<li><a class="top_list" href=""><i class="fa fa-fw fa-bell-o"></i> <sup><span class="badge badge-notify">{{ $alert_count }}</span></sup></a></li>

		
		<li class="dropdown">
			<a class="top_list" href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Kidali Kevin <b class="caret"></b></a>
			<ul class="dropdown-menu">	
				<li>
					<a href="{{ url('settings') }}"><i class="fa fa-fw fa-gear"></i> Settings</a>
				</li>
				<li class="divider"></li>
				<li>
					<a href="{{ url('/logout') }}"
					onclick="event.preventDefault();
					document.getElementById('logout-form').submit();"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
					<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
						{{ csrf_field() }}
					</form>
				</li>
			</ul>
		</li>
	</ul>
	<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
	<div style="background:url('icons/01.jpg');background-size:cover;" class="collapse navbar-collapse navbar-ex1-collapse">
		<ul style="background:url('icons/01.jpg');background-size:cover;" class="nav navbar-nav side-nav">
			<li style="background:#fff !important;height: 100px;padding-top:5%;">
				<a href="{{ url('/') }}">
					<article class="row">
						<section class="col-lg-4">
							<img class="img-responsive" src="{{ asset('images/placeholder.png') }}">
						</section>
						<section class="col-lg-8">
							Welcome<br/><span id="welcomenote">Mr. {{ Auth::user() -> name }}</span>
						</section>
					</article>
				</a>
			</li>
			<li>
				<a>
					<div id="dashboard" class="panel panel-default">
						<div class="panel-body">
							<i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
						</div>
					</div>
				</a>
			</li>
			<li style="margin-top:20%;">
				<a href="{{ url('products') }}">
					<div class="col-lg-3 navs_item"><i class="fa fa-fw fa-user"></i></div>	<div class="col-lg-9 navs_item"> Doctors</div>
				</a>
			</li>
			<li>
				<a href="{{ url('categories') }}">
					<div class="col-lg-3 navs_item"><i class="fa fa-fw fa-users"></i> </div>	<div class="col-lg-9 navs_item">Patience</div></a>
				</li>
				<li>
					<a href="{{ url('') }}">	<div class="col-lg-3 navs_item"><i class="fa fa-fw fa-calendar"></i></div> 	<div class="col-lg-9 navs_item">Appointments</div></a>
				</li>
				<li>
					<a href="{{ url('') }}">	<div class="col-lg-3 navs_item"><i class="fa fa-fw fa-bar-chart"></i></div><div class="col-lg-9 navs_item">Reports</div></a>
				</li>
				<li>
					<a href="{{ url('') }}">	<div class="col-lg-3 navs_item"><i class="fa fa-fw fa-usd"></i></div> 	<div class="col-lg-9 navs_item">Billing</div></a>
				</li>
				<li>
					<a href="{{ url('') }}">	<div class="col-lg-3 navs_item"><i class="fa fa-fw fa-envelope-open-o"></i></div> 	<div class="col-lg-9 navs_item">Mailbox <span class="badge badge-notify">{{ $mailbox_count }}</span></div></a>
				</li>
				<li>
					<a href="{{ url('') }}">	<div class="col-lg-3 navs_item"><i class="fa fa-fw fa-user-circle-o"></i></div> 	<div class="col-lg-9 navs_item">Hospital Staff</div></a>
				</li>
				<li>
					<a href="{{ url('') }}">	<div class="col-lg-3 navs_item"><i class="fa fa-fw fa-calendar-check-o"></i></div> 	<div class="col-lg-9 navs_item">Event Management</div></a>
				</li>
				<li>
					<a href="{{ url('/logout') }}"
					onclick="event.preventDefault();
					document.getElementById('logout-form').submit();">	<div class="col-lg-3 navs_item"><i class="fa fa-fw fa-sign-out"></i></div> 	<div class="col-lg-9 navs_item">Logout</div></a>
					<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
						{{ csrf_field() }}
					</form>

				</li>

				

			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</nav>
