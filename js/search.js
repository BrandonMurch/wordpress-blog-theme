export const searchBarHandler = () => {
	jQuery(".search-submit").on("mousedown", (e) => {
		// Stop blur if submit is pressed.
		e.preventDefault();
	});

	jQuery("#s").on("blur", () => {
		jQuery("#searchform")[0].reset();
	});

	jQuery(document).on("keydown", (e) => {
		if (e.key === "Escape") document.activeElement.blur();
	});
};
