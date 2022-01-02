const closeSearch = () => {
  jQuery("#searchform")[0].reset();
  jQuery(".searchform").removeClass("search-open");
};

const openSearch = () => {
  jQuery(".searchform").addClass("search-open");
  // Doesnt' look write if cursor appears immediately. It appears directly behind search icon. Wait until input has partially opened.
  setTimeout(() => {
    jQuery("#s").focus();
  }, 200);
};

const stopSearchIfEmpty = (e) => {
  if (jQuery("#s").val() == "") {
    e.preventDefault();
    return false;
  }
};

export const searchBarHandler = () => {
  jQuery(window).load(() => {
    jQuery(".search-close").on("click", closeSearch);
    jQuery(".search-toggle").on("click", openSearch);
    jQuery(".searchsubmit-container").on("click", stopSearchIfEmpty);

    jQuery(document).on("keydown", (e) => {
      if (e.key === "Escape") closeSearch();
      if (e.key === "Enter") stopSearchIfEmpty(e);
    });
  });
};
