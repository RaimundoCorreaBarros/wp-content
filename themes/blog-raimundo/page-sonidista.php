<?php get_header() ?>

<section class="sonido container">

<div class="container">


  <div class="sonido__texto">
	<h2>Sonidista</h2>
	<p>Como sonidista he tenido la fortuna de trabajar en muchos y variados proyectos para televisión  y publicidad, dentro y fuera de Chile.</p>
	<p>Con el pasar de los años también logre adquerir equipos propios para realizar sonido directo como freelance lo que me abrio mas puertas en productoras de televisión</p>
  </div>

		<?php
			$arg = array(
				'post_type'		 => 'sonido',
				'posts_per_page' => 4,
				'orderby'  		 => 'rand',
			);
		
			$get_arg = new WP_Query( $arg );
		
			while ( $get_arg->have_posts() ) {
				$get_arg->the_post();
			?>
		
			<div class="card mb-3 sonido__sombra">
				<div class="row no-gutters ">
					<div class="col-md-4">
						<?php the_post_thumbnail('trabajos', array('class' => 'card-img sonido__img')); ?>
					</div>
					<div class="col-md-8">
						<div class="card-body card-texto">
							<h5 class="card-title"><?php the_title(); ?></h5>
							<p class="card-text"><?php the_excerpt(); ?></p>
							<a href="<?php the_field('web') ?>" target="_blank" class="btn btn-color">Ver Sitio</a>
						</div>
					</div>
				</div>
			</div>
		

		
		
		<?php } wp_reset_postdata(); ?>

			
	</div>

	</section>
	
<?php get_footer() ?>
