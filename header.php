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
    <div class="logo-container">
      <a class="logo" href="<?php echo site_url(); ?>">
        bm
      </a>


    </div>
</header>
