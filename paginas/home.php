
<?php 

 include_once '../classes/advogado.class.php';


  if(!isset($_SESSION)){
      session_start();
 }

 Advogado::verificarPermissao();

 $usuario = Advogado::getAdvogadoPorID($_SESSION['id']);
 ?>

 <html>
 <head>
 	
 	<title></title>

    <script type="text/javascript">
     window.addEventListener('load', function(){
        var botoes_logoff = document.querySelectorAll('.botao-logoff');

     for(var i = 0; i < botoes_logoff.length; i++){
        botoes_logoff[i].addEventListener('click', function(evento){
          if(!confirm("Tem certeza que deseja sair?")){
            evento.preventDefault();
          }
        });
     }
     });
    </script>
 </head>
 <body>

 Olá senhor(a): <?php echo $usuario['Nome'] ?><br>
 Numero OAB: <?php echo $usuario['OAB'] ?><br>
 Login: <?php echo $usuario['Login'] ?><br>
  <?php echo '<img src="../upload/'.$usuario['img'].'">' ?><br>

 <button onClick="window.location='../controle/controleLogoff.php'"  type="submit" class="btn btn-success botao-logoff">Sair</button>

 </body>
 </html>
