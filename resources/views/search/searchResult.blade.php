
 
@extends('layouts.app')



@section('content')
        <div class="flex-center position-ref full-height">
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
                  <form name="search" id="search" action="{{route('search')}}" method="POST" >
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
                  <input type="submit" value="search" />
                  </form>
                </div>



                <div class="links">

                  @foreach ($users as $user)

                      <p>This is donor {{ $user->name }}</p>


                  @endforeach


                </div>

            </div>

        </div>
        <div id="map" style="height: 400px; width: 500px;">
        </div>
        <div id="map_wrapper">
            <div id="map_canvas" class="mapping"></div>
        </div>
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyDlmKfJoSkpXhmbuS1-FlgAhQ9toyleLz0"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="{{ asset('public/js/searchResult.js') }}"></script>


@endsection