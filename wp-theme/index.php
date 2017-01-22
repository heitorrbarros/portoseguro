    <?php get_header(); ?>
  	<?php $home = get_template_directory_uri(); ?>

                  <!-- PESQUISAR -->
                  <div class="container">
                    <div class="row">
                        <div class="buscar pull-right">
                            <div class="search">
                                <form class="" action="index.html" method="post">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Pesquisar no Portal...">
                                        <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Pesquisar</button>
                                    </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                  </div> <!-- PESQUISAR -->

                  <!-- NOTICIAS -->
                  <div class="noticias">
                  <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="<?=$home?>/assets/images/carousel1.jpg" alt="...">
                                        <div class="carousel-caption">
                                            ...
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="<?=$home?>/assets/images/carousel2.jpg" alt="...">
                                        <div class="carousel-caption">
                                            ...
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="<?=$home?>/assets/images/carousel3.jpg" alt="...">
                                        <div class="carousel-caption">
                                            ...
                                        </div>
                                    </div>
                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="right-notice">
                                <span>Últimas Notícias</span>
                                <ul>
                                    <li>18.01 | Cinco mil árvores serão podadas em Salvador até o começo do Carnaval</li>
                                    <li>18.01 | Guarda Municipal conta com atendimento psicológico</li>
                                    <li>17.01 | Pau da Lima também contará com Carnaval nos Bairros</li>
                                    <li>18.01 | Cinco mil árvores serão podadas em Salvador até o começo do Carnaval</li>
                                    <li>18.01 | Guarda Municipal conta com atendimento psicológico</li>
                                    <li>17.01 | Pau da Lima também contará com Carnaval nos Bairros</li>
                                    <li>18.01 | Cinco mil árvores serão podadas em Salvador até o começo do Carnaval</li>
                                    <li>18.01 | Guarda Municipal conta com atendimento psicológico</li>
                                </ul>
                                <div class="todas-noticias">
                                    <a href="#">TODAS AS NOTÍCIAS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div> <!-- NOTICIAS -->

                    <!-- SERVIÇOS -->
                    <div class="servicos">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="servicos-cidadao">
                                    <div class="title-services">
                                        <h3>SERVIÇOS PARA OS CIDADÃOS</h3>
                                    </div>
                                    <div class="col-md-4 col-xs-12 col-xs-12">
                                        <div class="grid-1">
                                            <div class="box-servicos-icon">
                                                <img src="<?=$home?>/assets/images/srv_educacao.png" alt="" />
                                            </div>
                                        </div>
                                        <div class="grid-2">
                                            <div class="box-servicos">
                                                <h1>Educação</h1>
                                                <ul>
                                                    <li>matricula escolar</li>
                                                </ul>
                                                <select id="" class="list-servicos">
                                                                      <option value="0">outros serviços</option>
                                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <div class="grid-1">
                                            <div class="box-servicos-icon">
                                                <img src="<?=$home?>/assets/images/srv_emprego.png" alt="" />
                                            </div>
                                        </div>
                                        <div class="grid-2">
                                            <div class="box-servicos">
                                                <h1>Trabalho e Renda</h1>
                                                <ul>
                                                    <li>simm hora marcada</li>
                                                </ul>
                                                <select id="" class="list-servicos">
                                                                      <option value="0">outros serviços</option>
                                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <div class="grid-1">
                                            <div class="box-servicos-icon">
                                                <img src="<?=$home?>/assets/images/srv_lazer.png" alt="" />
                                            </div>
                                        </div>
                                        <div class="grid-2">
                                            <div class="box-servicos">
                                                <h1>Lazer</h1>
                                                <ul>
                                                    <li>salvador vai de bike</li>
                                                </ul>
                                                <select id="" class="list-servicos">
                                                                      <option value="0">outros serviços</option>
                                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-xs-12">
                                        <div class="grid-1">
                                            <div class="box-servicos-icon">
                                                <img src="<?=$home?>/assets/images/srv_educacao.png" alt="" />
                                            </div>
                                        </div>
                                        <div class="grid-2">
                                            <div class="box-servicos">
                                                <h1>Educação</h1>
                                                <ul>
                                                    <li>matricula escolar</li>
                                                </ul>
                                                <select id="" class="list-servicos">
                                                          <option value="0">outros serviços</option>
                                                    </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <div class="grid-1">
                                            <div class="box-servicos-icon">
                                                <img src="<?=$home?>/assets/images/srv_emprego.png" alt="" />
                                            </div>
                                        </div>
                                        <div class="grid-2">
                                            <div class="box-servicos">
                                                <h1>Trabalho e Renda</h1>
                                                <ul>
                                                    <li>simm hora marcada</li>
                                                </ul>
                                                <select id="" class="list-servicos">
                                                                      <option value="0">outros serviços</option>
                                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <div class="grid-1">
                                            <div class="box-servicos-icon">
                                                <img src="<?=$home?>/assets/images/srv_lazer.png" alt="" />
                                            </div>
                                        </div>
                                        <div class="grid-2">
                                            <div class="box-servicos">
                                                <h1>Lazer</h1>
                                                <ul>
                                                    <li>salvador vai de bike</li>
                                                </ul>
                                                <select id="" class="list-servicos">
                                                          <option value="0">outros serviços</option>
                                                    </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- MAIS PROCURADOS E VAGAS-->
                                <div class="col-md-12">
                                  <div class="box-pai">
                                    <div class="col-md-6">
                                      <div class="maisprocurados">
                                        <h1>SERVIÇOS MAIS PROCURADOS</h1>
                                        <ul class="ul-maisprocurados">
                                          <li value="729">Emissão DAM 2ª via IPTU - TRSD</li>
                                          <li value="931">Isenção ITIV - Servidor Municipal</li>
                                          <li value="1143">Disponibilidade do  Contra Cheque on line</li>
                                        </ul>
                                        <select id="maisprocurados" class="list-servicos" >
                                            <option value="0"> Outros serviços </option>
                                            <option value="670"> Inscrição - Minha Casa Minha Vida </option>
                                            <option value="80"> SIMM </option>
                                            <option value="1004"> SIMM Hora Marcada </option>
                                            <option value="902"> ALVARA DE SAÚDE </option>
                                            <option value="22"> Infestação de pombos </option>
                                            <option value="1021"> Erradicação de árvores em via pública </option>
                                            <option value="299"> MatrÍcula Informatizada </option>
                                            <option value="81"> Seguro Desemprego </option>
                                            <option value="897"> Emissão de Nota Avulsa </option>
                                          </select>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="vagas">
                                        <h1>VAGAS DE EMPREGO</h1>
                                        <ul>
                                          <li><a href="http://www.simm.salvador.ba.gov.br/index.php?menu=destaque" target="_blank">Veja vagas de emprego oferecidas pelo SIMM</a></li>
                                          <li><a href="http://maisemprego.mte.gov.br/portal/pages/home.xhtml" target="_blank">Cadastre seu currículo ou pesquise sua vaga agora no SIMM</a></li>
                                        </ul>
                                        <div class="todasvagas">
                                          <a href="http://www.simm.salvador.ba.gov.br/index.php?menu=destaque" target="_blank">TODAS AS VAGAS</a>
                                        </div>
                                    </div>
                                  </div>

                                </div>
                              </div>

                            </div> <!-- col-md-9 -->

                            <!-- BANNERS -->

                            <div class="col-md-3 col-xs-6">
                              <div class="banners">
                                <a href="#"><img class="img-responsive" src="<?=$home?>/assets/images/banner1.PNG" alt="" /></a>
                                <a href="#"><img class="img-responsive" src="<?=$home?>/assets/images/banner1.PNG" alt="" /></a>
                                <a href="#"><img class="img-responsive" src="<?=$home?>/assets/images/banner1.PNG" alt="" /></a>
                              </div>
                            </div>


                        </div> <!-- ROW -->
                    </div> <!-- CONTAINER -->
                  </div><!-- SERVICOS -->

<?php get_footer(); ?>
