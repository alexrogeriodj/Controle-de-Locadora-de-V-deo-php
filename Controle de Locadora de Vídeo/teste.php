<?php

require_once("persistencia/BD.php");
$cpf = "111.111.111-11";
$sql = "SELECT * FROM clliente WHERE cpf = ?";
try {

    $sql = $pdo->prepare($sql);
    $sql->bindValue(1, $cpf);
    $sql->execute();

    $sql = $sql->fetchAll();
    echo "<pre>";
    echo $sql[0][1];
    echo "</pre>";
    echo "Sucess";
} catch (PDOException $e) {
  echo "erro";
}

  ?>
