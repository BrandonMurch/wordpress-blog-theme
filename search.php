<?php get_header(); ?>

<main class="container">
  <?php if (have_posts()):
      global $wp_query;
      $total_results = $wp_query->found_posts;
      $query =  esc_html(get_search_query());
      echo "<h1>Found ". $total_results ." results for the search <strong>". $query ."</strong></h1>";
  while (have_posts()):
      the_post();
      get_template_part("partials/templates/post-list-card");
    endwhile;
    get_template_part("partials/templates/post-list-navigation");
  else: ?>
    <h1>No results found for <strong><?php esc_html(the_search_query()) ?></strong>.</h1>
  <?php endif; ?>
</main>




<?php get_footer(); ?>
