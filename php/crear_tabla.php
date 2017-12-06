<?php

$servername = "localhost";
$username = "root";
$password = "12345678";
$dbName = "bdunad41";
$tableName = "tabla41";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
	die("Conexion fallida: " . mysqli_conect_error());
}

$sql = "USE ". $dbName;
if (mysqli_query($conn, $sql)) {
	$sqlTable = "CREATE TABLE " . $tableName . "(
	id INT(6) PRIMARY KEY AUTO_INCREMENT,
	nombre VARCHAR(30) NOT NULL,
	apellido VARCHAR(30) NOT NULL,
	registro VARCHAR(30) NOT NULL,
	cedula VARCHAR(30) NOT NULL,
	telefono VARCHAR(30) NOT NULL,
	email VARCHAR(30) NOT NULL,
	direccion VARCHAR(60) NOT NULL,
	especialidad VARCHAR(30) NOT NULL,
	hospital VARCHAR(30) NOT NULL
	)";

	if (mysqli_query($conn, $sqlTable)) {
	    echo "Tabla creada correctamente";
	} else {
	    echo "Error creando tabla";
	}
} else {
    echo "Error creando tabla: ";
    $error = mysqli_error($conn);
    if (strpos($error, "nknown")) {
    	echo "La base de datos ". $dbName . " no ha sido creada";
    }
}
mysqli_close($conn);

?>
<div>
	<a href="../pages/bd.php">Volver</a>
</div>