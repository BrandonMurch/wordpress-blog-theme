<?php get_header(); ?>

<main class="container">
  <?php if (have_posts()): ?>
    <h1>Search results: <?php the_search_query(); ?></h1>
  <?php while (have_posts()):
      the_post(); ?>
      <?php get_template_part("post-card"); ?>
      </div>
  <?php
  endwhile; ?>
    <?php get_template_part("post-list-navigation"); ?>
  <?php else: ?>
    <!-- no posts found -->
  <?php endif; ?>
</main>




<?php get_footer(); ?>
