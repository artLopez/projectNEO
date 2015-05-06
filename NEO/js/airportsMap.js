
var map;
var myCenter=new google.maps.LatLng(51.508742,-0.120850);

function initialize()
{
    var mapProp = {
        center:myCenter,
        zoom:1,
        mapTypeId:google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

    $.ajax({
        url: "adminFunctions.php",
        type: 'GET',
        data:{ action:'getAirportPoints'},
        success: function(json){
            $.each($.parseJSON(json),generatePoints)
        },
        error: function (xhr, status, errorThrown) {
            //alert( "Sorry, there was a problem!" );
            console.log( "Error: " + errorThrown );
            console.log( "Status: " + status );
            console.dir( xhr );
        },
        complete: function( xhr, status ) {
            //alert( "The request is complete!" );
        }
    });
}

function placeMarker(location) {
    var pos = new google.maps.LatLng(location[0],location[1]);

    var marker = new google.maps.Marker({
        position: pos,
        map: map
    });

    marker.open(map,marker);
}

function generatePoints(index,val){
    var latlng = new google.maps.LatLng(val.latitude,val.longitude);
    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        title: val.airport
    });
}

google.maps.event.addDomListener(window, 'load', initialize);
