 <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
@include('layouts.header')
	</head>
<body>
    <div id="app">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
       <!-- <nav class="nav nav-tabs navbar navbar-default navbar-static-top">-->
            <div class="container-fluid navbar-container">
                <div class="navbar-header "> 

                    <!-- Collapsed Hamburger -->
                  <!--  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>-->
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<img class="navbar-brand"   src="{{ asset('public/images/blood.png') }}"   height="40">
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}"> {{ config('app.name', 'Blood') }}  </a>
                </div>

                <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li class="nav-item"><a href="{{ route('login') }}" class="nav-link"><span class=" glyphicon-log-in"></span>Login</a></li >
                            <li class="nav-item"><a href="{{ route('register') }}" class="nav-link"><span class=" glyphicon-user"></span>    Register</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                   
								   <a class="dropdown-item"  href="{{ route('home') }} ">
                                            Home
                                        </a>
								  
                                        <a class="dropdown-item"  href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    
                                </div>
                            </li>
                        @endif
						
                    </ul>
                </div>
            </div>
        </nav>
		
		
        @yield('content')
    </div>
	


@include('layouts.footer')
	  <script src="{{ asset('public/js/app.js') }}"></script>

		@yield('javascript')
	
</body>
</html>
