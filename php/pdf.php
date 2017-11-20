<?php
require('../lib/fpdf/fpdf.php');
date_default_timezone_set("America/Bogota");

$servername = "localhost";
$username = "root";
$password = "12345678";
$dbName = "bdunad41";

$pdf = new FPDF('L','mm','Letter');
$pdf->AddPage();
$pdf->SetMargins(20, 25, 30);
$pdf->SetFont('Arial','B',16);
$pdf->Image('../img/logo.png',20,10,-140);
$pdf->Ln(25);
$pdf->Cell(90,20,'Fecha: '.date('d/m/Y - H:i:s').'',0);
$pdf->Ln(10);
$pdf->Cell(100,20,utf8_decode('INFORME: USUARIOS REGISTRADOS EN EL SISTEMA'));
$pdf->Ln(10);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,20,'NOMBRE');
$pdf->Cell(25,20,'APELLIDO');
$pdf->Cell(25,20,'REGISTRO');
$pdf->Cell(25,20,'CEDULA');
$pdf->Cell(25,20,'TELEFONO');
$pdf->Cell(40,20,'EMAIL');
$pdf->Cell(40,20,'DIRECCION');
$pdf->Cell(25,20,'ESPECIALIDAD');
$pdf->Cell(25,20,'HOSPITAL');

$pdf->Ln(10);

$pdf->SetFont('Arial','',8);

$conn = mysqli_connect($servername, $username, $password, $dbName);
// Check connection
if (!$conn) {
    die("Conexion falldia");
}

$sql = "SELECT nombre, apellido, registro, cedula, telefono, email, direccion, especialidad, hospital from tabla41";

$result = $conn->query($sql);

if($result->num_rows > 0){
	while ($row = $result->fetch_assoc()) {
		$pdf->Cell(20,20, utf8_decode($row['nombre']), 0);
		$pdf->Cell(25,20, utf8_decode($row['apellido']), 0);
		$pdf->Cell(25,20, utf8_decode($row['registro']), 0);
		$pdf->Cell(25,20, utf8_decode($row['cedula']), 0);
		$pdf->Cell(25,20, utf8_decode($row['telefono']), 0);
		$pdf->Cell(40,20, utf8_decode($row['email']), 0);
		$pdf->Cell(40,20, utf8_decode($row['direccion']), 0);
		$pdf->Cell(25,20, utf8_decode($row['especialidad']), 0);
		$pdf->Cell(25,20, utf8_decode($row['hospital']), 0);

		$pdf->Ln(10);
	}
}

$pdf->Output();
?>