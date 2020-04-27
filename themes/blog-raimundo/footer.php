<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer-menu' ) ); ?>
<?php } ?>

	<footer class="footer">
        <div class="footer_texto">
            <small>© 2020 Raimundo Correa</small>
        </div>
        <div class="footer__iconos">
            <a href="https://www.linkedin.com/in/raimundo-correa-76566660/" target="_blank" ><i class="fab fa-linkedin fa-2x"></i></a>
            <a href="https://github.com/RaimundoCorreaBarros" target="_blank" ><i class="fab fa-github-square fa-2x"></i></a>
        </div>   
    </footer>

<?php wp_footer() ?>
</body>
</html>