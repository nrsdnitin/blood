
//var e = document.getElementById("location_YesNo");
$(document).ready(function() {
       //alert("Settings page was loaded");
       if (navigator.geolocation) {
           navigator.geolocation.getCurrentPosition(showPosition);
       }

       function showPosition(position) {
        /// console.log(position.coords.latitude);
          $('[id$=location_latitude]').val(position.coords.latitude);
          $('[id$=location_longitude]').val(position.coords.longitude);
/*
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

*/


       }




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
