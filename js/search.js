export const searchBarHandler = () => {
	jQuery(".search-submit").on("mousedown", (e) => {
		// Stop blur if submit is pressed.
		e.preventDefault();
	});

	jQuery("#s").on("blur", () => {
		jQuery("#searchform")[0].reset();
	});

	// Javascript work-around for chrome-based browsers since they don't seem to allow focus-within a form using a button. Have tried placing tabIndex on all interior elements, no change.
	jQuery(".searchform").on("click", () => {
		jQuery("#s").focus();
	});

	jQuery(document).on("keydown", (e) => {
		if (e.key === "Escape") document.activeElement.blur();
	});
};
