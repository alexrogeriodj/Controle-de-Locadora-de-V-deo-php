<?php
class Conta{
  public $numConta;
  protected $tipo;
  private $dono;
  private $saldo;
  private $status;


  function abrirConta($tipo){
    setTipo($tipo);
    setStatus(true);
    if($tipo=="cc"){
      setSaldo(50);
    }elseif($tipo=="cp"){
      setSaldo(150);
    }
  }
  function fecharConta(){
    if($saldo > 0){
      echo "CONTA COM DINHEIRO";
    }elseif($saldo < 0){
      echo "CONTA EM DÉBITO";
    }else{
      setStatus(false);
    }
  }
  function depositar(){
    if (getStatus()) {
      setSaldo(getSaldo() + v);
    }else{
      echo "IMPOSSIVEL DEPOSITAR";
    }
  }
  //function sacar(){}
  //function pagarMensal(){}

    public function Conta($numConta, $tipo, $dono, $saldo, $status){
      $this->numConta = $numConta;
      $this->tipo = $tipo;
      $this->dono = $dono;
      $this->saldo = $saldo;
      $this->status = $status;
    }

  function getNumConta(){
    return $numConta;
  }
  function setNumConta($numConta){
    $this->numConta = $numConta;
  }

  function getTipo(){
    return $tipo;
  }
  function setTipo($tipo){
    $this->tipo = $tipo;
  }

  function getDono(){
    return $dono;
  }
  function setDono($dono){
    $this->dono = $dono;
  }

  function getSaldo(){
    return $saldo;
  }
  function setSaldo($saldo){
    $this->saldo = $saldo;
  }

  function getStatus(){
    return $status;
  }
  function setStatus($status){
    $this->status = $status;
  }
}
 ?>
