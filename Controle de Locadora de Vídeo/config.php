<?php
try{
	$dsn = "mysql:dbname=videolocadora;host=localhost";
	$dbpass = "";
	$dbuser = "root";
	$pdo = new PDO($dsn, $dbuser, $dbpass);
}catch(PDOException $e){
	echo "Erro ".$e->getMessage();
}
?>
