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
<?php  
	//Guarda los datos enviados por el formulario
	$numero1 = $_POST['numero1'];
	$numero2 = $_POST['numero2'];
	$operacion = $_POST['operacion'];
	//Inicia sesión para enviar los resultados de las validaciones
	session_start();
	if (!isset($numero1) || !isset($numero2) || !isset($operacion)) {
		$mensaje = "Por favor diligencie los datos correctamente";
	} else {
		switch ($operacion) {
			case "sumar":
				$mensaje = "El resultado de la suma es " . ($numero1 + $numero2); 
				break;
			case "restar":
				$mensaje = "El resultado de la resta es " . ($numero1 - $numero2);
				break;
			case "multiplicar":
				$mensaje = "El resultado de la multiplicacion es " . ($numero1 * $numero2);
				break;
			case "dividir":
				$mensaje = "El resultado de la divison es " . ($numero1 / $numero2);
				break;
		}
		if ($numero1 == $numero2) {
			$comparar = "Los números son iguales";
		} elseif ($numero1 > $numero2) {
			$comparar = "El número uno es mayor";
		} else {
			$comparar = "El número dos es mayor";
		}
	}
	//Guarda los resultados dentro de la sesión
	$_SESSION['mensaje'] = $mensaje;
	$_SESSION['comparar'] = $comparar;
	header("location: ../operacion.php");
?>