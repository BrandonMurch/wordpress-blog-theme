<?php

require __DIR__ . "/partials/functions/avatar.php";

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

add_action("init", function () {
    register_nav_menus([
        "header" => __("Main Menu"),
        // "footer" => __("Footer Menu"),
    ]);
});

function move_comment_textarea($fields)
{
    $comment_box = $fields["comment"];
    unset($fields["comment"]);
    $fields["comment"] = $comment_box;
    return $fields;
}
add_filter("comment_form_fields", "move_comment_textarea");

add_theme_support("custom-logo");
add_theme_support("post-thumbnails");

if (function_exists("add_image_size")) {
    add_image_size("avatar", $width = 48, $height = 48, $crop = false);
    add_image_size("avatar-large", $width = 96, $height = 96, $crop = false);
    add_image_size("medium", $width = 400, $height = 400, $crop = false);
    add_image_size("large", $width = 800, $height = 800, $crop = false);
    add_image_size("avatar-large", $width = 96, $height = 96, $crop = false);
}

add_filter("image_size_names_choose", function ($sizes) {
    return array_merge($sizes, [
        "avatar" => __("Avatar"),
        "avatar-large" => __("Large Avatar"),
    ]);
});

add_filter("excerpt_length", function () {
    return 20;
});

function remove_img_attr($html)
{
    return preg_replace('/(width|height|sizes)="\d+"\s/', "", $html);
}

add_filter("post_thumbnail_html", "remove_img_attr");
