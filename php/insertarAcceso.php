<?php 
	include('conexion.php');
	$con = conectarse();
	$patente = $_POST['patente'];
	$rut = $_POST['rut'];
	$nombre = $_POST['name'];
	$block = $_POST['block'];
	$casa = $_POST['casa'];

	$sql = "INSERT INTO ingresos (rut, nombre, block, casa, fecha, patente) VALUES ('$rut','$nombre','$block','$casa',now(),'$patente')";
	mysql_query($sql,$con);
	header("location: ../index.php");
?>