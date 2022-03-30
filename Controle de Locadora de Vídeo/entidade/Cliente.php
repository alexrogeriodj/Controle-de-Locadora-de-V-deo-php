<?php
require_once("../persistencia/BD.php");

class Cliente {
  private $cpf;
  private $nome;
  private $endereço;
  private $telefone;

  public function Cliente($cpf, $nome, $endereço, $telefone){

    $this->cpf = $cpf;
    $this->nome = $nome;
    $this->endereço = $endereço;
    $this->telefone = $telefone;
  }

  public function removerCliente($cpf){
    $sql="DELETE FROM cliente WHERE cpf = ?";
    try {
      $sql = $pdo->prepare($sql);
      $sql->bindParam(1, $cpf);
      $sql->execute();
      return "REMOVIDO";
    } catch (PDOException $e) {
        echo "Erro na remoção: ".$e->getMessage();
        return "ERRO";
      }
    }

  public function consultarCliente($cpf){
    $sql = "SELECT nome, endereço, telefone FROM cliente Where cpf = ?"
    try {
      $sql = $pdo->prepare($sql);
      $sql->bindParam(1, $cpf);
      $sql->execute();
      $sql = $sql->fetchAll();

      return $cliente1 = new CLiente($sql[0][0], $sql[0][1], $sql[0][2], $sql[0][3]);
    } catch (PDOException $e) {
      echo "Erro".$e->getMessage();
      return "ERRO";
    }

  }
  public function inserirCliente($cliente){
  $sql = "INSERT INTO cliente (cpf, nome, endereço, telefone) VALUES (?, ?, ?, ?)";
  try {
    $sql = $pdo->prepare($sql);
    $sql->bindParam(1, $cliente->getCpf);
    $sql->bindParam(2, $cliente->getNome);
    $sql->bindParam(3, $cliente->getEndereço);
    $sql->bindParam(4, $cliente->getTelefone);
    $sql->execute();
    return "INSERIDO";
  } catch (PDOException $e) {
    echo "Erro na inserção".$e->getMessage();
    return "ERRO";
  }

}
  public function alterarCliente(){}
    $sql = "UPDATE cliente SET nome = ?, endereço = ?, telefone = ?, WHERE cpf = ?";
    try {
      $sql = $pdo->prepare($sql);
      $sql->bindParam(1, $cliente->getCpf);
      $sql->bindParam(2, $cliente->getNome);
      $sql->bindParam(3, $cliente->getEndereço);
      $sql->bindParam(4, $cliente->getTelefone);
      $sql->execute();
      return "ALTERADO";
    } catch (PDOException $e) {
        echo "Erro na inserção".$e->getMessage();
        return "ERRO";
      }

  public function getCpf(){
    return $cpf;
  }
  public function setCpf($cpf){
    $this->cpf = $cpf;
  }
  public function getNome(){
    return $nome;
  }
  public function setNome($nome){
    $this->nome = $nome;
  }
  public function getEndereco(){
    return $endereço;
  }
  public function setEndereço($endereço){
    $this->endereço = $endereço;
  }
  public function getTelefone(){
    return $telefone;
  }
  public function setTelefone($telefone){
    $this->telefone = $telefone;
  }
}
?>
