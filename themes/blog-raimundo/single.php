<?php get_header() ?>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>

        <section class="single container">
		<div class="card" style="width: 18rem;">
			<?php the_post_thumbnail('medium') ?>
            <div class="card-body">
                <h5 class="card-title"><?php the_title() ?></h5>
				<p class="card-text"><?php the_content() ?></p>
                <a href="<?php the_field('web') ?>" target="_blank" class="btn btn-color">Ver Sitio</a>
            </div>
        </div>
    </section>

	<?php } ?>
<?php } else { ?>

<?php } wp_reset_query(); ?>


<?php get_footer() ?>