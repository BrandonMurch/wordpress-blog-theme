<?php get_header(); ?>

<main class="container">
  <h1 class="display-3"><?php the_title(); ?></h1>
  <p><?php the_content(); ?></p>

  <p><?php wp_get_post_tags(); ?></p>

  <?php if (comments_open() || get_comments_number()):
      comments_template();
  endif; ?>

</main>


<?php get_footer(); ?>
