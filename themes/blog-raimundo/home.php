<?php get_header() ?>

<main class="container main">  
  <?php
    $arg = array(
      'post_type'		 => 'post',
    );
  
    $get_arg = new WP_Query( $arg );
  
    while ( $get_arg->have_posts() ) {
      $get_arg->the_post();
    ?>
  
      <div class="main__foto">
        <?php the_post_thumbnail('medium'); ?>
      </div>
      <div class="main__texto container">
          <h1 class="main__texto__titulo"><?php the_title(); ?></h1>
          <p>Mi nombre es Raimundo Correa, soy ingeniero en sonido de profesión y actualmente me encuentro terminando el curso de desarrollo sitios web en la academia Desafio Latam.</p>
          <p>Siempre me gustó mucho todo lo relacionado con la tecnología y el desarrollo de sitios web pero mi pasión por el bajo eléctrico y la música me llevo a optar por estudiar Técnico e Ingeniería en Sonido, pero después de algunos años me atreví a estudiar y a reinventarme laboralmente.</p>
          <a href="assets/download/cv-raimundo_correa.pdf" download="" class="btn btn-cv main__btn"><h4><i class="fas fa-cloud-download-alt fa-1.5x"></i> Descargar CV</h4></a>
      </div>
  
    <?php } wp_reset_postdata();
  ?>      
        
</main>

    <section class="section container">
      <h2>Habilidades</h2>
      <div class="container">
        <div class="row">

          <?php
            $arg = array(
              'post_type'		 => 'habilidad',
              'posts_per_page' => 3,
              'orderby'  		 => 'rand',
            );
          
            $get_arg = new WP_Query( $arg );


          
            while ( $get_arg->have_posts() ) {
              $get_arg->the_post();

            ?>

            <?php 
              $web = 'Desarrollador Web';
              $sonido = 'Sonidista';
              $bajo = 'Bajista';
            ?>
          
            <div class="col-md-4">
              <div class="mb-3 section__tarjeta">
                <div class="car-head "> 
                  <?php get_template_part('_includes/logo', 'web'); ?>             
                </div>
                <div class="card-title">
                  <h4 class="seccion__titulo"><?php the_title(); ?></h4>
                  <p><?php the_excerpt(); ?></p>
                </div>
              </div>
            </div>
          
            <?php } wp_reset_postdata();
          ?>            
        </div>
        
      </div>
    </section>

<?php get_footer() ?>
