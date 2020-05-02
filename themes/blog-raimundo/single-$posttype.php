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
                <?php
                $sonido = 'sonido';
                $musico =  'cancion';
                $web = 'web';
                $txt = 'Para mas información dirigase a la sección: '

                    if (post_type('') = $sonido) {
                        echo $txt . $sonido;
                    }
                ?>

                <a href="<?php echo get_home_url()?>" class="btn btn-color">Volver al inicio</a>
                
            </div>
        </div>
    </section>

	<?php } ?>


<?php } wp_reset_query(); ?>


<?php get_footer() ?>


<?php
    arg = array(
        'post_type'		 => 'custom-post-name',
        'category_name'	 => '',
        'posts_per_page' => 1,
        'offset'		 => 0,
        'post__not_in'	 => array(post->ID),
        'paged'			 => paged
    );

    get_arg = new WP_Query( arg );

    while ( get_arg->have_posts() ) {
        get_arg->the_post();
    ?>

        <!-- Content -->

    <?php } wp_reset_postdata();
?>