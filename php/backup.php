<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbName = "bdunad41";

date_default_timezone_set("America/Bogota");

$backupFile = '"../backup/'.$dbName."-".date("Y-m-d-H-i-s").'.sql"';

system("C:\AppServ\MySQL\bin\mysqldump.exe --no-defaults -h$servername -u$username -p$password $dbName > $backupFile");

?>
<div>
	<h1>Copia de seguridad realizada</h1>
	<a href="../pages/admin.html">Volver</a>
</div>