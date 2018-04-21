 <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
@include('layouts.header')
	</head>
<body>
    @if (Auth::guest())
      <div id="app">
    @elseif(Auth::user()->status == 1)
    <div id="app" class="bg-danger text-dark" >
      @else
      <div id="app">
      @endif

	@include('layouts.navbar')

        @yield('content')
    </div>



@include('layouts.footer')
	  <script src="{{ asset('public/js/app.js') }}"></script>

		@yield('javascript')

</body>
</html>
