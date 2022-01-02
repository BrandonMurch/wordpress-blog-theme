<article class="card">
  <?php $has_been_modifed =
      get_the_time(get_option("date_format")) != get_the_modified_date(); ?>

  <a href="<?php the_permalink(); ?>" class="card-body">
      <?php if (has_post_thumbnail()) {
          the_post_thumbnail("thumbnail");
      } ?>
      <h1 class="card-title">
      <?php the_title(); ?>
      </h1>
      <div class="row">
        <div class="col text-center">
          <p class="text-muted">Written by <br> <strong> <?php the_author(); ?> </strong></p>
          <p>
        </div>

        <div class="col text-center">
          <p class="text-muted"> <?php echo $has_been_modifed
              ? "Last updated"
              : "Created on"; ?> <br> <strong><?php the_modified_date(); ?></strong>
          </p>
        </div>

      </div>


        <?php the_excerpt(); ?>
      </p>
      <div class="text-center">
        <h2 class="card-action">Click to read more</h2>
      </div>
  </a>

</article>
