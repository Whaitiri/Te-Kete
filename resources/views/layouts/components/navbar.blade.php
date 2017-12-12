<nav class="navbar is-primary has-shadow">
		 <div class="container">
			  <div class="navbar-brand">
					<a href="{{route('home')}}" class="navbar-item">
						<span class="navLogo is-size-2 navbar-item is-logo-font">TeKete</span>
						<figure class="image is-64x64"></figure>
					</a>
					<img class="navbar-item navLogoKete" src="{{asset('img/kete.png')}}" alt="Te Kete Kete">

					@if (Request::segment(1) == "admin")
						<a class="is-hidden-desktop" id="slideoutButton"><i class="fa fa-arrow-circle-right"></i></a>
					@endif


					<a class="button navbar-burger" data-target="navMenu">
						 <span></span>
						 <span></span>
						 <span></span>
					</a>
			  </div>
			  <div class="navbar-menu" id="navMenu">
					<div class="navbar-start">
						@if (Auth::guest())
							<a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
							<a href="{{route('register')}}" class="navbar-item is-tab">Register</a>
						@else
							<div class="navbar-item is-tab dropdown">
							  <div class="dropdown-trigger">
							      <span>{{Auth::user()->name}}</span>
							      <span class="icon is-small">
							        <i class="fa fa-angle-down" aria-hidden="true"></i>
							      </span>

							  </div>
							  <div class="dropdown-menu" id="dropdown-menu" role="menu">
							    <div class="dropdown-content">
							      <a href="#" class="dropdown-item">Profile</a>
							      <a class="dropdown-item">Notifications</a>
							      <a href="#" class="dropdown-item">Settings</a>
							      <hr class="dropdown-divider is-black">
									<a href="#" class="dropdown-item">Account</a>
									@if (Request::segment(1) != "admin")
										@permission('read-dashboard')
											<a href="{{ url('/admin')}}" class="dropdown-item">Admin Dashboard</a>
										@endpermission
									@endif
									<a href="{{ url('/logout') }}" class="dropdown-item">Log Out</a>
							    </div>
							  </div>
							</div>
						@endif



					</div>
					<div class="navbar-end">
						@if (Request::segment(1) != "admin")
							 <a href="{{route('home')}}" class="{{ Nav::isRoute('home')}} navbar-item is-tab">Home</a>
							 <a href="#" class="navbar-item is-tab">Community</a>
							 <a href="#" class="navbar-item is-tab">Work</a>
							 <a href="#" class="navbar-item is-tab">People</a>
							 <a href="#" class="navbar-item is-tab">Contact</a>
						@else
							<a href="{{ url('/')}}" class="navbar-item is-tab">Return to Front</a>
						@endif
					</div>
			  </div>
		 </div>
	</nav>
