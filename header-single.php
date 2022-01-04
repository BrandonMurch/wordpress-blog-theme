<?php
$author_id = get_post_field("post_author");
$author_name =
    get_the_author_meta("first_name", $author_id) .
    " " .
    get_the_author_meta("last_name", $author_id);

$has_been_modifed =
    get_the_time(get_option("date_format")) != get_the_modified_date();
?>

<div class="article-header">
  <h1 class="display-3 article-title"><?php esc_html(the_title()); ?></h1>


  <div class="article-meta-container">
    <div class="article-author">
      <?php if (get_the_author_meta("custom-avatar", $author_id)): ?>
        <img class="article-avatar" src="<?php echo esc_url(
            get_the_author_meta("custom-avatar", $author_id)
        ); ?>" alt="<?php echo $author_name; ?>'s Avatar'">

      <?php endif; ?>

      <p class="article-author-text">

        Written by <br>
         <a class="text-muted" href="<?php echo esc_url(
             get_the_author_meta("url", $author_id)
         ); ?>">
          <strong> <?php echo $author_name; ?> </strong>
        </a>
      </p>
    </div>

    <div class="article-date-container">
      <p class="article-date">Created on <br> <strong><?php echo the_time(
          get_option("date_format")
      ); ?></strong>



      <?php if ($has_been_modifed): ?>
        <p class="article-date">Last updated <br> <strong><?php echo get_the_modified_date(); ?></strong>      </p>
      <?php endif; ?>

    </div>

  </div>
</div>
