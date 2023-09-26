<?php get_header(); ?>

<?php get_header(); ?>

<section id="hero" class="min-h-full w-screen bg-white py-5">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 lg:gap-10">
            <div class="col-span-1 hidden md:block">
                <div class="header">
                    <a href="<?php echo site_url(); ?>">
                    <h1 class="siteName font-courier text-3xl font-thin text-spencer"><?php bloginfo('name'); ?> <span class="slashLine">/</span></h1>
                    </a>
                </div>
                <div class="blogPosts py-5">
                    <?php 
                        //query for Hero Page
                        $heroQuery = new WP_Query(array(
                            'page_id' => 34,
                            'posts_per_page' => -1,
                        ));

                        while($heroQuery->have_posts()){
                        $heroQuery->the_post(); ?>

                        <a href="<?php the_permalink(); ?>">
                        <h2 class="navBlogLinks font-courier text-spencer text-base py-3 uppercase"><?php the_title(); ?></h2>
                        </a>
                        <?php
                            }
                            wp_reset_postdata();
                        ?>
                </div>
            </div>
            <div class="col-span-2 pt-24 md:pt-0 mx-10 md:mx-10">
                <h1 class="text-3xl font-thin font-courier text-spencer pb-10"><?php the_title(); ?></h1> 
                <div class="text-base font-thin font-courier text-spencer leading-9"><?php the_content(); ?></div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<?php get_footer(); ?>