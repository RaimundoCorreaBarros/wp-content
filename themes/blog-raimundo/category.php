<?php get_header() ?>

	<?php if (have_posts()) { ?>

	<ul>
		<?php while ( have_posts() ) { the_post(); ?>
		<li>
			<a href="<?php the_permalink() ?>">
				<?php the_post_thumbnail() ?>
				<?php the_title() ?>
				<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time>
				<?php the_excerpt() ?>
			</a>
		</li>
		<?php }; ?>
	</ul>

	<?php } else { ?>
		<!-- Content -->
		<div class="container error404">
        <h2>¡Ups! No hay elementos</h2>
		<h2>en la categoria.</h2>
        <div class="error404_svg">
            <img src="assets/image/bajo2x.png" alt="">
        </div>
        <a href="<?php echo get_home_url()?>" class="btn btn-color">Volver al inicio</a>
    </div>

	<?php } wp_reset_query(); ?>


<?php get_footer() ?>