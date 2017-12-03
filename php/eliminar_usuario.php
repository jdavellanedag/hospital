<?php
	
	require_once "../private/conect.php";

	$nombreUsuario = $_POST['nombreUsuario'];

	if($estado){
		$estado = 1;
	} else {
		$estado = 0;
	}
	$sql = "DELETE from usuarios WHERE nombre_usuario = :nombreUsuario";
	$update = $conect->prepare($sql);
	$update->bindValue('nombreUsuario', $nombreUsuario);

	$update->execute();	


	$conect=null;
?>
<div>
	<p>Operación realizada</p>
	<a href="../pages/admin.php">Volver</a>
</div>