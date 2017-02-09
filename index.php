<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Control de Acceso - Chilecop</title>
	<link rel="stylesheet" href="jquerymobile/jquery.mobile-1.4.5.css">
	<script src="jquerymobile/jquery.js"></script>
	<script src="jquerymobile/jquery.mobile-1.4.5.js"></script>
	<script src="js/funciones.js"></script>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<div data-role="page" data-theme="b" id="index">
		<div id="wrapper">
			<div data-role="header" id="header">
				<div class="logo">
					<img src="images/logo.png" alt="">
				</div>
				<h1>Menú Principal</h1>			
			</div>
			<div data-role="main" id="main">
				<div class="ui-content">
					<button onclick="window.location='#peatonal'" type="submit">Ingreso Peatonal</button>
					<button onclick="window.location='#vehicular'" type="submit">Ingreso Vehicular</button>
				</div>			
			</div>
			<div data-role="footer" id="footer">
				<div class="ui-content">
					<small>&copy; Chilecop Holding Group</small>
				</div>
			</div>
		</div>
	</div>
	<div data-role="page" data-theme="b" id="peatonal">
		<div data-role="header">
		<h1>Ingreso Peatonal</h1>
		</div>
		<div data-role="main">
			<div class="ui-content">
				<form action="php/insertarAcceso.php" method="post" data-ajax="false">
					<input type="text" name="rut" value="" placeholder="Rut" onkeydown="limpiarut_(this)" onkeyup="limpiarut_(this)" required>
					<input type="text" name="name" value="" placeholder="Nombre" required>
					<select name="block" required>
						<option value="">Block</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
					</select>
					<select name="casa" required>
						<option value="">Casa / Dpto</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
					</select>
					<button type="submit">Ingresar</button>
				</form>
			</div>
			<br>
			<a href="#index">volver al menú</a>
		</div>
		<div data-role="footer">
			<div class="ui-content">
				<small>&copy; Chilecop Holding Group</small>
			</div>
		</div>
	</div>
	<div data-role="page" data-theme="b" id="vehicular">
		<div data-role="header">
			<h1>Ingreso Vehicular</h1>
		</div>
		<div data-role="main">
			<div class="ui-content">
				<form action="php/insertarAccesoV.php" method="post" data-ajax="false">
					<input type="text" name="rutV" value="" placeholder="Rut" onkeydown="limpiarut_(this)" onkeyup="limpiarut_(this)" required>
					<input type="text" name="nameV" value="" placeholder="Nombre" required>
					<input type="text" name="patenteV" value="" placeholder="Patente" required>
					<select name="blockV" required>
						<option value="">Block</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
					</select>
					<select name="casaV" required>
						<option value="">Casa / Dpto</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
					</select>
					<button type="submit">Ingresar</button>
				</form>
			</div>
			<br>
			<a href="#index">volver al menú</a>
		</div>
		<div data-role="footer">
			<div class="ui-content">
				<small>&copy; Chilecop Holding Group</small>
			</div>
		</div>
	</div>
</body>
</html>