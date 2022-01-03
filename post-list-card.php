<article class="card">
  <?php $has_been_modifed =
      get_the_time(get_option("date_format")) != get_the_modified_date(); ?>


      <?php if (has_post_thumbnail()): ?>
        <div class="card-image-wrapper">
          <?php the_post_thumbnail("large"); ?>
        </div>
      <?php endif; ?>


      <div class="card-text-container">
        <h1 class="card-title">
        <?php esc_html(the_title()); ?>
        </h1>
        <div class="row">
          <div class="col text-center">
            <p class="text-muted">Written by <br>
              <strong> <?php esc_html(the_author()); ?> </strong>
            </p>
            <p>
          </div>

          <div class="col text-center">
            <p class="text-muted"> <?php echo $has_been_modifed
                ? "Last updated"
                : "Created on"; ?> <br>
                <strong><?php esc_html(the_modified_date()); ?></strong>
            </p>
          </div>

        </div>


      <?php the_excerpt(); ?>
      </p>

      <!-- allow link to span the entire card, only display text within the link for accessibilty readers -->
      <h2 class="card-action" aria-hidden>Click to read more</h2>
      <a href="<?php the_permalink(); ?>" class="card-link-overlay">
        <p class="hidden">Click to read more</p>
      </a>

    </div>






</article>
