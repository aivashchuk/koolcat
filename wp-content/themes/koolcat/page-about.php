<?php
/**
 * Template Name: About Template
 */

get_header();
?>


<section class="banner banner-min" style="background-image:url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>);">
    <div class="container">
        <div class="content d-flex align-items-center justify-content-center">
            <h1>
                <?php the_field('subtitle'); ?>
            </h1>
        </div>
    </div>
</section>

<div class="features-container">
    <h2 class="single-h2"><?php the_title(); ?></h2>
    <div class="content">
        <?php the_content(); ?>
    </div>
    <div class="clearfix"></div>

</div>

<?php get_footer(); ?>
