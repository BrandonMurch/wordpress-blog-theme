<?php get_header(); ?>

<main class="container">

  <?php if (have_posts()):
  	while (have_posts()):
  		the_post();
  		get_template_part("partials/templates/post-list-card");
  	endwhile;
  	get_template_part("partials/templates/post-list-navigation");
  endif; ?>

</main>


<?php get_footer(); ?>
