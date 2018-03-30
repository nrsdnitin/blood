 @extends('layouts.app')

@section('content')
 
            <div class="content">
                <div class="title m-b-md">
                  
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
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       <input id="location_latitude" type="hidden" class="form-control" name="location_latitude" value="No" required>
                       <input id="location_longitude" type="hidden" class="form-control" name="location_longitude" value="No" required>
                 
                 
                </div>
                <div id="map"   style="width:100%; height: 86%; position: absolute">
                </div>
           
        </div>
       
       
@endsection

@section('javascript') 
 <script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAVVoiR8zLZlUCqaupuvyhH7nGArmQBKo "></script>
 <script src="{{ asset('public/js/searchResult.js') }}"></script>
@stop