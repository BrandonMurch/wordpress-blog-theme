<?php get_header(); ?>

<?php
$author_id = get_post_field("post_author");
$author_name =
    get_the_author_meta("first_name", $author_id) .
    " " .
    get_the_author_meta("last_name", $author_id);

$has_been_modifed =
    get_the_time(get_option("date_format")) != get_the_modified_date();
?>

<main class="container single-post">

  <?php if (has_post_thumbnail()) {
      the_post_thumbnail("large");
  } ?>

  <h1 class="display-3 article-title"><?php the_title(); ?></h1>

  <div class="article-meta-container">
    <div class="<?php echo $has_been_modifed
        ? "article-author"
        : "article-meta-single"; ?>">
      <?php if (get_the_author_meta("custom-avatar", $author_id)): ?>
        <img class="article-avatar" src="<?php echo esc_url(
            get_the_author_meta("custom-avatar", $author_id)
        ); ?>" alt="<?php echo $author_name; ?>'s Avatar'">

      <?php endif; ?>

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

    <div class="<?php echo $has_been_modifed
        ? "article-date-container"
        : "article-meta-single"; ?>">
      <p class="text-muted article-date">Created on <br> <strong><?php echo the_time(
          get_option("date_format")
      ); ?></strong>



      <?php if ($has_been_modifed): ?>
        <p class="text-muted article-date">Last updated <br> <strong><?php echo get_the_modified_date(); ?></strong>
      <?php endif; ?>
      </p>
    </div>

  </div>
  <?php the_content(); ?>

  <?php get_template_part("socials"); ?>

  <ul>
    <?php
    $tags = wp_get_post_tags();
    foreach ($tags as $tag) {
        echo "<li>" . $tag->name . "</li>";
    }
    ?>
  </ul>


  <?php if (comments_open() || get_comments_number()):
      comments_template();
  endif; ?>

</main>


<?php get_footer(); ?>
