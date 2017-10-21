	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hospital - Gestor Hojas de Vida</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.html">GESTOR HOJAS DE VIDA</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.html">Inicio</a></li>
				<li><a href="#">Administrador</a></li>
				<li><a href="#">Ingreso hojas de vida</a></li>
				<li><a href="#">Consulta hojas de vida</a></li>
				<li><a href="#">Actualización hojas de vida</a></li>
				<li><a href="reporte.html">Reportes especiales</a></li>
				<li class="active"><a href="operacion.php">Operaciones matemáticas</a></li>
			</ul>
		</div>		
	</nav>
	<div class="container">
		<h3>Formulario de operaciones</h3>
		<form action="php/operar.php" method="post">
			<div class="form-group">
				<label for="numero1">Número 1:</label>
				<input type="number" class="form-control" id="numero1" name="numero1">
			</div>
			<div class="form-group">
				<label for="numero2">Número 2:</label>
				<input type="number" class="form-control" id="numero2" name="numero2">
			</div>
			<div class="form-group">
				<p>Operaciones: </p>
				<label class="radio-inline">
					<input type="radio" name="operacion" value="sumar">Sumar
				</label>
				<label class="radio-inline">
					<input type="radio" name="operacion" value="restar">Restar
				</label>
				<label class="radio-inline">
					<input type="radio" name="operacion" value="multiplicar">Multiplicar
				</label>
				<label class="radio-inline">
					<input type="radio" name="operacion" value="dividir">Dividir
				</label>
			</div>
			<button type="submit" class="btn btn-default">Calcular</button>
		</form>
	</div>
	<div class="container">
		<h3>Resultados</h3>
		<?php
		//Inicia sesión para capturar los datos
			session_start();
			//Guarda las variables enviadas de la validación
			$mensaje = $_SESSION['mensaje'];
			$comparar = $_SESSION['comparar'];
			if (isset($mensaje) || isset($comparar)) {
				print "<p>" . $mensaje . "</p>";
				print "<p>" . $comparar . "</p>";
			}
			session_unset();
		?>
	</div>
	<div class="container">
		<h3>Secuencia - Grupo 41</h3>
		<?php
		//Secuencia para generar una cadena de números
			for ($i=1; $i <= 41 ; $i++) { 
				echo ($i . " ");
			}
		?>
	</div>
</body>
</html>