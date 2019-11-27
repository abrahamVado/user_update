
<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "eiffmxco_landing";

$con = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName, 3306);


if(!$con){
	die("<div class='alert alert-danger' role='alert'><b> Error en la base de datos
	imposible conectarse:</b></div> ".mysqli_error($con));
}
if (@mysqli_connect_errno()) {
	die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
}

