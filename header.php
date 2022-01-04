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
    <svg class="header-border" viewBox="0 220 1440 100" xmlns="http://www.w3.org/2000/svg">
      <path d="M 0,500 C 0,500 0,250 0,250 C 189.86666666666667,259.6 379.73333333333335,269.2 554,253 C 728.2666666666667,236.8 886.9333333333334,194.80000000000004 1032,190 C 1177.0666666666666,185.19999999999996 1308.5333333333333,217.59999999999997 1440,250 C 1440,250 1440,500 1440,500 Z" stroke="none" stroke-width="0"  transform="rotate(-180 720 250)">
      </path>
    </svg>
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

</header>
