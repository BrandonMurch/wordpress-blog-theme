

<footer>
    <?php get_template_part("partials/templates/svg-border"); ?>

    <?php wp_nav_menu([
    	"theme_location" => "footer",
    	"container_class" => "footer-menu",
    	"walker" => new Walker_Nav_Main(),
    ]); ?>
</footer>

<?php wp_footer(); ?>
</body>
</html>
