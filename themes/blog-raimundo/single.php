<?php get_header() ?>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>

        <section class="single container">
		<div class="card single__sombra" style="width: 18rem;">
			<?php the_post_thumbnail('medium') ?>
            <div class="card-body">
                <h4 class="card-title"><?php the_title(); ?></h4>
                <p class="card-text"><?php the_excerpt(); ?></p>
                <a href="<?php echo get_home_url()?>" class="btn btn-color">Volver al inicio</a>
                
            </div>
        </div>
    </section>

	<?php } ?>


<?php } wp_reset_query(); ?>


<?php get_footer() ?>