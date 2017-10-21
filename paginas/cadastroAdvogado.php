<?php 

    
 ?>

<!Doctype html>
<html>
<head>
	<link rel="icon" href="../imagens/favicon.ico">

    <title>E aí Doutor!? // Se cadastre.</title>
    <link href="../css/bootstrap.min.pers.css" rel="stylesheet">
    <link href="../css/indpers.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>

</head>
<body>
<form class="form-signin" action="../controle/controleFormularioAdvogado.php" method="post" enctype="multipart/form-data">
	
<div class="container">

 <!-- Fixed navbar -->
	
	<section class="row form-group">
	<h4>Preencha os campos abaixo para completar o cadastro</h4>
	
	
		
		<section class="row">
		<section class="col-md-4">

		<label> Nome</label>
		<input  type="text" name="Nome" placeholder="Digite seu nome completo" class="form-control" >
	    </section></section>

		<section class="row">
			<section class="col-md-2">
			<label> OAB</label>
			<input type="text" name="OAB" placeholder="Digite aqui a OAB" class="form-control" >
			</section>
			<section class="col-md-2">
			<label> Login</label>
		<input  type="text" name="Login" placeholder="Login desejado" class="form-control" >
			</section>
			
		</section>
		
		<section class="row">
			<section class="col-md-2">
			<label> Senha </label>
		<input type="password"name="Senha" placeholder="Digite a senha" class="form-control" ></input>
			</section>

			<section class="col-md-2">

		<label> Imagem </label>
		<input type="file" name="img" required>
				</section>
		</section>
				
		</section>
		
		<section class="row">
		<section class="col-md-1" >

		<button type="submit" class="btn btn-info "><i class="fa fa-check" aria-hidden="true"></i> Enviar</button>
		</section>
		<section class="col-md-1" >
		<button type="reset" class="btn btn-default "><i class="fa fa-check" aria-hidden="true"></i> Cancelar</button>
		
		</section>
		</section>
		
		
		</form>
	
	
</div>

<div class="div_flutuante"><img class="text-center" src="../imagens/ZimosTI100.png" ></div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</form>
</body>
</html>