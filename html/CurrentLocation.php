<html>
<button  onclick="getLocation()" >Try It </button>
<p id="demo"> </html>
<div id="mapholder"></div>
</html>

<script>
var x=document.getElementById("demo");
function getLocation()
{
if (navigator.geolocation)
{
navigator.geolocation.getCurrentPosition(showPosition,showError);
}
else{x.innerHTML="Geolocation is not supported by this browser.";}
}

function showPosition(position)
{
var lat=position.coords.latitude;
var lon=position.coords.longitude;
var latlon=new google.maps.LatLng(lat, lon)
var mapholder=document.getElementById('mapholder')
mapholder.style.height='250px';
mapholder.style.width='100%';

var myOptions={
center:latlon,zoom:14,
mapTypeId:google.maps.MapTypeId.ROADMAP,
mapTypeControl:false,
navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
};
var map=new google.maps.Map(document.getElementById("mapholder"),myOptions);
var marker=new google.maps.Marker({position:latlon,map:map,title:"You are here!"});
}

function showError(error)
{
switch(error.code)
{
case error.PERMISSION_DENIED:
x.innerHTML="User denied the request for Geolocation."
break;
case error.POSITION_UNAVAILABLE:
x.innerHTML="Location information is unavailable."
break;
case error.TIMEOUT:
x.innerHTML="The request to get user location timed out."
break;
case error.UNKNOWN_ERROR:
x.innerHTML="An unknown error occurred."
break;
}
}
</script>
<hr>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAza0kp5n03qAG424Qs4eeHSXr0aLRZy-E&callback=initMap">
</script>
</body>
</html>