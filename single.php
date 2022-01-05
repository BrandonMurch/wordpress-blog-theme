<?php get_header(); ?>



<main class="container article">

  <?php if (has_post_thumbnail()) {
      the_post_thumbnail("large");
  } ?>



  <?php the_content(); ?>


  <h1 class="text-center subtitle">Share this article: </h1>
  <?php get_template_part("partials/templates/socials"); ?>

  <h1 class="text-center subtitle">Read more about:</h1>
  <ul class="tag-list">
    <?php echo get_the_tag_list(
        "<li class='tag'>",
        "</li><li class='tag'>",
        "</li>"
    ); ?>
  </ul>



  <?php if (comments_open() || get_comments_number()):
      comments_template();
  endif; ?>

</main>


<?php get_footer(); ?>
