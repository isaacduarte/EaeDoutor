<?php
session_start();
$login = $_POST['usuario'];
$senha = $_POST['senha'];
include_once("../conexao/conexao.php");

$result = mysqli_query("SELECT * FROM Advogado WHERE Login='$login' AND Senha='$senha' LIMIT 1");
$resultado = mysql_fetch_assoc($result);
//echo "Usuario: ".$resultado['nome'];
if(empty($resultado)){
	//Mensagem de Erro
	$_SESSION['loginErro'] = "Usuário ou senha Inválido";
	
	//Manda o usuario para a tela de login
	header("Location: login.php");
}else{
	//Define os valores atribuidos na sessao do usuario
		$_SESSION['IdAdvogado'] 		= $resultado['ID_Advogado'];
		$_SESSION['Login'] 				= $resultado['Login'];
		$_SESSION['OAB'] 				= $resultado['OAB'];
		$_SESSION['Nome'] 				= $resultado['Nome'];
			
	
	if($_SESSION['OAB'] == 000000){
		header("Location: administrativo.php");
	}else{
		header("Location: usuario.php");
	}
}
?>