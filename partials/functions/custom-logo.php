<?php

function brandons_blog_custom_logo_setup()
{
	$defaults = [
		"height" => 100,
		"width" => 100,
		"flex-height" => true,
		"flex-width" => true,
		"unlink-homepage-logo" => true,
	];

	add_theme_support("custom-logo", $defaults);
}

add_action("after_setup_theme", "brandons_blog_custom_logo_setup");
