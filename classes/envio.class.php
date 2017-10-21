<?php
 
include_once '../conexao/conexao.php';

class Envio{

 
 private $Tipo;
 private $campo;
 

 function __construct($Tipo, $campo ){
   $this->tipo = $Tipo;
   $this->Ocampo= $campo;


 }

 public function cadastrar(){
    $sql = "insert into reclamacao(Tipo, campo)values(':Tipo ',':campo')";
      $array = array(':Tipo',':campo');
      $array2 = array($this->Tipo, $this->campo);
      $sql = str_replace($array, $array2, $sql);

      $conexao = new Conexao();
      $conexao->query($sql);
}

}