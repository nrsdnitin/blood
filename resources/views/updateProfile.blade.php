@extends('layouts.app')

@section('content')

 <div class="container">
        <section style="padding-bottom: 50px; padding-top: 50px;">
            <div class="row">
                <div class="col-md-4">
					  <form class="form-horizontal" method="POST" action="{{ route('updateProfile')}}/{{ Auth::user()->id }}">

						      {{ csrf_field() }}
						  <div class="custom-file">
  <input type="file" class="custom-file-input" id="imgInp" >
  <label class="custom-file-label" for="customFile">Choose file</label>
</div>
                     <div class="card-header">
	<img src="public/images/avatar.png" id='img-upload' class="rounded mx-auto d-block" alt="..." width="199" height="200">
				</div>

                    <br />
                    <br />
            <label for="name" class=" control-label">Name</label>
					<input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required placeholder="Your Name" autofocus>
                   <label for="bloodgroup" class="col-sm-4 control-label">BloodGroup</label>

                                <select id="blood_group" type="blood_group" class="form-control" name="blood_group" required onchange="getAddressbyGeo()">
                                    <option id="bloodGroup_0" class="active-result" style="">Select Blood Group</option>
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

                    <label>Registered Email</label>
                    <input type="text" class="form-control" placeholder="jnondeao@gmail.com" value="{{ Auth::user()->email }}">
					 <label for="mobile"   class="col-sm-4 control-label">Mobile</label>
					 <input id="mobile" type="text" class="form-control" name="mobile" value="{{ Auth::user()->mobile }}" placeholder="Mobile Number" required>
					  <label for="gender" class="col-sm-4 control-label">Gender</label>
					 <select id="gender" type="gender" class="form-control" name="gender" required>
                                    <option id="gender_0" class="active-result" style="">Select Gender</option>
                                    <option id="gender_1" class="active-result" style="">Male</option>
                                    <option id="gender_2" class="active-result" style="">Female</option>


                                </select>
					 <label for="address_street" class="col-sm-8 control-label">Enter-Address</label>
					 <input id="autocomplete"   placeholder="Search address with City or State..."
             onFocus="geolocate()"  type="text" class="form-control is-valid" name="autocomplete" style="background-color: rgba(66,133,244,0.67); color: #fff;"  />	<br>
 <input id="address_street" placeholder="Enter House Number" type="text" class="form-control" name="address_street" value="{{ Auth::user()->address_street }}" required />	<br>
	          <input id="address_street2" type="text" placeholder="Enter Street"  class="form-control" name="address_street2"  value="{{ Auth::user()->address_street2 }}" >	<br>

  <input id="address_city" type="text" class="form-control" name="address_city" value="{{ Auth::user()->address_city }}" placeholder="City/Village" required>	<br>

<input id="address_state" type="text" class="form-control" name="address_state" placeholder="State"  value="{{ Auth::user()->address_state }}" required>	<br>

 <input id="address_pincode" type="text" class="form-control" name="address_pincode" placeholder="Pincode"  required value="{{ Auth::user()->address_pincode }}">	<br>

	 <input id="address_country" type="text" class="form-control" name="address_country" placeholder="Country"  required alue="{{ Auth::user()->address_country }}">


					<br>
                    <a href="#" class="btn btn-success">Update Details</a>
				 <button type="submit" class="btn btn-primary"> Register </button>
                    <br /><br/>
					 <input id="location_latitude" type="hidden" class="form-control" name="location_latitude" value="{{ Auth::user()->location_latitude }}" required>
                        <input id="location_longitude" type="hidden" class="form-control" name="location_longitude" value="{{ Auth::user()->location_longitude }}" required>
						   <input id="id" type="hidden" class="form-control" name="id" value="{{ Auth::user()->id }}" required>
					</form>
                </div>
                <div class="col-md-8">
                    <!--div class="alert alert-info">
                        <h2>User Bio : </h2>
                        <h4>Bootstrap user profile template </h4>
                        <p>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                             3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                        </p>
                    </div>
                    <div >
                        <a href="#" class="btn btn-social btn-facebook">
                            <i class="fa fa-facebook"></i>&nbsp; Facebook</a>
                        <a href="#" class="btn btn-social btn-google">
                            <i class="fa fa-google-plus"></i>&nbsp; Google</a>
                        <a href="#" class="btn btn-social btn-twitter">
                            <i class="fa fa-twitter"></i>&nbsp; Twitter </a>
                        <a href="#" class="btn btn-social btn-linkedin">
                            <i class="fa fa-linkedin"></i>&nbsp; Linkedin </a>
                    </div-->
                <div class="form-group col-md-8">
                        <h3>Change YOur Password</h3>
                        <br />
                        <label>Enter Old Password</label>
                        <input type="password" class="form-control">
                        <label>Enter New Password</label>
                        <input type="password" class="form-control">
                        <label>Confirm New Password</label>
                        <input type="password" class="form-control" />
                        <br>
                        <a href="#" class="btn btn-warning">Change Password</a>
                    </div>
					  <div class="form-group col-md-8">
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
            <!-- ROW END -->


        </section>
        <!-- SECTION END -->
    </div>
@endsection


@section('javascript')

	 <script src="{{ asset('public/js/home.js') }}"></script>

    <script src="{{ asset('public/js/registerLocation.js') }}"></script>
	<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAVVoiR8zLZlUCqaupuvyhH7nGArmQBKo&callback=initAutocomplete&libraries=places "></script>


@stop
