<?php

include_once '../classes/cliente.class.php';

$CadastroCliente = new Cliente($_POST['cpf'],
                                $_POST['nomedocliente'],
                               $_POST['anotacao'],
                               $_POST['telefone'],
                               $_POST['ID_Advogado']
                               );
                          

$CadastroCliente->Cadastrar();

 ?>