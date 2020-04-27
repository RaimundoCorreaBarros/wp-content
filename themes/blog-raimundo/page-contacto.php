<?php get_header() ?>
<?php the_post() ?>

	<div class="contacto container">
        <h2><?php the_title() ?></h2>

		<?php the_content(); ?>
			<?php if ( is_active_sidebar( 'contact-widget' ) ) { ?>
			<?php dynamic_sidebar( 'contact-widget' ); ?>
		<?php }; ?>
	</div>

<?php get_footer() ?>