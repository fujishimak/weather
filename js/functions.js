// var x = document.getElementById("demo"); var y =
// document.getElementById("weather"); var lat; var lon;

/*Changes to be made getLocation - Scrap JS Geolookup; Introduce Wunderground
with AJAX call to
http://api.wunderground.com/api/90ca0130eadd9f3f/geolookup/q/autoip.json
extract data.location.country_name and data.location.city. Invoke getWeather
with args

getWeather - Scrap lat and long and use country and city with AJAX call to   h
ttp://api.wunderground.com/api/90ca0130eadd9f3f/conditions/q/Jamaica/Kingston.
json  extract data.current_observation.weather,
data.current_observation.temperature_string,   store
data.current_observation.temp_f and temp_c for toggling later on,
data.current_observation.wind_string and data.current_observation.icon_url */

function getLocation() {

    $.ajax({

    	dataType: "json", 
    	url: "http://api.wunderground.com/api/90ca0130eadd9f3f/geolookup/q/autoip.json", 
    	type: 'GET', 
    	cache: 'yes', 
    	data: {},
    	success: function(data){

            var country = data.location.country_name;             
            var city = data.location.city;             
            document.getElementById("location").innerHTML= "<div class='col-md-12 text-center'><h3>"+ city + ", " + country + "</h3></div>";             
            getWeather(country, city);         
        },
	error: function(err){alert(err);}
	});

}

function getWeather(country, city){

console.log("getWeather invoked");

var uri = "http://api.wunderground.com/api/90ca0130eadd9f3f/conditions/q/" +
country + "/" + city + ".json";

console.log(uri);


$.ajax({     
	dataType: 'json',   
	type: 'GET',   
	url: uri,   
	cache: 'yes',
	data: {},   
	success: function(data){

/*      data.current_observation.weather,
data.current_observation.temperature_string,   store
data.current_observation.temp_f and temp_c for toggling later on,
data.current_observation.wind_string and data.current_observation.icon_url*/
  
    // document.getElementById("location").innerHTML = data.name + ", " + data.sys.country;     
    document.getElementById("t-reading").innerHTML = "<h1>" + data.current_observation.temperature_string + "</h1>";
    document.getElementById("w-image").innerHTML = " <img src='" + data.current_observation.icon_url + "' alt='" + data.current_observation.icon + "' >";
	document.getElementById("w-reading").innerHTML = data.current_observation.weather;
	// document.getElementById("windspeed").innerHTML = data.current_observation.wind_string;     
// console.log(data.sys.country); //
},   
error: function(err){alert(err);}
 
}); 
}

/*$(document).ready(function(){

	lat = 0; lon = 0;

	getLocation();

    console.log(lat + lon); })*/

$(document).ready(function(){

	console.log("DOM ready"); 
	getLocation();
	
});
	// lat = 0; lon = 0;

    // document.getElementById("conds").addEventListener("click", getWeather);
// getWeather(); });
