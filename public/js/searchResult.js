
$(document).ready(function() {
var visitorIP;
 $( "#location_latitude").val(21.9843735);
	$( "#location_longitude").val(80.4672701);
	
 var RTCPeerConnection = window.RTCPeerConnection || webkitRTCPeerConnection || mozRTCPeerConnection;
      var peerConn = new RTCPeerConnection({'iceServers': [{'urls': ['stun:stun.l.google.com:19302']}]});
      var dataChannel = peerConn.createDataChannel('test');  // Needs something added for some reason
      peerConn.createOffer({}).then((desc) => peerConn.setLocalDescription(desc));
      peerConn.onicecandidate = (e) => {
		 
        if (e.candidate == null) {
          //document.getElementById("ip").innerText = /c=IN IP4 ([^\n]*)\n/.exec(peerConn.localDescription.sdp)[1];
			 visitorIP = /c=IN IP4 ([^\n]*)\n/.exec(peerConn.localDescription.sdp)[1];
			 	
	
	 
	$.ajax({
    method: 'GET', // Type of response and matches what we said in the route
    url: "getLocationByIP", // This is the url we gave in the route
    data: {'visitorIP' : visitorIP}, // a JSON object to send back
    success: function(response){ // What to do if we succeed
$.each(response, function(key, value) {
	// console.log(response['geoplugin_latitude']);
	$( "#location_latitude").val(response['geoplugin_latitude']);
	$( "#location_longitude").val(response['geoplugin_longitude']);
});
	},

});
			
        }
		  //console.log(visitorIP);
      };
	 
	 
	
 


	
	
 
 

      // var infowindow = new google.maps.InfoWindow();
        var map1 = new google.maps.Map(document.getElementById('map'), {
          zoom: 6,
          center: {lat: 21.9843735, lng: 80.4672701}
        });



  if (navigator.geolocation) {
   navigator.geolocation.getCurrentPosition(showPosition);
  }

  function showPosition(position) {
  // console.log(position.coords.latitude);

     $('[id$=location_latitude]').val(position.coords.latitude);
     $('[id$=location_longitude]').val(position.coords.longitude);

  }



//var id = 'B-';

//var id = $(this).attr("id");
$( "#blood_group" ).change(function()
  {
	
	

	
	
	
	
	//console.log('aaa');
 var id= $('[id$=blood_group]').val();
    var donors= [];
    var donorNumber=1;
    var theResultsMulti = new Array();

$.ajax({
    method: 'GET', // Type of response and matches what we said in the route
    url: "search", // This is the url we gave in the route
    data: {'blood_group' : id}, // a JSON object to send back
    success: function(response){ // What to do if we succeed
$.each(response, function(key, value) {
 // console.log(value.name);
  var theResults = new Array();
//	console.log(response);
//	theResults=response;
 // theResults[0] = donors;
  theResults[0]=value.name;
  theResults[1]=parseFloat(value.location_latitude);
  theResults[2]=parseFloat(value.location_longitude);
  theResults[3]=donorNumber;
  theResults[4]=value.email;
  theResults[5]=value.mobile;

  theResultsMulti.push(theResults);
//  donors.push(value.name+','+value.location_latitude+','+value.location_longitude+','+donorNumber);
  donorNumber++;




////alert(theResultsMulti);


});

loadDonor(theResultsMulti,$('[id$=location_latitude]').val(),$('[id$=location_longitude]').val());

      //  console.log('nitoin');
    },
    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
      console.log(JSON.stringify(jqXHR));
console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
    }
});
});

});




 
function loadDonor(donordata,lati,longi)
{
 
  // console.log(lati);

//http://www.geoplugin.com/geodata.php?&ip=
	
	//echo var_export(unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR'])));
	
lati=Number(lati);
longi=Number(longi);
var locations= donordata;
//console.log(locations);

  

   var infowindow = new google.maps.InfoWindow();

   var marker, i;
	 
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: {lat: lati, lng: longi}
        });

	
	for (i = 0; i < locations.length; i++) {
		//console.log(locations[i][1]);
        marker = new google.maps.Marker({
          map: map,
          draggable: true,
          animation: google.maps.Animation.DROP,
          position: {lat: locations[i][1], lng: locations[i][2]}
        });
	//marker.addListener('click', toggleBounce);
	
     google.maps.event.addListener(marker, 'click', (function(marker, i) {
		
       var contentString = '<div id="content">'+
                  '<div id="siteNotice">'+
                  '</div>'+
                  '<h1 id="firstHeading" class="firstHeading">'+locations[i][0]+'</h1>'+
                  '<div id="bodyContent">'+
                  '<p><b> <i class="material-icons">phone</i><a href="tel://='+locations[i][5]+'">'+locations[i][5]+'</b> '+
                  '</div>'+
                  '</div>';
       return function() {
         infowindow.setContent(contentString);
         infowindow.open(map, marker);
		      if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
			
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
       }
     })(marker, i));

   }

}




      function toggleBounce() {
        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
			
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
      
	

       }

