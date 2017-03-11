<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initialscale=1">

	<title>Weather App</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/theme.css">

</head>
<body id="backdrop">

<!-- Set the background of #backdrop to the image corresponding to the weather returned.  -->

<div id="wrapper" class="container-fluid">

<!-- Wrapper will contain all the content information at a fixed sixe: 1024 x 600, centered with no margin at the top -->

<!-- 	<p>Click the button to get your coordinates.</p>

	<button id="conds">Try It</button>

	<p id="demo"></p>

	<p id="weather"></p> -->
	<div class="row">
		<div class="text-center">
		Your Location Is:
		</div>
	</div>
	<div class="row">
		<div id="location" class="row">
			<!-- <div class="col-med-12 text-center"></div> -->
		</div>
	</div>

	<div id="temp"  class="row">
		<div id="left-col" class="col-md-4 pull-left">
			<div id="t-reading">Weather Reading</div>
			<div id="t-toggle">Farenheit switch</div>
		</div>
<!-- 	</div>

	<div id="cond" class="row"> -->
		<div id="right-col" class="col-md-4 pull-right">
			<div id="w-image" class="col-md-6"></div>
			<div id="w-reading" class="col-md-6">Condition Goes Here</div>
		<!-- <div id="windspeed" class="col-md-6 text-center pull-right">Windspeed goes here</div> -->
		</div>
	</div>
	
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/functions.js"></script>
</body>
</html>