// var x = document.getElementById("demo");
// var y = document.getElementById("weather");
// var lat;
// var lon;

function getLocation() {

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError, {timeout:10000});

        console.log("Inside getLocation");
    } else { 
        document.getElementById("location").innerHTML = "Geolocation is not supported by this browser.";
    }

    // if(typeof callback == 'function'){
    // 	callback();
    // }
}

function showPosition(position) {
    
	console.log("Show position invoked");

    // document.getElementById("demo").innerHTML = "Latitude: " + position.coords.latitude + 
    // "<br>Longitude: " + position.coords.longitude;
    
    var lat = position.coords.latitude;
    var lon = position.coords.longitude;

    console.log(lat);
    console.log(lon);

    getWeather(lat,lon);
}

function showError(error){

	alert(error);
}

function getWeather(latitude,longitude){

console.log("getWeather invoked");

var uri = "http://api.openweathermap.org/data/2.5/weather?lat=" + latitude + "&lon=" + longitude + "&APPID=31e20710748d89e19d924e0982c5a3e3";

console.log(uri);


$.ajax({
	dataType: 'json',
  type: 'GET',
  url: uri,
  cache: 'yes',
  data: {},
  success: function(data){
  
  	document.getElementById("location").innerHTML = data.name + ", " + data.sys.country;
  	document.getElementById("t-reading").innerHTML = data.main.temp;
  	document.getElementById("w-reading").innerHTML = data.weather[0].description;
  	document.getElementById("windspeed").innerHTML = data.wind.speed;
  	// console.log(data.sys.country);
  	// console.log(data.weather[0].description);
  },
  error: function(err){alert(err);},
 
});
}

/*$(document).ready(function(){

	lat = 0;
	lon = 0;

	getLocation();

	console.log(lat + lon);
})*/

$(document).ready(function(){

	console.log("DOM ready");
	getLocation();
	

	// lat = 0;
	// lon = 0;

	// document.getElementById("conds").addEventListener("click", getWeather);
	// getWeather();
});