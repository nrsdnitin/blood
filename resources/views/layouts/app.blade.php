 <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
@include('layouts.header')
	</head>
<body>
    <div id="app">
		
	@include('layouts.navbar')	
		
        @yield('content')
    </div>
	


@include('layouts.footer')
	  <script src="{{ asset('public/js/app.js') }}"></script>

		@yield('javascript')
	
</body>
</html>
