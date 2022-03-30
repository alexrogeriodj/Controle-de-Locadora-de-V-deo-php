<?php
require_once("../persistencia/BD.php");

if(isset($_POST['CPF']) && empty($_POST['CPF']) == false){
  $cpf = addslashes($_POST['CPF']);

  $sql = ("SELECT * FROM clliente WHERE cpf = ?");
  $sql = $pdo->prepare($sql);
  $sql->bindValue(1, $cpf);
  $sql->execute();

  if($sql->rowCount() > 0){
    $sql = $sql->fetchAll();
    echo "<pre>";
    print_r($sql);
    echo "</pre>";
  }
}else{
  echo "<h2>Algum campo nao foi preenchido</h2>";
}
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Video Locadora</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="JanelaCadastroCliente.css">
</head>
<body>
  <!-- As a link -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../index.php">Video-Locadora</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cliente
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Cadastrar</a>
        </div>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Filme
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="CadastrarFilme.php">Cadastrar</a>
          <a class="dropdown-item" href="#">Reservar</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
  <pre>
    <div class="container">
    <form class="JanelaCadastroCliente" method="POST">
      <p id="cliente">CLIENTES CADASTRADOS<select id="sele" name="visão">
        <option value="-"></option>
      </select>
      </p>
    <p id="CPF">CPF:</p>
    <input id="cpf" type="text" name="CPF" placeholder="CPF do cliente" class="form-control" required>

    <p id="nome">NOME:</p>
    <input id="cpf" type="text" name="nome" placeholder="Nome do cliente" class="form-control" required>

    <p id="nome">ENDEREÇO:</p>
    <input id="cpf" type="text" name="endereco" placeholder="Endereço do cliente" class="form-control" required>

    <p id="nome">TELEFONE:</p>
    <input id="cpf" type="text" name="telefone" placeholder="Telefone do cliente" class="form-control" required><br><br>
  </div>
</pre>
<div id="botoes" class="btn btn-group">
        <input type="button" value="inserir" class="btn btn-outline-success" style="cursor: pointer;">
        <input type="button" value="consultar" class="btn btn-outline-info" style="cursor: pointer;">
        <input type="button" value="alterar" class="btn btn-outline-primary" style="cursor: pointer;">
        <input type="button" value="remover" class="btn btn-outline-danger" style="cursor: pointer;">
        <input type="reset" value="limpar" class="btn btn-outline-warning" style="cursor: pointer;">
      </div>
      </form>

  </body>
</html>
