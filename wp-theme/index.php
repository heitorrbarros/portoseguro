    <?php get_header(); ?>
    <?php $home = get_template_directory_uri(); ?>

    <!-- NOTICIAS -->
    <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 noticias-container">
                        <div class="col-md-6 noticias-left">
                            <figure>
                              <img class="img-responsive" src="<?=$home?>/assets/images/noticias-left.png" alt="" />
                              <figcaption>
                                <h1>Titulo</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-6 noticias-container-right">
                            <div class="col-md-6 noticias-mini">
                              <figure>
                                <img class="img-responsive" src="<?=$home?>/assets/images/noticias-mini1.png" alt="" />
                                <figcaption>
                                  <h1>Titulo</h1>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </figcaption>
                              </figure>
                            </div>
                            <div class="col-md-6 noticias-mini">
                              <figure>
                                <img class="img-responsive" src="<?=$home?>/assets/images/noticias-mini2.png" alt="" />
                                <figcaption>
                                  <h1>Titulo</h1>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </figcaption>
                              </figure>
                            </div>
                            <div class="col-md-12 noticias-right">
                              <figure>
                                <img class="img-responsive" src="<?=$home?>/assets/images/noticias-right.png" alt="" />
                                <figcaption>
                                  <h1>Titulo</h1>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </figcaption>
                              </figure>
                              <a href="#">
                                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> MAIS NOTÍCIAS
                              </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- CONTEUDO HOME -->
    <div class="container conteudo-home">
      <div class="col-md-8">

        <!-- BANNER -->
          <div class="banner">
            <aside class="">
              BANNER
            </aside>
          </div>


        <!-- MAIS VISTOS -->
            <div class="maisvistos">
                <h5>MAIS VISTOS</h5>
                <a href="#">
                  <span>1</span>
                  Processos Seletivos
                </a>
                <a href="#">
                  <span>2</span>
                  IPTU
                </a>
                <a href="#">
                  <span>3</span>
                  Editais
                </a>
                <a href="#">
                  <span>4</span>
                  NFE
                </a>
                <a href="#">
                  <span>5</span>
                  Serviços para o cidadão
                </a>
            </div>

        <!-- LINKS -->
            <div class="links">
              <h4><strong>LINKS</strong> INFORMAÇÕES E SERVIÇOS</h4>
              <ul class="nav nav-tabs">
                <li><a data-toggle="tab" href="#home">CIDADÃO</a></li>
                <li><a data-toggle="tab" href="#menu1">EMPRESA</a></li>
                <li class="active"><a data-toggle="tab" href="#menu2">FAQ</a></li>
                <li><a data-toggle="tab" href="#menu3">TELEFONES</a></li>
              </ul>

              <div class="tab-content">
                <div id="home" class="tab-pane fade">
                  <h4>CIDADÃO</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div id="menu1" class="tab-pane fade">
                  <h4>EMPRESA</h4>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div id="menu2" class="tab-pane fade in active">
                  <h3>PERGUNTAS FREQUENTES - FAQ</h4>
                  <div class="col-md-6">
                    <a href="#">
                    <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
                    <h4>Como fazer matricula de um aluno da REME</h4>
                    <p>
                      Saiba como matritular o seu filho na rede publica de ensino.
                    </p>
                  </a>
                  </div>
                  <div class="col-md-6">
                    <a href="#">
                    <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
                    <h4>Como me informar sobre os gastos da prefeitura</h4>
                    <p>
                      Conheça o Portal de Tranparências e o SIC.
                    </p>
                  </a>
                  </div>
                </div>
                <div id="menu3" class="tab-pane fade">
                  <h4>TELEFONES</h4>
                  <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
              </div>
            </div>

            <!-- PUBLICAÇÃO -->
            <div class="publicacao">
                <h5>PUBLICAÇÕES LEGAIS</h5>
                <div class="item-publicacao">
                    <div class="data-post">
                        <span class="col-categoria radius">Comunicados</span>
                        23 de Janeiro de 2017 - 18h38
                    </div>
                    <a href="http://www.saojose.sc.gov.br/index.php/sao-jose/publicacoes-legais-desc/convocacaeo-concurso-edital-002-2014-medico-ginecologista">Convocação Concurso Edital 002/2014 - Médico Ginecologista</a>
                </div>
                <div class="item-publicacao">
                    <div class="data-post">
                        <span class="col-categoria radius">Comunicados</span>
                        23 de Janeiro de 2017 - 18h38
                    </div>
                    <a href="http://www.saojose.sc.gov.br/index.php/sao-jose/publicacoes-legais-desc/convocacaeo-concurso-edital-002-2014-medico-ginecologista">Convocação Concurso Edital 002/2014 - Médico Ginecologista</a>
                </div>
                <div class="item-publicacao">
                    <div class="data-post">
                        <span class="col-categoria radius">Comunicados</span>
                        23 de Janeiro de 2017 - 18h38
                    </div>
                    <a href="http://www.saojose.sc.gov.br/index.php/sao-jose/publicacoes-legais-desc/convocacaeo-concurso-edital-002-2014-medico-ginecologista">Convocação Concurso Edital 002/2014 - Médico Ginecologista</a>
                </div>
                <div class="item-publicacao">
                    <div class="data-post">
                        <span class="col-categoria radius">Comunicados</span>
                        23 de Janeiro de 2017 - 18h38
                    </div>
                    <a href="http://www.saojose.sc.gov.br/index.php/sao-jose/publicacoes-legais-desc/convocacaeo-concurso-edital-002-2014-medico-ginecologista">Convocação Concurso Edital 002/2014 - Médico Ginecologista</a>
                </div>
            </div>
          </div>
          <div class="col-md-4">
              <div class="links-side">
                <a href="#">
                  <figure>
                      <img class="img-responsive" src="<?=$home?>/assets/images/ouvidoria.png" alt="" />
                  </figure>
                </a>
                <a href="#">
                  <figure>
                      <img class="img-responsive" src="<?=$home?>/assets/images/transparencia.png" alt="" />
                  </figure>
                </a>
              </div>
              <div class="links-uteis">
                <div class="mCustomScrollbar" data-mcs-theme="dark">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
              </div>
          </div>
    </div>

    <?php get_footer(); ?>
