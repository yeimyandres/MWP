<!DOCTYPE html>

<html lang="es">

	<head>
		<title></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="./css/estilos.css">
		<link rel="shortcut icon" href="./img/favicon.ico" />
	</head>

	<body>

		<header>
			<?php include "./inc/cabecera.php"; ?>
		</header>

		<nav>
			<?php include "./inc/menu.php"; ?>
		</nav>

		<section class="registro">
			<h2>Registro de nuevo caso</h2>
			<form action="registrarcaso.php" method="post">
				<select name="cbotiposequipo" id="cbotiposequipo">
					<option value="0">Seleccione Tipo de Equipo</option>
					<option value="1">Escritorio</option>
					<option value="2">Impresora</option>
					<option value="3">Portátil</option>
				</select>
				<select name="cbomarcas" id="cbomarcas">
					<option value="0">Seleccione marca del equipo</option>
					<option value="1">Acer</option>
					<option value="2">Apple</option>
					<option value="3">Asus</option>
					<option value="4">Compaq</option>
					<option value="5">Dell</option>
					<option value="6">HP</option>
					<option value="7">Lenovo</option>
					<option value="8">Toshiba</option>
					<option value="9">Otra Marca</option>
					<option value="10">Clon</option>
				</select>
				<input type="text" placeholder="modelo del equipo" />
				<input type="text" placeholder="número de serie del equipo" />
				<div id="datosequipo"></div>
				<hr>
				<input type="text" placeholder="correo electrónico del cliente">
				<input type="text" placeholder="nombre completo del cliente">
				<input type="text" placeholder="dirección residencia del cliente">
				<input type="text" placeholder="teléfono(s) de contacto del cliente">
				<hr>
				<textarea name="txtsintomas" id="txtsintomas" rows="5" placeholder="síntomas reportados por el cliente"></textarea>
				<textarea name="txtobservaciones" id="txtobservaciones" rows="5" placeholder="observaciones detectadas en recepción"></textarea>
				<hr>
				<input type="submit" value="Registrar caso">
			</form>
		</section>

		<footer>
			<?php include "./inc/pie.php"; ?>
		</footer>

	</body>

	<script type="text/javascript" src="./js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".menumovil").click(function(event){
				$(".menunormal").slideToggle(400);
			});
		});
	</script>

</html>