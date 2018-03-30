@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-offset-0" >
            <div class="panel panel-default"  >
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            
                            <div class="col-sm-12">
								<label for="name" class=" control-label">Name</label>  <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('blood_group') ? ' has-error' : '' }}">
                          
                            <div class="col-sm-12">
                               <label for="email" class="col-sm-4 control-label">Blood Group</label>

                                <select id="blood_group" type="blood_group" class="form-control" name="blood_group" required onchange="getAddressbyGeo()">
                                    <option id="bloodGroup_0" class="active-result" style="">Select...</option>
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


                                @if ($errors->has('blood_group'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('blood_group') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                  




                        <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                           
                            <div class="input-group col-sm-12">
								 <label for="mobile" class="col-sm-4 control-label">Mobile Number</label>

								<div class="input-group-prepend col-sm-12">
    <span class="input-group-text" id="basic-addon3mobile"><i class="material-icons">phone</i></span>
                                <input id="mobile" type="text" class="form-control" name="mobile" value="" required>
							</div>
                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                          
                            <div class="col-sm-12">
								  <label for="gender" class="col-sm-4 control-label">Gender</label>

                                <select id="gender" type="gender" class="form-control" name="gender" required>
                                    <option id="gender_0" class="active-result" style="">Select...</option>
                                    <option id="gender_1" class="active-result" style="">Male</option>
                                    <option id="gender_2" class="active-result" style="">Female</option>


                                </select>

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						 <label for="address_street" class="col-sm-12 control-label">Address </label>
     
					<div class="form-group{{ $errors->has('address_street') ? ' has-error' : '' }}">
                           
                            <div class="input-group col-sm-12">
								<div class="input-group-prepend col-sm-12">
    <span class="input-group-text" id="basic-addon3"><i class="material-icons">map</i></span>

                              <input id="autocomplete"   placeholder="Search address with City or State..."
             onFocus="geolocate()"  type="text" class="form-control" name="autocomplete"  >
  </div>
 
                            </div>
 
                        </div>
				 
                        <div class="form-group{{ $errors->has('address_street') ? ' has-error' : '' }}">
                            <label for="address_street" class="col-sm-4 control-label"></label>

                            <div class="col-sm-12">
                              <input id="address_street" placeholder="Enter House Number" type="text" class="form-control" name="address_street"  required>


                                @if ($errors->has('address_street'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address_street') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('address_street2') ? ' has-error' : '' }}">
                            <label for="address_street2" class="col-sm-4 control-label"></label>

                            <div class="col-sm-12">
                              <input id="address_street2" type="text" placeholder="Enter Street"  class="form-control" name="address_street2" >


                                @if ($errors->has('address_street2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address_street2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('address_city') ? ' has-error' : '' }}">
                            <label for="address_city" class="col-sm-4 control-label">City / Village</label>

                            <div class="col-sm-12">
                                 
                                <input id="address_city" type="text" class="form-control" name="address_city" value=" " required>

                                @if ($errors->has('address_city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address_city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						  <div class="form-group{{ $errors->has('address_state') ? ' has-error' : '' }}">
                            <label for="address_state" class="col-sm-4 control-label">State</label>

                            <div class="col-sm-12">
                                <input id="address_state" type="text" class="form-control" name="address_state" value=" " required>
                                

                                @if ($errors->has('address_state'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address_state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('address_pincode') ? ' has-error' : '' }}">
                            <label for="address_pincode" class="col-sm-4 control-label">Pincode</label>

                            <div class="col-sm-12">
                              <input id="address_pincode" type="text" class="form-control" name="address_pincode"  required>


                                @if ($errors->has('address_pincode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address_pincode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('address_country') ? ' has-error' : '' }}">
                            <label for="address_country" class="col-sm-4 control-label">Country</label>

                            <div class="col-sm-12">
                                <input id="address_country" type="text" class="form-control" name="address_country"   required>

                                @if ($errors->has('address_country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address_country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                      




                        <div class="form-group">


                            <div class="col-sm-12">


                            </div>
                        </div>

                        <div class="form-group">


                            <div class="col-sm-12">


                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-sm-4 control-label">E-Mail Address</label>

                            <div class="col-sm-12">
                                <input id="email" type="text" class="form-control" name="email" value=" " required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-sm-4 control-label">Password</label>

                            <div class="col-sm-12">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-sm-4 control-label">Confirm Password</label>

                            <div class="col-sm-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12 col-sm-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                        <input id="location_latitude" type="hidden" class="form-control" name="location_latitude" value="No" required>
                        <input id="location_longitude" type="hidden" class="form-control" name="location_longitude" value="No" required>
                    </form>
                </div>
            </div>
        </div>
	 
		 <div class="col-md-6 col-sm-offset-0" ml-auto>
            <div class="panel panel-default">
                <div class="panel-heading">Your Location</div>
                <div class="panel-body" id="map-layer" style="height: 400px">
                    
                </div>
				 <div id="infowindow-content">
      <img src="" width="16" height="16" id="place-icon">
      <span id="place-name"  class="title"></span><br>
      <span id="place-address"></span>
    </div>
	
	 
            </div>
        </div>
    </div>
</div>

@endsection
@section('javascript')
    <script src="{{ asset('public/js/registerLocation.js') }}"></script>
	<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAVVoiR8zLZlUCqaupuvyhH7nGArmQBKo&callback=initAutocomplete&libraries=places "></script>
	 
@stop

 
   
    
 	