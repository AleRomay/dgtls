<nav class="navbar navbar-expand-lg navbar-light" id="topnav">
	<div class="container">
		<!-- Toggler -->
		<button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<!-- Brand -->
		<a class="navbar-brand mr-auto order-lg-first" href="index.html">
		<img src="{{ asset('img/logo.svg') }}" alt="..." class="navbar-brand-img"> Digitals
		</a>
		<!-- Form -->
		
		<!-- User -->
		<div class="navbar-user">
			<!-- Dropdown -->
	
			<!-- Dropdown -->
			<div class="dropdown">
				<!-- Toggle -->
				<a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<img src="{{ asset('img/avatar-1.jpg') }}" alt="..." class="avatar-img rounded-circle">
				</a>
				<!-- Menu -->
				<div class="dropdown-menu dropdown-menu-right">
				@if (Route::has('login'))
                
                    @auth
						<a class="dropdown-item" href="{{ url('/home') }}">Cuenta</a>
						<a href="profile-posts.html" class="dropdown-item">Perfil</a>
						<a href="settings.html" class="dropdown-item">Preferencias</a>
						<hr class="dropdown-divider">
						<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                
                    @else
                        <a class="dropdown-item" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                
            @endif
				</div>
			</div>
		</div>
		<!-- Collapse -->
		<div class="collapse navbar-collapse mr-auto order-lg-first" id="navbar">
		
		
			<ul class="navbar-nav mr-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle active" href="#" id="topnavDashboards" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Solutions
					</a>
					<ul class="dropdown-menu" aria-labelledby="topnavDashboards">
						<li>
							<a class="dropdown-item " href="index.html">
							Innovation
							</a>
						</li>
						<li>
							<a class="dropdown-item" href="dashboard-alt.html">
							Prototyping
							</a>
						</li>
						<li>
							<a class="dropdown-item" href="dashboard-alt.html">
							Design
							</a>
						</li>
						<li>
							<a class="dropdown-item" href="dashboard-alt.html">
							Development
							</a>
						</li>
						<li>
							<a class="dropdown-item" href="dashboard-alt.html">
							Maintenance
							</a>
						</li>
						<li>
							<a class="dropdown-item" href="dashboard-alt.html">
							Artificial Intelligence
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle " href="#" id="topnavPages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Pages
					</a>
					<ul class="dropdown-menu" aria-labelledby="topnavPages">
						<li class="dropright">
							<a class="dropdown-item dropdown-toggle " href="#" id="topnavProfile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Profile
							</a>
							<div class="dropdown-menu" aria-labelledby="topnavProfile">
								<a class="dropdown-item " href="profile-posts.html">
								Posts
								</a>
								<a class="dropdown-item " href="profile-groups.html">
								Groups
								</a>
								<a class="dropdown-item " href="profile-projects.html">
								Projects
								</a>
								<a class="dropdown-item " href="profile-files.html">
								Files
								</a>
								<a class="dropdown-item " href="profile-subscribers.html">
								Subscribers
								</a>
							</div>
						</li>
						<li class="dropright">
							<a class="dropdown-item dropdown-toggle " href="#" id="topnavProject" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Project
							</a>
							<div class="dropdown-menu" aria-labelledby="topnavProject">
								<a class="dropdown-item " href="project-overview.html">
								Overview
								</a>
								<a class="dropdown-item " href="project-files.html">
								Files
								</a>
								<a class="dropdown-item " href="project-reports.html">
								Reports
								</a>
								<a class="dropdown-item " href="project-new.html">
								New project
								</a>
							</div>
						</li>
						<li class="dropright">
							<a class="dropdown-item dropdown-toggle " href="#" id="topnavTeam" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Team
							</a>
							<div class="dropdown-menu" aria-labelledby="topnavTeam">
								<a class="dropdown-item " href="team-overview.html">
								Overview
								</a>
								<a class="dropdown-item " href="team-projects.html">
								Projects
								</a>
								<a class="dropdown-item " href="team-members.html">
								Members
								</a>
								<a class="dropdown-item " href="team-new.html">
								New team
								</a>
							</div>
						</li>
						<li>
							<a class="dropdown-item " href="orders.html">
							Orders
							</a>
						</li>
						<li>
							<a class="dropdown-item " href="feed.html">
							Feed
							</a>
						</li>
						<li>
							<a class="dropdown-item " href="settings.html">
							Settings
							</a>
						</li>
						<li>
							<a class="dropdown-item " href="invoice.html">
							Invoice
							</a>
						</li>
						<li>
							<a class="dropdown-item " href="pricing.html">
							Pricing
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="topnavAuth" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Auth
					</a>
					<ul class="dropdown-menu" aria-labelledby="topnavAuth">
						<li class="dropleft">
							<a class="dropdown-item dropdown-toggle" href="#" id="topnavSignIn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Sign in
							</a>
							<div class="dropdown-menu" aria-labelledby="topnavSignIn">
								<a class="dropdown-item" href="sign-in-cover.html">
								Cover
								</a>
								<a class="dropdown-item" href="sign-in-illustration.html">
								Illustration
								</a>
								<a class="dropdown-item" href="sign-in-basics.html">
								Basic
								</a>
							</div>
						</li>
						<li class="dropright">
							<a class="dropdown-item dropdown-toggle" href="#" id="topnavSignUp" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Sign up
							</a>
							<div class="dropdown-menu" aria-labelledby="topnavSignUp">
								<a class="dropdown-item" href="sign-up-cover.html">
								Cover
								</a>
								<a class="dropdown-item" href="sign-up-illustration.html">
								Illustration
								</a>
								<a class="dropdown-item" href="sign-up.html">
								Basic
								</a>
							</div>
						</li>
						<li class="dropright">
							<a class="dropdown-item dropdown-toggle" href="#" id="topnavPassword" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Password reset
							</a>
							<div class="dropdown-menu" aria-labelledby="topnavPassword">
								<a class="dropdown-item" href="password-reset-cover.html">
								Cover
								</a>
								<a class="dropdown-item" href="password-reset-illustration.html">
								Illustration
								</a>
								<a class="dropdown-item" href="password-reset.html">
								Basic
								</a>
							</div>
						</li>
						<li class="dropright">
							<a class="dropdown-item dropdown-toggle" href="#" id="topnavError" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Error
							</a>
							<div class="dropdown-menu" aria-labelledby="topnavError">
								<a class="dropdown-item" href="error-illustration.html">
								Illustration
								</a>
								<a class="dropdown-item" href="error.html">
								Basic
								</a>
							</div>
						</li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle " href="#" id="topnavDocumentation" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Docs
					</a>
					<ul class="dropdown-menu" aria-labelledby="topnavDocumentation">
						<li>
							<a class="dropdown-item " href="getting-started.html">
							Getting started
							</a>
						</li>
						<li>
							<a class="dropdown-item " href="components.html">
							Components
							</a>
						</li>
						<li>
							<a class="dropdown-item " href="changelog.html">
							Changelog
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#modalDemo" data-toggle="modal">
					Customize
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- / .container -->
</nav>