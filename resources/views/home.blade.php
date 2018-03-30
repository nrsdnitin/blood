@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
		<div class="col-md-4 mx-auto">
            <div class="card">
                <!-- user profile image -->
				<div class="custom-file">
  <input type="file" class="custom-file-input" id="imgInp" >
  <label class="custom-file-label" for="customFile">Choose file</label>
  
</div>
				 <div class="card-header">
	<img src="public/images/avatar.png" id='img-upload' class="rounded mx-auto d-block" alt="..." width="199" height="200"></div>
              
                <div class="card-body text-center">
                    <!-- user name -->
                    <h4 class="card-title">{{ Auth::user()->name }}</h4>
                    <!-- job title / comany name -->
                    <p class="card-text text-muted">UI/UX Designer</p>
                    <!-- social profile links -->
                    <a href="#" class="social twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="social facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social google-plus"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="social linkedin"><i class="fa fa-linkedin"></i></a>
                    <!-- CTA button -->
                    <p class="mt-4"><a href="#" class="btn btn-primary">Contact me!</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
 
</div>
@endsection


@section('javascript')
   
	 <script src="{{ asset('public/js/home.js') }}"></script> 
	 
@stop