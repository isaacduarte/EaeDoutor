 <?php
 include_once '../classes/advogado.class.php';

 Advogado::logar($_POST['Login'], md5($_POST['Senha']));
 echo "<script>window.location='../paginas/sistema.php'</script>";
 ?>