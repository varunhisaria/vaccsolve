// API Key : AIzaSyB1U1TptAe0PE4GPfrwXKrG-Dg0nm02OQQ
function initMap(){
	var geocoder = new google.maps.Geocoder();
}
function geocodeAddress(geocoder, address){
	//var address = $("#address").val();
	geocoder.geocode({'address':address}, function(results, status){
		if(status == google.maps.GeocoderStatus.OK){
			var lat = results[0].geometry.location.lat();
			var lng = results[0].geometry.location.lng();
			var location = {lat: lat, lng: lng};
			console.log(location);
		}
	});
}

function getLatLng(address){
	var geocoder = new google.maps.Geocoder();
	return geocodeAddress(geocoder, address);
}

function focusMap()