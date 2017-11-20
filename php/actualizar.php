<?php
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

if (!$conn) {
	die("Conexion fallida: " . mysqli_conect_error());
}

$sqlVerificar = "SELECT * from tabla41 where cedula='$idCedula'";
$result = $conn->query($sqlVerificar);
if($result->num_rows > 0){

	$sql = "UPDATE tabla41 SET nombre =  '$txtNombre', apellido = '$txtApellido', registro = '$txtRegMedico', telefono = '$txtTelefono', email = '$txtCorreo', direccion = '$txtDireccion', especialidad = '$txtEspecialidad', hospital = '$txtHostpital' WHERE cedula='$idCedula'";

	if (mysqli_query($conn, $sql)) {
	    echo "Información actualizada satisfactoriamente";
	} else {
	    echo "Error actualizando la información: ";
	}
} else {
	echo "No existe el registro";
}
mysqli_close($conn);

?>
<div>
	<a href="../pages/actualizar.html">Volver</a>
</div>