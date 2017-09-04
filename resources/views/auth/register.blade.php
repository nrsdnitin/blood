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
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

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
