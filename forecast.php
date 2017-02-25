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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>
<body id="backdrop">

<!-- Set the background of #backdrop to the image corresponding to the weather returned.  -->

<div id="wrapper" class="col-med-12">

<!-- Wrapper will contain all the content information at a fixed sixe: 1026 x 600, centered with no margin at the top -->

	<div class="row">Your Location Is:</div>
	
	<div id="location" class="row"></div>

	<div id="temp" class="row">
		<div id="w-reading" class="col-med-6"></div>
		<div id="w-toggle" class="col-med-6"></div>
	</div>

	
</div>


</body>
</html>