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

    <?php get_footer(); ?>
