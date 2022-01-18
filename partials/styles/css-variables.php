<?php

// Can be injected into a style string. Usually on the body tag. CSS variables can then be access throughtout the site. Gets values from WP Customizer
function get_global_styles()
{
	return "
    --accent1: " .
		get_theme_mod("primary_colour", "") .
		";
    --accent2: " .
		get_theme_mod("secondary_colour", "") .
		";
  ";
}
