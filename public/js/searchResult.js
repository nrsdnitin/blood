
$(document).ready(function() {




					$('#form_mapORlist .btn').on('click', function(event) {
				   console.log($(this).find('input').val());
				   var val = $(this).find('input').val();
					 if(val == '' || val =='map')
					 {
						 $('#map').css('display','block');
					 $('#list').css('display','none');

					 }
					 else {
						 $('#map').css('display','none');
	 					$('#list').css('display','block');
					 }

				 });


	$( "#target" ).click(function() {
 var startPos;
  var geoOptions = {
    enableHighAccuracy: true
  }

  var geoSuccess = function(position) {
    startPos = position;
	 $('[id$=location_latitude]').val(startPos.coords.latitude);
     $('[id$=location_longitude]').val(startPos.coords.longitude);


  };
  var geoError = function(error) {
    console.log('Error occurred. Error code: ' + error.code);
    // error.code can be:
    //   0: unknown error
    //   1: permission denied
    //   2: position unavailable (error response from location provider)
    //   3: timed out
  };

  navigator.geolocation.getCurrentPosition(geoSuccess, geoError, geoOptions);


});


	if($("#location_latitude").val() == "No")
	{


	var visitorIP;
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

	}


      // var infowindow = new google.maps.InfoWindow();
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 6,
			rotateControl:true,
			scaleControl: true,
          center: {lat: 21.9843735, lng: 80.4672701}
        });

	    var input = document.getElementById('autocomplete');
        var searchBox = new google.maps.places.SearchBox(input);
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
			  document.getElementById('location_latitude').value = place.geometry.location.lat();
		   document.getElementById('location_longitude').value = place.geometry.location.lng();
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });

          map.fitBounds(bounds);
        });



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

  var theResults = new Array();

  theResults[0]=value.name;
  theResults[1]=parseFloat(value.location_latitude);
  theResults[2]=parseFloat(value.location_longitude);
  theResults[3]=donorNumber;
  theResults[4]=value.email;
  theResults[5]=value.mobile;
	theResults[6]=value.avatar;
	theResults[7]=value.blood_group;
	theResults[8]=value.address_city;
	theResults[9]=value.status;


  theResultsMulti.push(theResults);
//  donors.push(value.name+','+value.location_latitude+','+value.location_longitude+','+donorNumber);
  donorNumber++;




////alert(theResultsMulti);


});
displayToList(theResultsMulti);
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



function displayToList(list)
{
	console.log(list);
	for (i = 0; i < list.length; i++) {
 var table = document.getElementById("listTable").getElementsByTagName('tbody')[0];
 var row = table.insertRow(0);
row.insertCell(0).innerHTML = '<img src="public/images/avatar/'+list[i][6]+'" alt="Avatar" style="width:50px;border-radius: 50%;">';
row.insertCell(1).innerHTML = list[i][0]+' ('+list[i][7]+')';
if(list[i][9] ==0){row.insertCell(2).innerHTML = 'Available';}else{row.insertCell(2).innerHTML = 'NotAvailable';}
//row.insertCell(2).innerHTML = list[i][9];
row.insertCell(3).innerHTML = list[i][5];
row.insertCell(4).innerHTML = list[i][8];
//row.insertCell(5).innerHTML = list[i][9];

}
//console.log(list);

}

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
                  '</div><img src="public/images/avatar/'+locations[i][6]+'" alt="Avatar" style="width:50px;border-radius: 50%;">'+
                  '<h5 id="firstHeading" class="firstHeading">'+locations[i][0]+'</h1>'+
                  '<div id="bodyContent">'+
                  '<p><b> <i class="material-icons">phone</i><a href="tel://='+locations[i][5]+'">'+locations[i][5]+'</b> '+
                  '</div>'+
                  '</div>';


		 var contentString='<div class="jumbotron">  <div class="span4"><img class="rounded-circle" style="float:left;width:30px;" src="public/images/avatar/'+locations[i][6]+'"/>  <div class="content-heading"><h5 class="display-4">'+locations[i][0]+' &nbsp </h3></div> <p style="clear:both"> <i class="material-icons">phone</i><a href="tel://='+locations[i][5]+'">'+locations[i][5]+'</b>'+'</p>  </div>  </div>';

		 	 var contentString='<div class="clearfix"><img class="rounded-circle pull-left" style="float:left;width:50px;" src="public/images/avatar/'+locations[i][6]+'"/>  <h5 id="firstHeading" class="firstHeading">'+locations[i][0]+'  ('+locations[i][7]+')'+'</h1>'+
                  ' <p><b> <i class="material-icons">phone</i><a href="tel://='+locations[i][5]+'">'+locations[i][5]+'</b></p></div>';
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
