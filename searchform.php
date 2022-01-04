<form role="search" method="get" id="searchform" class="searchform hide-submit" action="<?php echo home_url(
    "/"
); ?>">

  <label class="screen-reader-text" for="s">Search for:</label>
  <input type="text" name="s" id="s" class="search-text" value="">
  <button type="button" name="button" role="presentation" class="search-toggle">
    <?php get_template_part("search-icon"); ?>
  </button>
  <button type="button" name="button" role="presentation" class="search-close">
    <?php get_template_part("close-icon"); ?>
  </button>
  <label class="searchsubmit-container">
    <input type="submit" id="searchsubmit">
    <?php get_template_part("search-icon"); ?>
  </label>

</form>
