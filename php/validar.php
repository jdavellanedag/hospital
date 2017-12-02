<?php
	
	require_once "../private/conect.php";

	$nombreUsuario = $_POST['nombreUsuario'];
	$contrasena = $_POST['contrasena'];



	$buscar = ('SELECT * FROM usuarios WHERE nombre_usuario = :nombreUsuario');
	$query=$conect->prepare($buscar);
	$query-> execute(array(':nombreUsuario' => $nombreUsuario ));
	$contador=$query->rowCount();
	if ($contador == 1) {
		$datosuser=$query->fetch();
		$pass = md5($contrasena);
		if($datosuser['contrasena_usuario']==$pass && $datosuser['estado_usuario']==1){
			$login=TRUE;
			$conect=null;
			}
			else {
   			$login=FALSE;
    		$salida="No se puede iniciar sesion con el usuario";
		}
	}
	else {
	    $login=FALSE;
	    $salida="Usuario no encontrado";
 	}
 	$conect=null;
 	if ($login) {
		setcookie("idSesion", $nombreUsuario, time() + 600, "/");
		header("location: ../index.php");
 	} else {
	 	session_start();
 		$_SESSION['mensaje'] = $salida;
 		header("location: ../login.php");
 	}
?>