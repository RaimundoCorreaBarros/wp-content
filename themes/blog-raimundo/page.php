<?php get_header() ?>
	<?php the_post() ?>
	
<section class="desarrolloweb container">
    <div class="container">
	
		<div class="card mb-3">
			<div class="row no-gutters desarrolloweb__sombra">
				<div class="col-md-4">
					<?php the_post_thumbnail('trabajos', array('class' => 'card-img desarrolloweb__img')); ?>
				</div>
				<div class="col-md-8">
					<div class="card-body card-texto">
						<h5 class="card-title"><?php the_title(); ?></h5>
						<p class="card-text"><?php the_excerpt(); ?></p>
						<a href="<?php echo get_home_url()?>" class="btn btn-color">Volver al inicio</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer() ?>