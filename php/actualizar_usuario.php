<?php
	
	require_once "../private/conect.php";

	$nombreUsuario = $_POST['nombreUsuario'];
	$estado = $_POST['estado'];

	if($estado){
		$estado = 1;
	} else {
		$estado = 0;
	}
	$sql = "UPDATE usuarios SET estado_usuario = :estado WHERE nombre_usuario = :nombreUsuario";
	$update = $conect->prepare($sql);
	$update->bindValue('nombreUsuario', $nombreUsuario);
	$update->bindValue('estado', $estado);

	$update->execute();	

	$conect=null;
?>
<div>
	<p>Operación realizada</p>
	<a href="../pages/admin.php">Volver</a>
</div>