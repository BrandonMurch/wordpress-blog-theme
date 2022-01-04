const closeSearch = () => {
  jQuery("#searchform")[0].reset();
  document.activeElement.blur();
};

const stopSearchIfEmpty = (e) => {
  if (jQuery("#s").val() == "") {
    e.preventDefault();
    return false;
  }
};

export const searchBarHandler = () => {
  jQuery(".search-submit").on("click", stopSearchIfEmpty);

  jQuery(document).on("keydown", (e) => {
    if (e.key === "Escape") closeSearch();
    if (e.key === "Enter") stopSearchIfEmpty(e);
  });
};
