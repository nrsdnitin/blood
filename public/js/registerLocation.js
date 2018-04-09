//alert("Settings page was loaded");
//var e = document.getElementById("location_YesNo");
	
$(document).ready(function() {
  //   alert("aaaaSettings page was loaded");
   /*    if (navigator.geolocation) {
           navigator.geolocation.getCurrentPosition(showPosition);
       }
       function showPosition(position) {
       console.log(position.coords.latitude);
          $('[id$=location_latitude]').val(position.coords.latitude);
          $('[id$=location_longitude]').val(position.coords.longitude);

console.log(position.coords.longitude);
          $.getJSON( {
              url  : "https://maps.googleapis.com/maps/api/geocode/json?latlng="+position.coords.latitude+","+position.coords.longitude,
              data : {
                  sensor  : false,
                  address : address
              },
              success : function( data) {
                  address(data );
              }
          } );

            $.ajax({
               type: "GET",
               url: "https://maps.googleapis.com/maps/api/geocode/json?latlng="+position.coords.latitude+","+position.coords.longitude,
               dataType: "json",
               success: processJSON
             }).success(function(data){
               processJSON(data);
             });
            function processJSON(json) {
            //    alert("Postal Code:" + json.results[0].address_components[6].long_name);
              console.log(json);
            }


       }
	   
	   */


	
	

	//initMap();




   });
	
	
	
	

function getAddressbyGeo()
{
  var latitude=   $('[id$=location_latitude]').val();
  var longitude=   $('[id$=location_longitude]').val();
  $.ajax({
     type: "GET",
     url: "https://maps.googleapis.com/maps/api/geocode/json?latlng="+latitude+","+longitude,
//url: "https://maps.googleapis.com/maps/api/geocode/json?latlng=20.3782272,72.8353536",
     dataType: "json",
     success: processJSON
   });


}


function processJSON(json) {
console.log(json);
console.log(json.results[0].address_components[5].long_name);

$('[id$=address_pincode]').val(json.results[1].address_components[4].long_name);
$('[id$=address_country]').val(json.results[1].address_components[3].short_name);
$('[id$=address_state]').val(json.results[1].address_components[2].long_name);
$('[id$=address_city]').val(json.results[1].address_components[1].long_name);
$('[id$=address_street2]').val(json.results[1].address_components[0].long_name);
    // alert("Postal Code:" + json.results[0].address_components[6].long_name);


}
/*
function getLocation() {


    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
*/

      var placeSearch, autocomplete,map;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'long_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

 

      function initAutocomplete() {
		  //niitin
		//  var mapLayer = document.getElementById("map-layer");
		//var centerCoordinates = new google.maps.LatLng(21.9843735 ,80.4672701);
		//var defaultOptions = { center: centerCoordinates, zoom: 5,mapTypeId: 'roadmap' }

		//map = new google.maps.Map(mapLayer, defaultOptions);
		  
		  
		  /////
		     map = new google.maps.Map(document.getElementById('map-layer'), {
          center: {lat: 21.9843735 , lng: 80.4672701},
          zoom: 5,
          mapTypeId: 'roadmap'
        });

          ///////////////////////////
		  
		  
		  
		  
		  
		
		  
		  
		  ////////////////////////////////////////
		   autocomplete = new google.maps.places.Autocomplete(document.getElementById('autocomplete'));

        // Bind the map's bounds (viewport) property to the autocomplete object,
        // so that the autocomplete requests use the current map bounds for the
        // bounds option in the request.
        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
          map: map,
          anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setPosition(place.geometry.location);
          marker.setVisible(true);

          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }

          infowindowContent.children['place-icon'].src = place.icon;
          infowindowContent.children['place-name'].textContent = place.name;
          infowindowContent.children['place-address'].textContent = address;
          infowindow.open(map, marker);
			
			
			
			
			
			
			
        });

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
          var radioButton = document.getElementById(id);
          radioButton.addEventListener('click', function() {
            autocomplete.setTypes(types);
          });
        }

        
		   ///nitin end
		  
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        //autocomplete = new google.maps.places.Autocomplete( (document.getElementById('autocomplete')),  {types: ['geocode']});
		  
		 
        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
		  
		   
		  
		  
		  
		  
		  
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();
     //console.log(place.geometry.location);
        for (var component in componentForm) {
		//	alert(component);
         //// document.getElementById(component).value = '';
         // document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
		  //console.log(place.address_components[0]);
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
			 
          if (componentForm[addressType]) {
			 // console.log(addressType);
            var val = place.address_components[i][componentForm[addressType]];
			  switch(addressType){
				  case 'street_number':
					  addressType = 'address_street';
					  break;
				 case 'route':
					  addressType = 'address_street2';
					  break;
				 case 'locality':
					  addressType = 'address_city';
					  break;
				case 'administrative_area_level_1':
					  addressType = 'address_state';
					  break;
				case 'country':
					  addressType = 'address_country';
					  break;
				case 'postal_code':
					  addressType = 'address_pincode';
					  break;
				  default:
					  break;
					  
								}
            document.getElementById(addressType).value = val;
          }
        }
		      document.getElementById('location_latitude').value = place.geometry.location.lat();
		   document.getElementById('location_longitude').value = place.geometry.location.lng();
		  
		    
		  
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
			 
            autocomplete.setBounds(circle.getBounds());
			//autocomplete.bindTo('bounds', map);
          });
        }
      }

