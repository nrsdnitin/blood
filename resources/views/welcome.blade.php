 @extends('layouts.app')

@section('content')




  <div style="float:right;" class="form-horizontal" >
  <iframe src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fblood.desnar.com&width=106&layout=button_count&action=like&size=small&show_faces=true&share=true&height=46&appId=208907689702226" width="106" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media">
</iframe>   </div>





<div id="form_mapORlist" class=" text-center">
<div class="btn-group btn-group-toggle" data-toggle="buttons-radio">
  <label class="btn btn-primary active">
    <input type="radio" name="optionss" id="option1" autocomplete="off" checked value="map"> Map
  </label>
  <label class="btn btn-primary">
    <input type="radio" name="optionss" id="option2" autocomplete="off" value="list"> List
  </label>

</div>
</div>
		  <div class="clearfix">


      </div>

 <div class="controls">

            <div class="row">
				  <div class="clearfix"></div>
                <div class="col-sm-5 mx-auto">
                    <div class="form-group">
                        <label for="form_name">Select Your Location</label>
                       <input id="autocomplete"   placeholder="e.g. City or State..."    type="text" class="form-control" name="autocomplete"  style="background-color:#c6ccff;border-color: coral;">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-sm-5 mx-auto">
                    <div class="form-group">
                        <label for="form_email">Select Blood Group</label>
                        <select id="blood_group" type="blood_group" class="form-control" name="blood_group" required>
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
                        <div class="help-block with-errors">
						 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       <input id="location_latitude" type="hidden" class="form-control" name="location_latitude" value="No" required>
                       <input id="location_longitude" type="hidden" class="form-control" name="location_longitude" value="No" required> </div>
                    </div>
                </div>

            </div>
        </div>




<div class="content">

                <div id="map"   style="width:100%; height: 79%; position: absolute">
                </div>


                <hr>
                <div id="list" >
           		<table class="table table-hover" id="listTable">
               <thead>
                 <tr>
                <th>Photo</th>
           		  <th>Name</th>
           	    <th>Status</th>
                <th>Mobile</th>
                <th>Address</th>

                 </tr>
               </thead>
               <tbody>
               </tbody>
             </table>
</div>

        </div>


@endsection

@section('javascript')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
 <script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAVVoiR8zLZlUCqaupuvyhH7nGArmQBKo&libraries=places"></script>
 <script src="{{ asset('public/js/searchResult.js') }}"></script>
@stop
