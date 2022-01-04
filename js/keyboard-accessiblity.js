export const keyboardAccessibility = () => {
  jQuery(window).load(() => {
    jQuery(window).on("keydown", (e) => {
      if (e.key == "Enter") {
        document.activeElement.click();
      }
    });
  });
};
