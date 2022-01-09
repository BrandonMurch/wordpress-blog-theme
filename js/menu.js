const closeSubMenuWithEscape = (e) => {
	if (e.key == "Escape") {
		jQuery(".sub-menu-open").removeClass("sub-menu-open");
	}
};

const toggleSubMenu = (e) => {
	const parentLinkItem = e.target.closest(".menu-item-has-children");
	if (parentLinkItem) {
		jQuery(parentLinkItem).toggleClass("sub-menu-open");
	} else {
		jQuery(".sub-menu-open").removeClass("sub-menu-open");
	}
};

export const menuHandler = () => {
	jQuery(window).load(() => {
		jQuery(".menu-toggle").on("click", () => {
			jQuery(".menu-wrapper").toggleClass("menu-wrapper-open");
			jQuery("html").toggleClass("no-scroll");

			if (jQuery(".menu-wrapper").hasClass("menu-wrapper-open")) {
				document.addEventListener("click", toggleSubMenu);
				document.addEventListener("keydown", closeSubMenuWithEscape);
			} else {
				document.removeEventListener("click", toggleSubMenu);
				document.removeEventListener("keydown", closeSubMenuWithEscape);
			}
		});
	});
};
