<!Doctype html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<form action= "../controle/controleenvio.php" method="post">
		o que você deseja?
		
<select>
		<OPTION name="Tipo" valve ="Reclamações"> Reclamações  </OPTION>
		<OPTION name="Tipo"valve ="Reportar Erro"> Reportar Erro  </OPTION>
		<OPTION name="Tipo"valve ="Sujestões"> Sujestões  </OPTION>
	
	</select>
	<br>
	<textarea name="campo"></textarea>
	<input type= "submit" name= "button" valve= "enviar"> 
</form>
</body>
</html>

