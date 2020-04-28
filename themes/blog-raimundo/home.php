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
            <?php get_template_part('_includes/texto', 'inicio') ?>
            <?php get_template_part('_includes/boton', 'descarga') ?>          
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
          
            <div class="col-md-4">
              <div class="mb-3 section__tarjeta">
                <div class="car-head section__svg"> 
                  <?php the_post_thumbnail('habilidad'); ?>            
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
