<?php

include("../classe/conexao.php");

$consulta = "SELECT * FROM cliente WHEN $ID_Advogado='ID_Advogado' LIMIT 4";

?>
<html>	
		<meta charset="utf8"/>
    <head>
 	<body>
	<tr>
		<td>Nome</td>
		<td>Telefone</td>
		<td>Processo</td>
		<td>CPF</td>
		<td>Anotação</td>
	</tr>
<?php while($dado = $con->feth_arrey?>
	<tr>
		<tb><?php echo $dado["Nome"]; ?></td>
		<tb><?php echo $dado["Telefone"]; ?></td>
		<tb><?php echo $dado["CPF"]; ?></td>
		<tb><?php echo $dado["Anotacao"]; ?></td>
	</tr>
	<?php } ?> 
	</body>
 </html>