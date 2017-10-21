<?php

include_once '../classes/advogado.class.php';

	$diretorio="../upload/";
	$arquivo = $_FILES['img']['name'];
   $nome_final= time().'.jpg';
	move_uploaded_file($_FILES['img']['tmp_name'], $diretorio.$nome_final);
	

   	 $Nome = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_SPECIAL_CHARS);
   	 $OAB = filter_input(INPUT_POST, 'OAB', FILTER_SANITIZE_SPECIAL_CHARS);
   	 $Login = filter_input(INPUT_POST, 'Login', FILTER_SANITIZE_SPECIAL_CHARS);
   	 $Senha = filter_input(INPUT_POST, 'Senha', FILTER_SANITIZE_SPECIAL_CHARS);
   	 $img = $nome_final;

   	 $advogado = new Advogado($Nome, $OAB, $Login, md5($Senha), $img);
   	 $advogado->Cadastrar();
   	     echo "<script>window.location='../paginas/login.php'</script>";      
   	

 ?>
   	   