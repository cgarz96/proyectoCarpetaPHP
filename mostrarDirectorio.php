<?php 
$ruta= $_POST['nombreRuta'];
 if (isset($_POST['nombreRuta'])) {
 	exec ("explorer.exe $ruta");
 }
 ?>