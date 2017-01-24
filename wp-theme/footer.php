    <?php $home = get_template_directory_uri(); ?>
    <footer>
      <div class="rodapetop">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                <div class="rodapenoticias">
                      <div class="col-md-2">
                      <a href="#">PREFEITURA</a><br />
                      <a href="#">NOTÍCIAS</a>
                      <div class="borda"></div>
                    </div>

                      <div class="col-md-2">
                      <div class="sociallinks">
                        <span>Siga a Prefeitura:</span>
                        <div>
                        <a href="#"><img src="<?=$home?>/assets/images/facebook-icon.png" alt="" /></a>
                        <a href="#"><img src="<?=$home?>/assets/images/youtube-icon.png" alt="" /></a>
                        <a href="#"><img src="<?=$home?>/assets/images/flickr-icon.png" alt="" /></a>
                        <a href="#"><img src="<?=$home?>/assets/images/twitter-icon.png" alt="" /></a>
                      </div>
                      </div>
                    </div>

                      <div class="col-md-4">
                      <div class="diario">
                          <h1>DIÁRIO OFICIAL</h1>
                          <p>Informações Institucionais de tudo que acontece na prefeitura.</p>
                          <div class="borda"></div>
                      </div>
                    </div>
                    <div class="col-md-4 botao">
                      <button type="button" name="button">Acesse Já</button><br><br />
                      <button type="button" name="button">EDIÇÕES ANTERIORES</button>
                    </div>
                </div>
              </div>
          </div>
      </div>
    </div>
    <div class="rodapebot">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="copyright">
                <span>© Prefeitura Municipal de Porto Seguro - 2015</span><br>
                <span>Endereço:</span>
              </div>
            </div>
        </div>
    </div>
  </div>
    </footer>


    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="<?= $home ?>/js/bootstrap.min.js"></script>
    <script src="<?= $home ?>/js/main.js"></script>
    <?php wp_footer();?>
</body>

</html>
