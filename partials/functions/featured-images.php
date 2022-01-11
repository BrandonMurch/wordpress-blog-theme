<?php

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

function remove_img_attr($html)
{
	return preg_replace('/(width|height|sizes)="\d+"\s/', "", $html);
}

add_filter("post_thumbnail_html", "remove_img_attr");
