<?php
	include('conexion.php');
	$con = conectarse();
	$patente = $_POST['patenteV'];
	$rut = $_POST['rutV'];
	$nombre = $_POST['nameV'];
	$block = $_POST['blockV'];
	$casa = $_POST['casaV'];

	$sql = "INSERT INTO ingresos (rut, nombre, block, casa, fecha, patente) VALUES ('$rut','$nombre','$block','$casa',now(),'$patente')";
	mysql_query($sql,$con);
	header("location: ../index.php");
	exit;
?>