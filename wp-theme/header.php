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

  <!-- NAVBAR -->
    <nav class="mainNav">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo">
                        <!-- <a href="#"><img src="images/logo-pmps.png" alt="" /></a> -->
                    </div>
                    <div class="social-banner">
                        <a href="#"><img class="img-responsive img-logo" src="<?= $home ?>/assets/images/logo-pmps.png" alt="" /></a>
                        <a href="#"><img class="img-responsive img-banner" src="<?= $home ?>/assets/images/mosquito_zero.jpg" alt="" /></a>
                    </div>
                    <nav>
                        <div class="header">
                            <select class="area-interesse" name="">
                            <option value="0">Áreas de Interesse</option>
                            <option value="1">Comunicação</option>
                            <option value="2">Criança e Adolescente</option>
                            <option value="3">Cultura</option>
                            <option value="4">Defesa Civil</option>
                            <option value="6">Educação</option>
                            <option value="7">Finanças e Tributos</option>
                            <option value="8">Gestão Pública</option>
                            <option value="9">Infraestrutura</option>
                          </select>
                          <select class="orgaos-municipais" name="">
                            <option value="0">ÓRGÃOS</option>
                          	<option style="background: #34558c; text-decoration:underline;">SECRETARIAS</option>
                          	<option value="1">&nbsp;&nbsp;&nbsp;&nbsp;SECOM - Comunicação</option>
                          	<option value="2">&nbsp;&nbsp;&nbsp;&nbsp;CASA CIVIL</option>
                          	<option value="30">&nbsp;&nbsp;&nbsp;&nbsp;DEFESA CIVIL</option>
                          </select>

                        <div class="float-right">
                          <ul class="white-menu nav nav-pills">
                            <li class="color1"><a href="#">TESTE</a></li>
                            <li class="color2"><a href="#">TESTE</a></li>
                            <li class="color3"><a href="#">TESTE</a></li>
                            <li class="color4"><a href="#">TESTE</a></li>
                            <li class="color5"><a href="#">TESTE</a></li>
                          </ul>
                        </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </nav>