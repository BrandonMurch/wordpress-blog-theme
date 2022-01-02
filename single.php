<?php get_header(); ?>

<?php
$author_id = get_post_field("post_author");
$author_name =
    get_the_author_meta("first_name", $author_id) .
    " " .
    get_the_author_meta("last_name", $author_id);
?>

<main class="container">

  <?php if (has_post_thumbnail()) {
      the_post_thumbnail("large");
  } ?>

  <h1 class="display-3 article-title"><?php the_title(); ?></h1>

  <div class="row article-meta-container">
    <div class="col article-meta">
      <img class="article-avatar" src="<?php echo esc_url(
          get_the_author_meta("custom-avatar", $author_id)
      ); ?>" alt="<?php echo $author_name; ?>'s Avatar'">

      <p class="text-muted">

        Written by <br>
         <a class="text-muted" href="<?php echo get_the_author_meta(
             "url",
             $author_id
         ); ?>">
          <strong> <?php echo $author_name; ?> </strong>
        </a>
      </p>
    </div>

    <div class="col article-meta">
      <p class="text-muted">Last updated <br> <strong><?php the_modified_date(); ?></strong>
      </p>
    </div>

  </div>
  <?php the_content(); ?>

  <?php get_template_part("socials"); ?>

  <p><?php wp_get_post_tags(); ?></p>

  <?php if (comments_open() || get_comments_number()):
      comments_template();
  endif; ?>

</main>


<?php get_footer(); ?>
