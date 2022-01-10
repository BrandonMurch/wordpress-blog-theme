<?php

class Walker_Nav_Main extends Walker_Nav_Menu
{
	function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
	{
		//  to make li elements focusable
		$focusable = $args->walker->has_children ? "tabIndex ='0'" : "";
		$no_children = $args->walker->has_children
			? ""
			: "menu-item-no-children ";
		$output .=
			"<li class=\"" .
			$no_children .
			implode(" ", $item->classes) .
			"\"" .
			$focusable .
			"id=\"" .
			$item->title .
			"\"" .
			">";

		if ($item->url && $item->url != "#") {
			$output .=
				"<a class=\"menu-item-title\" href=" .
				esc_url($item->url) .
				">";
		} else {
			$output .= "<span class=\"menu-item-title\" >";
		}

		$output .= esc_html($item->title);

		if ($item->url && $item->url != "#") {
			$output .= "</a>";
		} else {
			$output .= "</span>";
		}
	}
}

?>
