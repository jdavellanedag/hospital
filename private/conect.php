<?php
try {
	$conect = new PDO('mysql:host=localhost;dbname=bdunad41', 'root', '12345678');
}catch (PDOException $exception) {
	echo "ERROR";
	die();
}
?>