<?php get_header() ?>

<section class="musico container">
	<div class="musico__texto container">
		<h2>La música y el bajo electrico.</h2>
		<p>A los 15 años, como muchos jovenes, aprendi a tocar un instrumento, en mi caso fue el bajo electrico y esto cambio mi vida. Se transformo en mi pasión, a tal punto que grabe algunos discos con mi primera banda y al igual que con mi profesión, la música me llevo a recorrer gran parte de Chile, Argentina, Mexico y Europa.</p>
	</div>

	<div class="musico__videos container">
			<div class="row galeria">
		
	<?php
		$arg = array(
			'post_type'		 => 'cancion',
			'posts_per_page' => 12,
			'orderby'  		 => 'rand',
		);
	
		$get_arg = new WP_Query( $arg );
	
		while ( $get_arg->have_posts() ) {
			$get_arg->the_post();
		?>
		
			
			<!-- Tarjetas -->
			<div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-2">
				<div class="card musico__sombra" data-toggle="modal" data-target="#<?php the_field('id'); ?>">
					<?php the_post_thumbnail('musica', array('class' => 'card-img-top galeria__video' )); ?>
					
					<div class="card-body">
						<h5 class="card-title"><?php the_title(); ?></h5>
						<p class="card-text"><?php the_excerpt(); ?></p>
					</div>
				</div>
			</div>			

          	<!-- Modal -->
			<div class="modal fade" id="<?php the_field('id'); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content modal-sm">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php the_field('iframe'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>			  	
					</div>
				</div>
			</div>

		
		
		<?php } wp_reset_postdata(); ?>

		</div>	
	</div>

    </section>

<?php get_footer() ?>