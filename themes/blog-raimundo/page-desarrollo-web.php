<?php get_header() ?>

<section class="desarrolloweb container">
    <div class="container">

        <div class="desarrolloweb__texto">
          <h2>Proyectos desarrollados</h2>
          <p>A principios del 2000 aprendi a crear paginas web de manera autodidacta, sin entender el por que hacias las cosas de una forma u otra, pero a medida que pasaban los años fui dejando esto de lado y me dedique en pleno a mi carrera de sonidista.</p>
          <p>El año 2019 impulsado por mi hermana es que finalmente me decidi y comenze este curso de desarrollador web. Mi constante gusto por aprender cosas nuevas me llevaron de manera exitosa a terminar este desafio (volver a estudiar) y buscar nuevas oportunidades laborales.</p>
        </div>

		<?php
			$arg = array(
				'post_type'		 => 'web',
				'posts_per_page' => 4,
				'orderby'  		 => 'rand',
			);
		
			$get_arg = new WP_Query( $arg );
		
			while ( $get_arg->have_posts() ) {
				$get_arg->the_post();
			?>
		
			<div class="card mb-3">
				<div class="row no-gutters desarrolloweb__sombra">
					<div class="col-md-4">
						<?php the_post_thumbnail('trabajos', array('class' => 'card-img desarrolloweb__img')); ?>
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