<?php get_header(); ?>
<main class="container">
    <div class="row">
        <article class="col-sm-8 col-sm-push-4">
        <?php 
        if( have_posts() ) {
            while( have_posts() ) {
                the_post(); 
        ?>
        <section>
            <h1 class="tit-int gray">Notícias</h1>
        </section>
        <div class="noticia-desc">
		
			<div class="row-noticia">
				
					<span class="radius">Geral</span>
				
				
				<small class="row-evento-small">26 de Janeiro de 2017 - 17h10</small>
				<h3><?php the_title();?></h3>
                <p><?php echo(types_render_field('subtitulo-noticia',array('row'=>true))); ?></p>
			</div>
			
			<div class="post-int">
				<?php the_content(); ?>
			</div>
					
		</div>
       
            <h3></h3>
            
            <?php }
            }?>
        </article>
    </div>
</main>
<?php get_footer(); ?>