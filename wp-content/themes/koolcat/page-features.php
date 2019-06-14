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
    $args = array(
        'post_type'   => 'feature',
        'order' => 'ASC',
        'posts_per_page' => '-1'
    );

    $features = new WP_Query( $args );
    if( $features->have_posts() ) :
        ?>
        <?php
        while( $features->have_posts() ) :
            $features->the_post();
            ?>

            <div class="features-row d-flex flex-wrap justify-content-between">
                <div class="col-12 col-md-6 col-text">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <h5><?php the_field('subtitle');?></h5>
                    <p><?php the_excerpt();?></p>
                </div>
                <a href="<?php the_permalink(); ?>" class="col-12 col-md-6 col-image">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="">
                </a>
            </div>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
    <?php endif;
    ?>
<!--    --><?php
//    if( have_rows('features') ):
//        while ( have_rows('features') ) : the_row(); ?>
<!---->
<!--            <div class="features-row d-flex flex-wrap justify-content-between">-->
<!--                <div class="col-12 col-md-6 col-text">-->
<!--                    <h3>--><?php //the_sub_field('title');?><!--</h3>-->
<!--                    <h5>--><?php //the_sub_field('subttl');?><!--</h5>-->
<!--                    <p>--><?php //the_sub_field('text');?><!--</p>-->
<!--                </div>-->
<!--                <div class="col-12 col-md-6 col-image">-->
<!--                    <img src="--><?php //the_sub_field('image');?><!--" alt="">-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            --><?php
//        endwhile;
//
//    endif;
//    ?>

</div>

<?php get_footer(); ?>
