<?php
/**
 * Template Name: Features Template
 */

get_header();
?>


<section class="banner banner-min" style="background-image:url(<?php the_field('bg'); ?>);">
    <div class="container">
        <div class="content d-flex align-items-center justify-content-center">
            <h1>
                <?php the_field('title'); ?>
            </h1>
        </div>
    </div>
</section>

<div class="features-container">
    <?php
    if( have_rows('features') ):
        while ( have_rows('features') ) : the_row(); ?>

            <div class="features-row d-flex flex-wrap justify-content-between">
                <div class="col-12 col-md-6 col-text">
                    <h3><?php the_sub_field('title');?></h3>
                    <h5><?php the_sub_field('subttl');?></h5>
                    <p><?php the_sub_field('text');?></p>
                </div>
                <div class="col-12 col-md-6 col-image">
                    <img src="<?php the_sub_field('image');?>" alt="">
                </div>
            </div>

            <?php
        endwhile;

    endif;
    ?>

</div>

<?php include 'form.php' ?>

<?php get_footer(); ?>
