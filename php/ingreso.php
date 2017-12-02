<?php
	if (isset($_COOKIE['idSesion'])) {
	$servername = "localhost";
	$username = "root";
	$password = "12345678";
	$dbName = "bdunad41";

	$txtNombre = $_POST['txtNombre'];
	$txtApellido = $_POST['txtApellido'];
	$txtRegMedico = $_POST['txtRegMedico'];
	$idCedula = $_POST['idCedula'];
	$txtTelefono = $_POST['txtTelefono'];
	$txtCorreo = $_POST['txtCorreo'];
	$txtDireccion = $_POST['txtDireccion'];
	$txtEspecialidad = $_POST['txtEspecialidad'];
	$txtHostpital = $_POST['txtHostpital'];

	$conn = mysqli_connect($servername, $username, $password, $dbName);

	if(!$conn){
		die("Conexion fallida");
	}

	$sql = "INSERT INTO tabla41 (nombre, apellido, registro, cedula, telefono, email, direccion, especialidad, hospital) VALUES ('$txtNombre', '$txtApellido', '$txtRegMedico', '$idCedula', '$txtTelefono', '$txtCorreo', '$txtDireccion', '$txtEspecialidad', '$txtHostpital')";

	if (mysqli_query($conn, $sql)) {
		echo "Datos insertados correctamente";
	} else {
		echo "Error insertando datos" . mysqli_error($conn);
	}

	mysqli_close($conn);
}
?>
<div>
	<a href="../pages/ingreso.php">Volver</a>
</div>