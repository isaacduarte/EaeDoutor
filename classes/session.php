<?php 

 include_once '../classes/advogado.class.php';


  if(!isset($_SESSION)){
      session_start();
 }

 Advogado::verificarPermissao();

 $usuario = Advogado::getAdvogadoPorID($_SESSION['id']);
 ?>