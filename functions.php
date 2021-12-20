<?php

function load_stylesheets()
{
    wp_register_style(
        "bootstrap",
        "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css",
        array(),
        1,
        'all'
    );
    wp_enqueue_style("bootstrap");

    wp_register_style(
        'customCSS',
        get_template_directory_uri() . '/dist/style.css',
        array(),
        1,
        'all'
    );
    wp_enqueue_style('customCSS');
}
add_action('wp_enqueue_scripts', "load_stylesheets");

?>
