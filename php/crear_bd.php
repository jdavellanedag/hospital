<?php
if (isset($_COOKIE['idSesion'])) {
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbName = "bdunad41";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
	die("Conexion fallida: " . mysqli_conect_error());
}

$sql = "CREATE DATABASE " . $dbName;
if (mysqli_query($conn, $sql)) {
	echo "Base de datos creada correctamente";
} else {
	echo "Error creando base de datos: ";
    $error = mysqli_error($conn);
    if (strpos($error, "exists")) {
    	echo "La base de datos ya existe";
    }
}

mysqli_close($conn);
}
?>
<div>
	<a href="../pages/bd.php">Volver</a>
</div>