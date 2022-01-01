<?php get_header(); ?>

<main class="container">
  <?php if (have_posts()): ?>
    <h1>Search results: <?php  esc_html(the_search_query()); ?></h1>
  <?php while (have_posts()):
      the_post();
      get_template_part("post-list");
    endwhile;
    get_template_part("post-list-navigation");
  else: ?>
    <h1>No results found for <strong><?php esc_html(the_search_query()) ?></strong>.</h1>
  <?php endif; ?>
</main>




<?php get_footer(); ?>
