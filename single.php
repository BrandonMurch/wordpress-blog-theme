<?php get_header(); ?>

<main class="container">
  <h1 class="display-3"><?php the_title(); ?></h1>
  <p><?php the_content(); ?></p>

  <?php if (comments_open() || get_comments_number()):
      comments_template($file = "/comments.php", $separate_comments = false);
  endif; ?>

</main>


<?php get_footer(); ?>
