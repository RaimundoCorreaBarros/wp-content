<?php get_header() ?>



        <section class="single container">

            <div class="card single__sombra" style="width: 18rem;">
                <?php the_post_thumbnail('medium') ?>
                <div class="card-body">
                    <h4 class="card-title"><?php the_title(); ?></h4>
                    <p class="card-text"><?php the_excerpt(); ?></p>

                    <?php 

                    $web = 'web';
                    $cancion = 'cancion';
                    $sin = 'sin-categoria';
               
                    if  ( has_category('cancion')) { ?>
                        <a href="" class="btn btn-color" data-toggle="modal" data-target="#<?php the_field('id'); ?>"">Ver video</a>
                            <!-- Modal -->
                            <div class="modal fade" id="<?php the_field('id'); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content modal-sm">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php the_field('iframe'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>			  	
                                    </div>
                                </div>
                            </div>

                    <?php } elseif (has_category('web')) { ?>
                        <a href="<?php is_field('web') ?>" target="_blank" class="btn btn-color">Ver Sitio</a>
                    
                    <?php } elseif (has_category('sin-categoria'))  { ?>
                        <a href="<?php echo get_home_url()?>" class="btn btn-color">Volver al inicio</a>
                
                    <?php } ?>

                </div>
            </div>	
        </section>

<?php get_footer() ?>