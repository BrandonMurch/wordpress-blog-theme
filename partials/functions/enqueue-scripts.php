<?php

function load_javascript()
{
	wp_enqueue_script("jquery");

	wp_enqueue_script(
		"customJS",
		get_template_directory_uri() . "/dist/app.js",
		[],
		1,
		"all"
	);
}
add_action("wp_enqueue_scripts", "load_javascript");

function load_stylesheets()
{
	wp_enqueue_style(
		"bootstrap",
		"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css",
		[],
		1,
		"all"
	);

	wp_enqueue_style(
		"customCSS",
		get_template_directory_uri() . "/dist/style.css",
		["bootstrap"],
		1,
		"all"
	);
}
add_action("wp_enqueue_scripts", "load_stylesheets");
