    <?php $home = get_template_directory_uri(); ?>
    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="<?= $home ?>/js/bootstrap.min.js"></script>
    <script src="<?= $home ?>/js/main.js"></script>
    <?php wp_footer();?>
</body>

</html>
