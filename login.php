<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hospital - Gestor Hojas de Vida</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-dark bg-dark text-white">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand">GESTOR HOJAS DE VIDA</a>
			</div>
			
		</div>		
	</nav>
	<div class="container" style="padding-top: 10px">
		<div class="card">
			<div class="card-header text-center bg-secondary text-white">
				LOGIN
			</div>
			<div class="card-body   text-white bg-dark">
				<h4 class="card-title">Login de acceso</h4>
				<p class="card-text">Por favor introduzca sus datos para acceder al sistema</p>
				<form action="php/validar.php" method="POST">
					<div class="form-group">
						<label for="nombreUsuario">Usuario del sistema</label>
    					<input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" placeholder="Usuario" required>
    				</div>
    				<div class="form-group">
						<label for="contrasena">Contraseña de usuario</label>
    					<input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña" required>
					</div>
					<button type="submit" class="btn btn-primary" style="margin-bottom: 10px">Login</button>
				</form>
				<?php
					session_start();
					$mensaje = $_SESSION['mensaje'];
					echo "$login";
					if (isset($mensaje)){
						echo "<p class='text-danger'>$mensaje</p>";		
					}
					session_unset();
				?>
			</div>
		</div>
	</div>
</body>