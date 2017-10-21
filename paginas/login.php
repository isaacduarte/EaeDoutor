<?php
if(!isset($_SESSION)){
    session_start();
  }

  if(isset($_SESSION['id'])){
    header('Location:sistema.php');    

    echo "<script>alert('Login ou senha incorretos')</script>";
  }

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página para realizar login">
    <meta name="author" content="Zimos TI">
    <link rel="icon" href="../imagens/favicon.ico">

    <title>E aí Doutor!? // Login</title>
    <link href="../css/bootstrap.min.pers.css" rel="stylesheet">
    <link href="../css/indpers.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>
    <div class="container">		
      <form class="form-signin" method="POST" action="../controle/controleLogin.php">
		<center><img src="../imagens/eai.png" width="300">
        <h2 class="form-signin-heading text-center">Login</h2>
        <label for="inputADV" class="sr-only">Usuário</label>
		
        <input type="text" name="Login" class="form-control" placeholder="Digite o seu Login" required autofocus><br />
		
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="Senha" class="form-control" placeholder="Digite a Senha" required >
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
      </form>
		
    </div> <div class="div_flutuante"><img class="text-center" src="../imagens/ZimosTI100.png" ></div>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>