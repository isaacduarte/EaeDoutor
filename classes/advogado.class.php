<?php
 
include_once '../conexao/conexao.php';
if(!isset($_SESSION)){
    session_start();

  }
class Advogado{

 
 private $Nome;
 private $OAB;
 private $Login;
 private $Senha;
 private $img; 

 function __construct($Nome, $OAB, $Login, $Senha, $img){
   $this->Nome = $Nome;
   $this->OAB = $OAB;
   $this->Login = $Login;
   $this->Senha = $Senha;
   $this->img = $img;
 }

 public function cadastrar(){
    $sql = "insert into advogado(Nome, OAB, Login, Senha, img)values(':Nome ',':OAB',':Login',':Senha',':img')";
      $array = array(':Nome',':OAB',':Login',':Senha',':img');
      $array2 = array($this->Nome, $this->OAB, $this->Login, $this->Senha, $this->img);
      $sql = str_replace($array, $array2, $sql);

      $conexao = new Conexao();
      $conexao->query($sql);
      echo "<script>alert('Advogado Cadstrado com sucesso')</script>";
}
 public static function getAdvogadoPorID($id){
            $sql = "select * from advogado where ID_Advogado=':id'";

            $sql = str_replace(':id', $id, $sql);

            $conexao = new Conexao();
            $advogado = $conexao->query($sql)->fetch_array();

            return $advogado;

      }
   public static function logar($Login, $Senha){
            $sql = "select * from advogado where Login=':Login' and Senha=':Senha' limit 1";
            $array1 = array(':Login',':Senha');
            $array2 = array($Login, $Senha);
            $sql = str_replace($array1, $array2, $sql);

            $resultados = new Conexao();
            $resultados = $resultados->query($sql);

            if(mysqli_num_rows($resultados)==1){
              $usuario = $resultados->fetch_array();
              $_SESSION['id'] = $usuario['ID_Advogado'];
            }else{
                  echo "<script>alert('Login ou senha incorretos')</script>";
            }
      }
      public static function verificarPermissao(){
        if(!isset($_SESSION['id'])){
           header('Location: ../paginas/login.php');
            exit();
        }
      }

      public static function fazerLogoff(){
        if(isset($_SESSION)){
            session_destroy();
            header('Location: ../paginas/login.php');
        }
      }
}