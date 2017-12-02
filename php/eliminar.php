<?php
if (isset($_COOKIE['idSesion'])) {
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbName = "bdunad41";

$txtRegMedico = $_POST['txtRegMedico'];

$conn = mysqli_connect($servername, $username, $password, $dbName);

if (!$conn) {
	die("Conexion fallida: " . mysqli_conect_error());
}

$sqlVerificar = "SELECT * from tabla41 where registro='$txtRegMedico'";
$result = $conn->query($sqlVerificar);
if($result->num_rows > 0){
	$sql = "DELETE FROM tabla41 WHERE registro='$txtRegMedico'";
	if (mysqli_query($conn, $sql)) {
	    echo "Registro eliminado";
	} else {
	    echo "Error eliminando registro";
	}
} else {
	echo "Registro no encontrado";
}

mysqli_close($conn);
}
?>
<div>
	<a href="../pages/admin.php">Volver</a>
</div>