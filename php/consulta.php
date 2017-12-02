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

$sql = "SELECT nombre, apellido, registro, especialidad from tabla41 where registro=$txtRegMedico";

$result = $conn->query($sql);

if($result->num_rows > 0){
	while ($row = $result->fetch_assoc()) {
		echo "Nombre: " . $row["nombre"] . "<br>";
		echo "Apellido: ". $row["apellido"] . "<br>";
		echo "Registro: ". $row["registro"] . "<br>";
		echo "Especialidad: ". $row["especialidad"] . "<br>";
	}
} else {
	echo "No se encontraron registros";
}

mysqli_close($conn);
}
?>
<div>
	<a href="../pages/consulta.php">Volver</a>
</div>