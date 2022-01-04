const emptySearch = () => {
  jQuery("#searchform")[0].reset();
};

const closeSearch = () => {
  emptySearch();
  document.activeElement.blur();
};

const stopSearchIfEmpty = (e) => {
  if (jQuery("#s").val() == "") {
    e.preventDefault();
    return false;
  }
};

export const searchBarHandler = () => {
  jQuery(window).load(() => {
    jQuery(".searchform").on("focus-within", () => {
      console.log("TEST");
      jQuery("#searchform")[0].reset();
    });
    jQuery(".search-empty").on("click", emptySearch);
    jQuery(".searchsubmit-container").on("click", stopSearchIfEmpty);

    jQuery(document).on("keydown", (e) => {
      if (e.key === "Escape") closeSearch();
      if (e.key === "Enter") stopSearchIfEmpty(e);
    });
  });
};
