<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initialscale=1">

	<title>Weather App</title>

	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> -->

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/theme.css">

</head>
<body>

<!-- Set the background of #backdrop to the image corresponding to the weather returned.  -->
<div id="backdrop">
<div id="wrapper" class="container-fluid">

<!-- Wrapper will contain all the content information at a fixed sixe: 1024 x 600, centered with no margin at the top -->

<!-- 	<p>Click the button to get your coordinates.</p>

	<button id="conds">Try It</button>

	<p id="demo"></p>

	<p id="weather"></p> -->
	<div class="row vertical-center location-box">
		
		<h4>Displaying Local Weather for:</h4>

		<h3 id="location"></h3>

		
	</div>
	<!-- <div id="location" class="row vertical-center location-box">
		
	</div> -->

	<div id="temp"  class="row">
		<div id="left-col" class="col-md-6">
			<div id="t-reading"></div>
			<div id="t-toggle"><input id="checkUnit" type="checkbox" checked data-toggle="toggle" data-on="<p>&#8457</p>" data-off="<p>&#8451</p>" data-onstyle="primary" data-offstyle="success" data-style="ios" data-size="mini" data-height="20" data-width="20"/></div>
		</div>
<!-- 	</div>

	<div id="cond" class="row"> -->
		<div id="right-col" class="col-md-6">
			<div id="w-image"></div>
			<div id="w-reading"></div>
		<!-- <div id="windspeed" class="col-md-6 text-center pull-right">Windspeed goes here</div> -->
		</div>
	</div>

<!-- 	<div id="powered" class="row vertical center">

		<p>Powered by:</p>
		<div id="info">
		<img src="img/wunder50.png"/><p> and </p><img id="pix" src="img/pixabay.png"/>
		</div>
	</div> -->

	<div id="footer" class="row text-center">
		&copy;<script type="text/javascript"> document.write(new Date().getFullYear());</script> ManAYaad Inc.
	</div>
	
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="js/functions.js"></script>
</body>
</html>