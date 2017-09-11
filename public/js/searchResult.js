
$(document).ready(function() {




  if (navigator.geolocation) {
   navigator.geolocation.getCurrentPosition(showPosition);
  }

  function showPosition(position) {
 // console.log(position.coords.latitude);

     $('[id$=location_latitude]').val(position.coords.latitude);
     $('[id$=location_longitude]').val(position.coords.longitude);

  }



var id = 'A+';

//var id = $(this).attr("id");
$( "#blood_group" ).change(function()
  {
  //console.log(  $('[id$=location_longitude]').val());
    var donors= [];
    var donorNumber=1;
    var theResultsMulti = new Array();

$.ajax({
    method: 'GET', // Type of response and matches what we said in the route
    url: "search", // This is the url we gave in the route
    data: {'blood_group' : id}, // a JSON object to send back
    success: function(response){ // What to do if we succeed
$.each(response, function(key, value) {
//  console.log(response.length);
  var theResults = new Array();
//theResults[0] = donors;
  theResults[0]=value.name;theResults[1]=parseFloat(value.location_latitude);
  theResults[2]=parseFloat(value.location_longitude);
  theResults[3]=donorNumber;
  theResults[4]=value.email;
  theResults[5]=value.mobile;

  theResultsMulti.push(theResults);
//  donors.push(value.name+','+value.location_latitude+','+value.location_longitude+','+donorNumber);
  donorNumber++;







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
/*  $.each(donordata, function(key, value) {
  //  $('#content').append('<input id="rad-'+key+'" type="radio" name="contnet" value="'+key+'"><label for="rad-'+key+'">'+value.answer+'</label><br>');
console.log(key +"  "+value);
});​
*/






var locations = [
     ['Bondi Beach', -33.890542, 151.274856, 4],
     ['Coogee Beach', -33.923036, 151.259052, 5],
     ['Cronulla Beach', -34.028249, 151.157507, 3],
     ['Manly Beach', -33.80010128657071, 151.28747820854187, 2],
     ['Maroubra Beach', -33.950198, 151.259302, 1]
   ];
   //console.log(donorRequester);



var locations= donordata;
//console.log(locations);

   var map = new google.maps.Map(document.getElementById('map'), {
     zoom: 13,

     center: new google.maps.LatLng(lati, longi),
     mapTypeId: google.maps.MapTypeId.ROADMAP
   });

   var infowindow = new google.maps.InfoWindow();

   var marker, i;

   for (i = 0; i < locations.length; i++) {


     marker = new google.maps.Marker({
       position: new google.maps.LatLng(locations[i][1], locations[i][2]),

       clickable: false,
      //icon: new google.maps.MarkerImage('//maps.gstatic.com/mapfiles/mobile/mobileimgs2.png',
      //                                                   new google.maps.Size(22,22),
      //                                                   new google.maps.Point(0,18),
      //                                                   new google.maps.Point(11,11)),
    shadow: null,
   zIndex: 999,

       map: map
     });




     google.maps.event.addListener(marker, 'click', (function(marker, i) {
       var contentString = '<div id="content">'+
                  '<div id="siteNotice">'+
                  '</div>'+
                  '<h1 id="firstHeading" class="firstHeading">'+locations[i][5]+'</h1>'+
                  '<div id="bodyContent">'+
                  '<p><b>'+locations[i][4]+'</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
                  'sandstone rock formation in the southern part of the '+

                  'Heritage Site.</p>'+
                  '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
                  'https://en.wikipedia.org/w/index.php?title=Uluru</a> '+
                  '(last visited June 22, 2009).</p>'+
                  '</div>'+
                  '</div>';
       return function() {
         infowindow.setContent(locations[i][0]+contentString);
         infowindow.open(map, marker);
       }
     })(marker, i));
   }

/*   if (navigator.geolocation) navigator.geolocation.getCurrentPosition(function(pos) {
       var me = new google.maps.LatLng(pos.coords.latitude, pos.coords.longitude);
       console.log(pos.coords.latitude);
     marker.setPosition(me);
   }, function(error) {
     console.log('not supported');
   });
   */

}


/*
$(document).ready(function() {
    // Asynchronously Load the map API
    var script = document.createElement('script');
    script.src = "//maps.googleapis.com/maps/api/js?sensor=false&callback=initialize";
    document.body.appendChild(script);
});

function initialize() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap'
    };

    // Display a map on the page
    map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
    map.setTilt(45);

    // Multiple Markers
    var markers = [
        ['London Eye, London', 51.503454,-0.119562],
        ['Palace of Westminster, London', 51.499633,-0.124755]
    ];

    // Info Window Content
    var infoWindowContent = [
        ['<div class="info_content">' +
        '<h3>London Eye</h3>' +
        '<p>The London Eye is a giant Ferris wheel situated on the banks of the River Thames. The entire structure is 135 metres (443 ft) tall and the wheel has a diameter of 120 metres (394 ft).</p>' +        '</div>'],
        ['<div class="info_content">' +
        '<h3>Palace of Westminster</h3>' +
        '<p>The Palace of Westminster is the meeting place of the House of Commons and the House of Lords, the two houses of the Parliament of the United Kingdom. Commonly known as the Houses of Parliament after its tenants.</p>' +
        '</div>']
    ];

    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;

    // Loop through our array of markers & place each one on the map
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0]
        });

        // Allow each marker to have an info window
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);
    }

    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(14);
        google.maps.event.removeListener(boundsListener);
    });

}
*/
