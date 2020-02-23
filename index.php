<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container card mt-4"> <br>
	<form  method="POST" > 
	  <div class="form-group">
	    <label for="nuevaCarpeta">Nueva Carpeta:</label>
	    <input type="text" class="form-control" name="nombreCarpeta" id="" placeholder="Introduzca el nombre de la carpeta">
	  </div>
	  <button type="button" class="btn btn-success" onclick="generarCarpeta()">Crear</button>
	</form>
	<hr>
	<a  onclick="mostrarCarpeta();" style="cursor: pointer;" class="alert alert-success" role="alert"> <h4 id="rutaCarpeta"></h4></a> 
</div>
</body>
<script src="script.js"></script>
</html>