<?php get_header(); ?>

<main class="container">

  <?php if (have_posts()):
      while (have_posts()):
          the_post(); ?>
          <div class="card">
            <h1>
              <?php the_title(); ?>
            </h1>
            <p>
              <?php the_excerpt(); ?>
            </p>
            <a href="<?php echo get_permalink(); ?>">Read More</a>

          </div>

  <?php
      endwhile; ?>

      <div class="nav-previous alignleft">
        <?php next_posts_link("Older posts"); ?>
      </div>

      <div class="nav-next alignright">
        <?php previous_posts_link("Newer posts"); ?>
      </div>
  <?php
  endif; ?>

</main>


<?php get_footer(); ?>
