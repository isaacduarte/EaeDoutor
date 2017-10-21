<?php

include_once '../classes/envio.class.php';

$CadastroEnvio = new Envio($_POST['Tipo'],
                                $_POST['campo']
                                );
                          

$CadastroEnvio->Cadastrar();

 ?>