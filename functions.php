<?php

function load_stylesheets()
{
    wp_register_style(
        "bootstrap",
        "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css",
        [],
        1,
        "all"
    );
    wp_enqueue_style("bootstrap");

    wp_register_style(
        "customCSS",
        get_template_directory_uri() . "/dist/style.css",
        [],
        1,
        "all"
    );
    wp_enqueue_style("customCSS");
}
add_action("wp_enqueue_scripts", "load_stylesheets");

register_nav_menus([
    "header" => __("Header Menu"),
    "footer" => __("Footer Menu"),
]);

add_action("after_setup_theme", "register_nav_menus");

function move_comment_textarea($fields)
{
    $comment_box = $fields["comment"];
    unset($fields["comment"]);
    $fields["comment"] = $comment_box;
    return $fields;
}

add_filter("comment_form_fields", "move_comment_textarea");

?>
