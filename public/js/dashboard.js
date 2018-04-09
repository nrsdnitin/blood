$(function(){
$("#upload_link").on('click', function(e){
    e.preventDefault();
    $("#imgInp").trigger('click');
});
	
	
	
	
	
/*
	 $("#asHomePost1").click(function (e) {
	
	$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
	   e.preventDefault(); 
	var userID= $('[id$=userID]').val();
		 
		 
	
$.ajax({
    method: 'POST', // Type of response and matches what we said in the route
    url: 'HomePost', // This is the url we gave in the route
    data: {'id' : userID}, // a JSON object to send back
	  
    success: function(response){ // What to do if we succeed
        console.log(response); 
    },
    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
        console.log(JSON.stringify(jqXHR));
        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
    }
});
});	*/
	
});