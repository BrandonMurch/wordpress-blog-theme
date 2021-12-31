<article class="card">
  <div class="card-body">
    <h1>
      <?php the_title(); ?>
    </h1>
    <p class="text-muted"><?php the_date(); ?></p>
    <p>
      <?php the_excerpt(); ?>
    </p>
    <a href="<?php echo get_permalink(); ?>">Read More</a>
  </div>
</article>
