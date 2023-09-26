<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <?php wp_head(); ?>

<script src="https://kit.fontawesome.com/ebbc1aa60f.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<script src="https://code.jquery.com/jquery-3.7.0.js"
    integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="block md:hidden flex">
        <div class="logo">
            <a href="<?php echo site_url(); ?>">
                <h1 class="siteName font-courier text-3xl font-thin text-spencer"><?php bloginfo('name'); ?> <span class="slashLine">/</span></h1>
            </a>
        </div>
        <div class="hamburger">
            <i class="fa-solid fa-bars on" id="on"></i>
        </div>
        <div class="alert">
            <ul class="navigation1">
            <i class='bx bxs-x-circle close'></i>
            <?php 
                //query for Hero Page
                $heroQuery = new WP_Query(array(
                    'page_id' => 34,
                    'posts_per_page' => -1,
                ));

                while($heroQuery->have_posts()){
                $heroQuery->the_post(); ?>

                <a href="<?php the_permalink(); ?>">
                <h2 class="navBlogLinks font-courier text-spencer text-base uppercase"><?php the_title(); ?></h2>
                </a>
                <?php
                    }
                ?>
            </ul>
            </i>
        </div>
    </header>