<nav class="navbar is-primary has-shadow customNavbar">
		 <div class="container">
			  <div class="navbar-brand">
					<a href="{{route('home')}}" class="navbar-item">
						<span class="navLogo is-size-2 navbar-item is-logo-font">TeKete</span>
						<figure class="image is-64x64"></figure>
					</a>
					<img class="navbar-item navLogoKete" src="{{asset('img/logo.png')}}" alt="Te Kete Kete">

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
							<div class="dropdown">
							   <div class="dropdown-trigger is-tab">
							      <a href="#" class="navbar-item">{{Auth::user()->name}}
								      <span class="icon is-small">
								        	<i class="fa fa-angle-down" aria-hidden="true"></i>
										</span>
									</a>
								</div>
							   <div class="dropdown-menu" id="dropdown-menu" role="menu">
							    	<div class="dropdown-content">
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
							 <a href="/community" class="{{ Nav::isRoute('community')}} navbar-item is-tab">Community</a>
							 <a href="/work" class="{{ Nav::isRoute('work')}} navbar-item is-tab">Work</a>
							 <a href="/contact" class="{{ Nav::isRoute('contact')}} navbar-item is-tab">Contact</a>
						@else
							<a href="{{ url('/')}}" class="navbar-item is-tab">Return to Front</a>
						@endif
					</div>
			  </div>
		 </div>
	</nav>
