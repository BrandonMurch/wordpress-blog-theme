<?php

function load_colour_section($wp_customize)
{
	$wp_customize->add_section("colours", [
		"title" => __("Colours"),
		"description" => __("Add theme colours"),
		"panel" => "", // Not typically needed.
		"priority" => 160,
		"capability" => "edit_theme_options",
		"theme_supports" => "", // Rarely needed.
	]);
}

function load_colour_option($wp_customize, $name, $title, $default, $priority)
{
	$wp_customize->add_setting($name, [
		"type" => "theme_mod",
		"capability" => "manage_options",
		"default" => $default,
		"sanitize_callback" => "sanitize_hex_color",
	]);

	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize, $name, [
			"label" => __($title, "brandons_blog_theme"),
			"section" => "colours",
			"priority" => $priority,
		])
	);
}

function custom_colour_support($wp_customize)
{
	load_colour_section($wp_customize);
	load_colour_option(
		$wp_customize,
		"primary_colour",
		"Accent Colour",
		"#30cfd0",
		10
	);
	load_colour_option(
		$wp_customize,
		"secondary_colour",
		"Secondary Color",
		"#330867",
		15
	);
}

add_action("customize_register", "custom_colour_support");
