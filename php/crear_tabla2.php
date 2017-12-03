<?php
if (isset($_COOKIE['idSesion'])) {
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbName = "bdunad41";
$tableName = "usuarios";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
	die("Conexion fallida: " . mysqli_conect_error());
}

$sql = "USE ". $dbName;
if (mysqli_query($conn, $sql)) {
	$sqlTable = "CREATE TABLE " . $tableName . "(
	usuario_id int(6) NOT NULL AUTO_INCREMENT,
	nombre_usuario varchar(32) NOT NULL,
	contrasena_usuario varchar(128) NOT NULL,
	estado_usuario tinyint(1) NOT NULL,
	PRIMARY KEY (usuario_id),
	UNIQUE KEY nombre_usuario (nombre_usuario)
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
}
?>
<div>
	<a href="../pages/bd.php">Volver</a>
</div>