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

<header class="header">
    <svg class="header-border" viewBox="0 530 900 70" xmlns="http://www.w3.org/2000/svg"  version="1.1">
      <path d="M0 545L30 544.2C60 543.3 120 541.7 180 543.2C240 544.7 300 549.3 360 555.5C420 561.7 480 569.3 540 574.2C600 579 660 581 720 579C780 577 840 571 870 568L900 565L900 601L870 601C840 601 780 601 720 601C660 601 600 601 540 601C480 601 420 601 360 601C300 601 240 601 180 601C120 601 60 601 30 601L0 601Z"></path>
    </svg>
    <nav>
      <div class="logo-container">
        <a class="logo" href="<?php echo site_url(); ?>">
          bm
        </a>
      </div>

      <?php wp_nav_menu([
          "theme_location" => "header",
          "container_class" => "header-menu",
      ]); ?>

      <div class="search-container">
        <?php get_search_form(); ?>
      </div>
    </nav>


    <?php if (is_single()) {
        get_header("single");
    } ?>

</header>
