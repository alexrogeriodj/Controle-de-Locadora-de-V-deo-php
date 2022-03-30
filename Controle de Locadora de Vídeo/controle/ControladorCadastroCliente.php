<?php
require_once("../entidade/CLiente.php");
  /**
   *
   */
  class ControladorCadastroCliente
  {
    public inserirClienteControle($cliente) {
       $cliente1 = consultarCliente($cliente->getCpf()); // Se não tiver o cliente na tabela, cliente1 retorna null
       if ($cliente1 != "ERRO") {
           return inserirCliente($cliente); // Se o cliente não existir, então ele é inserido
       } else {
           return "CPF do Cliente já cadastrado";
       }
   }

   public alterarClienteControle($cliente) {
       $cliente1 = consultarCliente($cliente->getCPF()); // Se não tiver o cliente na tabela, cliente1 retorna null
       if ($cliente1 != "ERRO") {
           return alteraCliente($cliente);
       } else {
           return "CPF de cliente não cadastrado";
       }
   }

   public String removerClienteControle($cpf) {
       $cliente1 = buscarCliente($cpf);
       if ($cliente != "ERRO") {
           return removerCliente($cpf);
       } else {
           return "CPF de Cliente não cadastrado";
       }
  }


 ?>
