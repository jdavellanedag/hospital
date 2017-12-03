<?php 
	require_once "../private/conect.php";

	$nombreUsuario = $_POST['nombreUsuario'];
	$contrasena = md5($_POST['contrasena']);
	$estado = $_POST['estado'];

	if($estado){
		$estado = 1;
	} else {
		$estado = 0;
	}

	$insertar = $conect->prepare("INSERT INTO usuarios (nombre_usuario, contrasena_usuario, estado_usuario) VALUES (?,?,?)");
	$insertar->bindParam(1, $nombreUsuario);
	$insertar->bindParam(2, $contrasena);
	$insertar->bindParam(3, $estado);

	$insertar->execute();

	$conect=null;
?>
<div>
	<p>Operación realizada</p>
	<a href="../pages/admin.php">Volver</a>
</div>