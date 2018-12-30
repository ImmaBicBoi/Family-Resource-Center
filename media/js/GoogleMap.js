function myMap()
{
	var myLatLng = {lat: 41.183280, lng: -73.174660};
	var mapCanvas = document.getElementById("map");
	var mapOptions = {center: new google.maps.LatLng(41.183280, -73.174660), zoom : 10};	
	var map = new google.maps.Map(mapCanvas, mapOptions);
	var marker = new google.maps.Marker({position: myLatLng, map: map,});
}