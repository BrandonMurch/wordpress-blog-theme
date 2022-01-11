<?php

require __DIR__ . "/partials/functions/avatar.php";
require __DIR__ . "/partials/functions/walker.php";
require __DIR__ . "/partials/functions/featured-images.php";
require __DIR__ . "/partials/functions/enqueue-scripts.php";
require __DIR__ . "/partials/functions/custom-logo.php";

add_action("init", function () {
	register_nav_menus([
		"header" => __("Main Menu"),
		"footer" => __("Footer Menu with Sub-Menus"),
		"footer-simple" => __("Simple Footer Menu"),
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

add_filter("excerpt_length", function () {
	return 20;
});
