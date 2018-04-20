@extends('layouts.app')

@section('content')
 <div class="col-lg-12 col-sm-12">

    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="public/images/avatar/{{ Auth::user()->avatar }}">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img alt="" src="public/images/avatar/{{ Auth::user()->avatar }}">
        </div>
        <div class="card-info"> <span class="card-title">{{ Auth::user()->name }}</span>

        </div>
    </div>
</div>

 <div class="container">
	<div class="row">
	<div class="col-lg-12 col-lg-offset-3">
		 <hr>
		<div class="card">
                                   <form class="form-horizontal" role="form" enctype="multipart/form-data" method="POST"  action="{{ route('HomePost')}}/{{ Auth::user()->id }}">
                                    <h4>Donation Timeline</h4>
                                    @if (session('error'))
                                    <div class="alert alert-danger">
                                    {{ session('error') }}
                                    </div>
                                    @endif
                                    @if (session('success'))
                                    <div class="alert alert-success">
                                    {{ session('success') }}
                                    </div>
                                    @endif
                                     <div class="form-group" style="padding:14px;">
                                      <textarea class="form-control" placeholder="Update your status" id="txtPost" name="txtPost"></textarea>
										 <!--input type="hidden" id="userID" name="userID" value="{{ Auth::user()->id }}" -->
                                    </div>
									    {{ csrf_field() }}
                                    <button class="btn btn-primary float-right" type="submit" id="HomePost">Post</button>
									   <ul class="list-inline">
										   <!--li class="list-inline-item"><a href=""><i class="fas fa-upload"></i></a></li-->
										   <li class="list-inline-item"><a href="" id="upload_link"><i class="fas fa-camera"></i>Upload Photo</a></li>

										   <input type="file" class="custom-file-input" id="imgInp" name="imgInp" style="display: none">

										   <li class="list-inline-item"> <img src="public/images/blank.png" id='img-upload' class="rounded mx-auto d-block" alt="..." width="20" height="20"></li>
									   </ul>
                                  </form>
                              </div>
		 <hr>
		<table class="table table-hover">
    <thead>
      <tr>




        <th>Photo</th>
		  <th>Donate Date</th>
	    <th>Status</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($HomePost as $post)
      <tr>
        @if($post->image != '')
		<td> <img src= 'public/images/posts/{{$post->uid}}/{{$post->image}}'  class="rounded mx-auto d-block" alt="Post" width="100" height="100"></td>
  @elseif (Auth::user()->avatar != '')
  <td> <img src= 'public/images/avatar/{{Auth::user()->avatar }}'  class="rounded mx-auto d-block" alt="Post" width="100" height="100"></td>
@else
<td> <img src= 'public/images/avatar.png'  class="rounded mx-auto d-block" alt="Post" width="100" height="100"></td>

  @endif
        <td>{{$post->post}}</td>
        <td>{{$post->created_at}}</td>

      </tr>
@endforeach
    </tbody>
  </table>
	</div>
	</div>
	</div>

@endsection


@section('javascript')
<script src="{{ asset('public/js/dashboard.js') }}"></script>
<script src="{{ asset('public/js/home.js') }}"></script>


@stop
