@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('blood_group') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Blood Group</label>

                            <div class="col-md-6">
                                <!-- input id="blood_group" type="blood_group" class="form-control" name="blood_group" value=" " required-->

                                <select id="blood_group" type="blood_group" class="form-control" name="blood_group" required>
                                    <option id="bloodGroup_0" class="active-result" style=""></option>
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


                        <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                            <label for="location" class="col-md-4 control-label">Location</label>

                            <div class="col-md-6">
                                <input id="location" type="location" class="form-control" name="location" value=" " required>

                                @if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                            <label for="mobile" class="col-md-4 control-label">Mobile Number</label>

                            <div class="col-md-6">
                                <input id="mobile" type="mobile" class="form-control" name="mobile" value=" " required>

                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                                <select id="gender" type="gender" class="form-control" name="gender" required>
                                    <option id="gender_0" class="active-result" style=""></option>
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
                        <div class="form-group{{ $errors->has('address_street') ? ' has-error' : '' }}">
                            <label for="address_street" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                              <input id="address_street" type="address_street" class="form-control" name="address_street" value=" " required>


                                @if ($errors->has('address_street'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address_street') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address_pincode') ? ' has-error' : '' }}">
                            <label for="address_pincode" class="col-md-4 control-label">Pincode</label>

                            <div class="col-md-6">
                              <input id="address_pincode" type="address_pincode" class="form-control" name="address_pincode" value=" " required>


                                @if ($errors->has('address_pincode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address_pincode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('address_state') ? ' has-error' : '' }}">
                            <label for="address_state" class="col-md-4 control-label">State</label>

                            <div class="col-md-6">
                                <input id="address_state" type="address_state" class="form-control" name="address_state" value=" " required>
                                <!--select-- id="address_state" type="address_state" class="form-control" name="address_state" required>
                                    <option id="gender_0" class="active-result" style=""></option>
                                    $indian_all_states  = array (
                                    'AP' => 'Andhra Pradesh',
                                    'AR' => 'Arunachal Pradesh',
                                    'AS' => 'Assam',
                                    'BR' => 'Bihar',
                                    'CT' => 'Chhattisgarh',
                                    'GA' => 'Goa',
                                    'GJ' => 'Gujarat',
                                    'HR' => 'Haryana',
                                    'HP' => 'Himachal Pradesh',
                                    'JK' => 'Jammu & Kashmir',
                                    'JH' => 'Jharkhand',
                                    'KA' => 'Karnataka',
                                    'KL' => 'Kerala',
                                    'MP' => 'Madhya Pradesh',
                                    'MH' => 'Maharashtra',
                                    'MN' => 'Manipur',
                                    'ML' => 'Meghalaya',
                                    'MZ' => 'Mizoram',
                                    'NL' => 'Nagaland',
                                    'OR' => 'Odisha',
                                    'PB' => 'Punjab',
                                    'RJ' => 'Rajasthan',
                                    'SK' => 'Sikkim',
                                    'TN' => 'Tamil Nadu',
                                    'TR' => 'Tripura',
                                    'UK' => 'Uttarakhand',
                                    'UP' => 'Uttar Pradesh',
                                    'WB' => 'West Bengal',
                                    'AN' => 'Andaman & Nicobar',
                                    'CH' => 'Chandigarh',
                                    'DN' => 'Dadra and Nagar Haveli',
                                    'DD' => 'Daman & Diu',
                                    'DL' => 'Delhi',
                                    'LD' => 'Lakshadweep',
                                    'PY' => 'Puducherry',
                                    );
                                 print_r($india_all_states);
                                </select-->

                                @if ($errors->has('address_state'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address_state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address_city') ? ' has-error' : '' }}">
                            <label for="address_city" class="col-md-4 control-label">City</label>

                            <div class="col-md-6">
                                <!--select id="address_city" type="address_city" class="form-control" name="address_city" required>
                                    <option id="gender_0" class="active-result" style=""></option>
                                    <option id="gender_1" class="active-result" style="">Male</option>
                                    <option id="gender_2" class="active-result" style="">Female</option>


                                </select-->
                                <input id="address_city" type="address_city" class="form-control" name="address_city" value=" " required>

                                @if ($errors->has('address_city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address_city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value=" " required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
