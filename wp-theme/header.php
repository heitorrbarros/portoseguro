<!DOCTYPE html>
<html lang="pt-br">

<head>
  	<?php $home = get_template_directory_uri(); ?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Prefeitura Municipal de Porto Seguro</title>

    <!-- Bootstrap -->
    <link href="<?= $home ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= $home ?>/style.css">

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php	wp_head(); ?>
</head>

<body>

        <!-- LOGO E PESQUISA -->
    <header>
        <div class="container">
            <div class="col-md-6 logo">
                <a href="#">
                  <img src="<?=$home?>/assets/images/logo_pme.png" class="img-responsive" alt="Logo Eunápolis" />
                </a>
            </div>
            <div class="col-md-6 pesquisar">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Digite sua busca">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button">Pesquisar</button>
                </span>
              </div>
            </div>
          </div>
    </header>

      <!-- MENU -->

      <nav class="navbar navbar-default">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <!-- <li class="active"><a href="#">DIÁRIO OFICIAL <span class="sr-only">(current)</span></a></li> -->
              <li><a href="#">DIÁRIO OFICIAL</a></li>
              <li><a href="#">CIDADÃO</a></li>
              <li><a href="#">EMPRESA</a></li>
              <li><a href="#">SERVIDOR</a></li>
              <li><a href="#">NOTÍCIAS</a></li>
              <li><a href="#">TRANSPARÊNCIA</a></li>
              <li><a href="#">SECRETARIAS</a></li>
              <li><a href="#">OUVIDORIA</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
