
 <meta property="og:url" content="{{ Request::url() }}" />


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="{{ asset('public/favicon.ico') }}" >
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="Register to be a blood donor, give blood and save lives. Find out more about blood donation. / रक्त दान एक ऐसा पुन्य हैं जिसे अगर आप जिंदगी में कुछ भी करे तो उससे ज्यादा पुन्य आपको किसी और चीज़ से नहीं कमा सकते और एक बात याद रखियेगा अगर आप की वजह से किसी की ज़िन्दगी बचती हैं तो आपको जो संतुष्टि का एहसास होगा उसे शब्दों में लिख पाना मुमकिन नहीं हैं.">

<!-- Open Graph data -->
<meta property="og:title" content="Blood Donor" />
<meta property="og:type" content="community" />

<meta property="og:image" content="{{ asset('public/images/fbsharelogo.png') }}" />


<meta property="og:description" content="Register to be a blood donor, give blood and save lives. Find out more about blood donation. / रक्त दान एक ऐसा पुन्य हैं जिसे अगर आप जिंदगी में कुछ भी करे तो उससे ज्यादा पुन्य आपको किसी और चीज़ से नहीं कमा सकते और एक बात याद रखियेगा अगर आप की वजह से किसी की ज़िन्दगी बचती हैं तो आपको जो संतुष्टि का एहसास होगा उसे शब्दों में लिख पाना मुमकिन नहीं हैं. ">

    <title>{{ config('app.name', 'Blood') }}</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

<link rel="stylesheet" href="public/fonts/fontawesome/css/fontawesome-all.css" >
    <!-- Styles -->
	<!-- <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">-->
 <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css')}}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118375337-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-118375337-1');
  </script>

	@yield('css')
