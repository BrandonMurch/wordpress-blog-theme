<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
    bloginfo("name");
    wp_title();
    ?></title>
    <meta name="description" content="<?php bloginfo("description"); ?>">
    <?php wp_head(); ?>
</head>
<body>

<header>
    <?php get_template_part("partials/templates/svg-border"); ?>
    <nav>
        <div class="search-container">
            <?php get_search_form(); ?>
        </div>

      <div class="logo-container">
        <a class="logo" href="<?php echo site_url(); ?>">
          bm
        </a>
      </div>

      <div class="menu-wrapper">

        <button class="menu-toggle" role="presentation">
          <div class="line"> </div>
          <div class="line"> </div>
          <div class="line"> </div>
        </button>

        <?php wp_nav_menu([
        	"theme_location" => "header",
        	"container_class" => "header-menu",
        	"walker" => new Walker_Nav_Main(),
        ]); ?>
      </div>


    </nav>


    <?php if (is_single()) {
    	get_header("single");
    } ?>

</header>
