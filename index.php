<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Selects dependientes con php y mysql</title>
	<script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
	
</head>
<body>
	<div  class='container'>
	<h2>Selects dependientes con php y mysql</h2>
	<label>Modelo</label>
			<select id="modelos" name="modelos" class='form-control'>
				<option value="0">Selecciona una opcion</option>
				<option value="1">Yeezy 350</option>
				<option value="2">Yeezy 500</option>
				<option value="3">Yeezy 700</option>
			</select>
			<br>
			<div id="select2lista"></div>
			<div id="priceColoWayLista"></div>
			
	</div>
</body>
</html>
<script type="text/javascript" src="Controller/VerifyColorWay.js"></script>
<script type="text/javascript" src="Controller/VerifyPrice.js"></script>
