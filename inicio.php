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

		<section>
			<article>
				<h2>Plataforma de mantenimiento</h2>
				<p>Bienvenido, seleccione una de las opciones del menú para empezar</p>
			</article>
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