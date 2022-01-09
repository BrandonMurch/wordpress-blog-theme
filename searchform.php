<form
  role="search"
  method="get"
  id="searchform"
  class="searchform hide-submit"
  action="<?php echo home_url("/"); ?>"
>

  <label class="screen-reader-text" for="s">Search for:</label>
  <input type="text" name="s" id="s" class="search-text" value="" required>
  <button type="button" role="presentation" class="search-toggle">
     <?php get_template_part("partials/svg-icons/search-icon"); ?>
  </button>
  <button type="reset" role="presentation" class="search-empty">
    <?php get_template_part("partials/svg-icons/close-icon"); ?>
  </button>
  <button type="submit" class="search-submit">
    <?php get_template_part("partials/svg-icons/search-icon"); ?>
  </button>

</form>
