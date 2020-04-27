<?php get_header() ?>

	<div class="container error404">
        <h1>404</h1>
        <h2>¡Ups! pagina no encontrada.</h2>
        <div class="error404_svg">
            <?php get_template_part('_includes/logo', 'bajo') ?>
        </div>
        <a href="<?php echo get_home_url()?>" class="btn btn-color">Volver al inicio</a>

    </div>

<?php get_footer() ?>