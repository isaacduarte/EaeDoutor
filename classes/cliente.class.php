<?php
 
include_once '../conexao/conexao.php';

class Cliente{

 
 private $cpf;
 private $nomedocliente;
 private $anotacao;
 private $telefone;
 private $ID_Advogado;
 
 function __construct($cpf, $nomedocliente, $anotacao, $telefone, $ID_Advogado){
   $this->cpf = $cpf;
   $this->nomedocliente = $nomedocliente;
   $this->anotacao = $anotacao;
   $this->telefone = $telefone;
   $this->ID_Advogado = $ID_Advogado;
 }

 public function cadastrar(){
    $sql = "insert into cliente(cpf, nomedocliente, anotacao, telefone, ID_Advogado)values(
    					':cpf ',':nomedocliente',':anotacao', ':telefone', ':ID_Advogado')";
      $array = array(':cpf',':nomedocliente',':anotacao', ':telefone', ':ID_Advogado');
      $array2 = array($this->cpf, $this->$nomedocliente, $this->anotacao, $this->telefone, $this->ID_Advogado);
      $sql = str_replace($array, $array2, $sql);
      $conexao = new Conexao();
      $conexao->query($sql);
}

}