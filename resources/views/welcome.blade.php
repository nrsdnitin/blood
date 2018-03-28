<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blood</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 5px;
            }
        </style>
    </head>
    <body>
        <div class=" position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                  <!--form name="search" id="search" action="{{route('search')}}" method="POST" -->
                    <select id="blood_group" type="blood_group" class="form-control" name="blood_group" required>
                        <option id="bloodGroup_1" class="active-result" style="">A+</option>
                        <option id="bloodGroup_2" class="active-result" style="">A-</option>
                        <option id="bloodGroup_3" class="active-result" style="">B+</option>
                        <option id="bloodGroup_4" class="active-result" style="">B-</option>
                        <option id="bloodGroup_5" class="active-result" style="">O+</option>
                        <option id="bloodGroup_6" class="active-result" style="">O-</option>
                        <option id="bloodGroup_7" class="active-result" style="">AB+</option>
                        <option id="bloodGroup_8" class="active-result" style="">AB-</option>
                        <option id="bloodGroup_9" class="active-result" style="">A1+</option>
                        <option id="bloodGroup_10" class="active-result" style="">A1-</option>
                        <option id="bloodGroup_11" class="active-result" style="">A2+</option>
                        <option id="bloodGroup_12" class="active-result" style="">A2-</option>
                        <option id="bloodGroup_13" class="active-result" style="">A1B+</option>
                        <option id="bloodGroup_14" class="active-result" style="">A1B-</option>
                        <option id="bloodGroup_15" class="active-result" style="">A2B+</option>
                        <option id="bloodGroup_16" class="active-result" style="">A2B-</option>
                    </select>
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       <input id="location_latitude" type="hidden" class="form-control" name="location_latitude" value="No" required>
                       <input id="location_longitude" type="hidden" class="form-control" name="location_longitude" value="No" required>
                 
                  <!--input type="submit" value="search" />
                  </form-->
                </div>
                <div id="map"   style="width:100%; height: 86%; position: absolute">
                </div>
              
            </div>
        </div>
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyDlmKfJoSkpXhmbuS1-FlgAhQ9toyleLz0"></script>
        <!--script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlmKfJoSkpXhmbuS1-FlgAhQ9toyleLz0&callback=initMap"></script-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

        <script src="{{ asset('public/js/searchResult.js') }}"></script>

    </body>
</html>
