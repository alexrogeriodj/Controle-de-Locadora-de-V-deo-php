<?php
  $dsn = "mysql:dbname=videolocadora;host=localhost";//data server name
  $dbuser = "root";//nome do usuario
  $dbpass = "";//senha do banco

  try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
  } catch (PDOException $e) {
      echo "Falha de conexão ao BD: ".$e->getMessage();
  }

 ?>
