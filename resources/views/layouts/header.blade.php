
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Blood') }}</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

<link rel="stylesheet" href="public/fonts/fontawesome/css/fontawesome-all.css" >
    <!-- Styles -->
	<!-- <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">-->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
	<link href="{{ asset('public/css/style.css') }}" rel="stylesheet">

	@yield('css')
