﻿<!DOCTYPE html>
<?php include_once '../classes/session.php'?>
<html lang="en">
  <head>
    <link rel="icon" href="../imagens/favicon.ico">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E aí Dr. <?php echo $usuario['Nome'] ?> ?</title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Área Administrativa</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="pages.html">Clientes</a></li>
            <li><a href="posts.html">Busca</a></li>
            <li><a href="users.html">Contato</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Bem vindo(a), <?php echo $usuario['Nome'] ?></a></li>
            <li><a href="../controle/controleLogoff.php">Sair</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon-home" aria-hidden="true"></span> Home <small>Visão Geral</small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" data-toggle="modal" data-target="#addPage">Add Page</a></li>
                <li><a href="#">Add Post</a></li>
                <li><a href="#">Add User</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Visão Geral da Conta</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.html" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Atualizações processuais
              </a>
              <a href="pages.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Hoje <span class="badge">12</span></a>
              <a href="posts.html" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Semana <span class="badge">33</span></a>
              <a href="users.html" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Mês <span class="badge">203</span></a>
            </div>

            <div class="well">
              <h4>Criminal</h4>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                      30%
              </div>
            </div>
            <h4>Danos Morais</h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                    40%
            </div>
          </div>
            </div>
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Informações Gerais da Conta</h3>
              </div>
              <div class="panel-body">
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 203</h2>
                    <h4>Clientes</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>302</h2>
                    <h4>Processos</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>5 Meses</h2>
                    <h4>No sistema</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 1,334</h2>
                    <h4>Atualizações</h4>
                  </div>
                </div>
              </div>
              </div>

              <!-- Latest Users -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Últimos Clientes Atualizados</h3>
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover">
                      <tr>
                        <th>Name</th>
                        <th>Nº do Processo</th>
                        <th>Data</th>
                      </tr>
                      <tr>
                        <td>Jill Smith</td>
                        <td>002110202216621674</td>
                        <td>Dec 12, 2016</td>
                      </tr>
                      <tr>
                        <td>Eve Jackson</td>
                        <td>002110202216621674</td>
                        <td>Dec 13, 2016</td>
                      </tr>
                      <tr>
                        <td>John Doe</td>
                        <td>002110202216621674</td>
                        <td>Dec 13, 2016</td>
                      </tr>
                      <tr>
                        <td>Stephanie Landon</td>
                        <td>002110202216621674</td>
                        <td>Dec 14, 2016</td>
                      </tr>
                      <tr>
                        <td>Mike Johnson</td>
                        <td>002110202216621674</td>
                        <td>Dec 15, 2016</td>
                      </tr>
                    </table>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright Zimos TI, &copy; 2017</p>
    </footer>

    <!-- Modals -->

    <!-- Add Page -->
   

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>