<?php 

$nombreCarpeta=$_POST['nombreCarpeta'];

$rutaAbsoluta = dirname(__FILE__);

$ruta="carpetas/".$nombreCarpeta."/";//Ruta para creacion de directorio

$rutaWindows="\carpetas"."\\".$nombreCarpeta."\\";//Ruta para retornar la respuesta 

if (!file_exists($ruta)) {
    mkdir($ruta, 0777, true);
    echo $rutaAbsoluta . $rutaWindows;
 
}else{
    echo "1";
}

 ?>