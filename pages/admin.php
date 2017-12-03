<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hospital - Gestor Hojas de Vida</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 	<link rel="stylesheet" href="../css/estilos.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>
<?php
if (isset($_COOKIE['idSesion'])) {
?>	
	<nav class="navbar navbar-expand-lg  navbar-dark bg-dark text-white">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php">GESTOR HOJAS DE VIDA</a>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<li class="nav-item"><a class="nav-link" href="../index.php">Inicio</a></li>
					<li class="nav-item active"><a class="nav-link" href="admin.php">Admin</a></li>
					<li class="nav-item"><a class="nav-link" href="ingreso.php">Ingreso hojas de vida</a></li>
					<li class="nav-item"><a class="nav-link" href="consulta.php">Consulta hojas de vida</a></li>
					<li class="nav-item"><a class="nav-link" href="actualizar.php">Actualización hojas de vida</a></li>
					<li class="nav-item"><a class="nav-link" href="reporte.php">Reportes especiales</a></li>
					<li class="nav-item"><a class="nav-link" href="operacion.php">Operaciones matemáticas</a></li>
					<li class="nav-item"><a class="nav-link" href="bd.php">Manejo base de datos</a></li>
				</div>
			</div>
		</div>		
	</nav>
	<main>
		<div class="container">
			<h3>Consultar registro medico</h3>
			<p>Elimine el registro seleccionado</p>
			<form action="../php/eliminar.php" method="POST">
				<div class="form-group">
					<label for="txtRegMedico">Registro médico</label>
					<input type="text" class="form-control" id="txtRegMedico" name="txtRegMedico" required>
				</div>
				<button type="submit" class="btn btn-default">Eliminar</button>
				<button type="reset" class="btn btn-default">Limpiar</button>
			</form>
			<h3>Backup</h3>
			<p>Genere el backup de la base de datos</p>
			<form action="../php/backup.php" method="POST">
				<button type="submit" class="btn btn-default">Generar Backup</button>
			</form>
		</div>
		<div class="container" style="margin-top: 10px;">
			<div class="card">
				<div class="card-header text-center bg-secondary text-white">
				USUARIOS
				</div>
				<div class="card-body text-white bg-dark">
					<h4 class="card-title">Administración de usuarios</h4>
					<p class="card-text"></p>
					<form action="../php/crear_usuario.php" method="POST" class="form-row align-items-center">
						<div class="col-sm-3">
							<label for="nombreUsuario" class="sr-only">Nombre de usuario</label>
							<input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" placeholder="Nombre de Usuario" required>
						</div>
						<div class="col-sm-3">
							<label for="contrasena" class="sr-only">Contraseña</label>
							<input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña" required>
						</div>
						<div class="col-auto">
							<div class="form-check mb-2 mb-sm-0">
								<label class="form-check-label">
								<input class="form-check-input" type="checkbox" id="estado" name="estado">Estado
								</label>
							</div>
						</div>
						<div class="col-auto">
							<button type="submit" class="btn btn-primary">Crear</button>
						</div>
					</form>
					<form action="../php/actualizar_usuario.php" method="POST" class="form-row align-items-center">
						<div class="col-sm-3">
							<label for="nombreUsuario" class="sr-only">Nombre de usuario</label>
							<input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" placeholder="Nombre de Usuario" required>
						</div>
						<div class="col-auto">
							<div class="form-check mb-2 mb-sm-0">
								<label class="form-check-label">
								<input class="form-check-input" type="checkbox" id="estado" name="estado">Estado
								</label>
							</div>
						</div>
						<div class="col-auto">
							<button type="submit" class="btn btn-primary bg-info text-white">Actualizar</button>
						</div>
					</form>
					<form action="../php/eliminar_usuario.php" method="POST" class="form-row align-items-center">
						<div class="col-sm-3">
							<label for="nombreUsuario" class="sr-only">Nombre de usuario</label>
							<input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" placeholder="Nombre de Usuario" required>
						</div>
						<div class="col-auto">
							<button type="submit" class="btn btn-primary bg-danger text-white">Eliminar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</main>
	<footer class="footer">
		<div class="container">
			<span class="text-muted">UNAD - Programación de sitios web</span>
		</div>	
	</footer>
<?php } else { ?>
	<div class="container">
		<div class="card">
			<div class="card-header text-center bg-danger text-white">
				ERROR
			</div>
			<div class="card-body text-white bg-dark">
				<h4 class="card-title">Acceso denegado</h4>
				<p class="card-text">No has iniciado sesión en el sistema</p>
				<a href="../login.php" class="btn btn-primary">Ir a inicio</a>
			</div>
			</div>
	</div>
<?php }	?>
</body>
</html>