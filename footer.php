

<footer>
    <?php get_template_part("partials/templates/svg-border"); ?>

    <?php wp_nav_menu([
    	"theme_location" => "footer-simple",
    	"container_class" => "footer-menu-simple",
    	"depth" => 1,
    	"walker" => new Walker_Nav_Main(),
    	"fallback_cb" => "",
    ]); ?>

    <?php wp_nav_menu([
    	"theme_location" => "footer",
    	"container_class" => "footer-menu",
    	"walker" => new Walker_Nav_Main(),
    	"fallback_cb" => "",
    ]); ?>
</footer>

<?php wp_footer(); ?>
</body>
</html>
