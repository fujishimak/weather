// Need to get coordinates
function getRegion(){

	$.get("http://ipinfo.io", function (response) {
    $("#location").html(response.city + ", " + response.region);},"jsonp");
}

function getCoords(){

	if (navigator.geolocation) {
        
        return navigator.geolocation.getCurrentPosition();
    } 

    return "Geolocation is not supported by this browser.";
    
}

function showPosition(position){


}

// Need to get weather JSON object
function getWeather(){

	var position = getCoords();
	var url = "http://api.openweathermap.org/data/2.5/weather?lat=" + position.coords.latitude + "&lon=" + position.coords.longitude;

	$.ajax(
		dataType: "json",
		url: url,
		data: {},
		cache: false,
		success: function(data){

			var imgURL = setIconUrl(data.weather.icon);

			document.getElementById("#t-reading").innerHTML = "<img src='" + imgURL + "'> " + data.main.temp;

			document.getElementById("#w-reading").innerHTML = data.weather.description;

		}

		);


}

// Construct icon URL based on icon code -- http://openweathermap.org/img/w/<icon_id>.png
function setIconURL(var id){

	var mainURI = "http://openweathermap.org/img/w/";

	return mainURI+id+".png";
}


//Set background based on weather
function setBackdrop(var cond){

	return cond;
}

$(document).ready(function(){

// Get current coordinates and translate to a location 


getRegion();
getWeather();


});