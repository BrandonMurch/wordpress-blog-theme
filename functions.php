<?php

function add_jquery()
{
    wp_enqueue_script("jquery");
}

add_action("wp_enqueue_scripts", "add_jquery");

function load_javascript()
{
    wp_register_script(
        "customJS",
        get_template_directory_uri() . "/dist/app.js",
        [],
        1,
        "all"
    );
    wp_enqueue_script("customJS");
}
add_action("wp_enqueue_scripts", "load_javascript");

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
        ["bootstrap"],
        1,
        "all"
    );
    wp_enqueue_style("customCSS");
}
add_action("wp_enqueue_scripts", "load_stylesheets");

function register_theme_nav_menus()
{
    register_nav_menus([
      "header" => __("Main Menu"),
        "footer" => __("Footer Menu"),
    ]);
}

add_action("init", "register_theme_nav_menus");

function move_comment_textarea($fields)
{
    $comment_box = $fields["comment"];
    unset($fields["comment"]);
    $fields["comment"] = $comment_box;
    return $fields;
}
add_filter("comment_form_fields", "move_comment_textarea");

function enable_custom_logo()
{
    add_theme_support("custom-logo");
}

add_action("after_theme_setup", "enable_custom_logo");

?>
