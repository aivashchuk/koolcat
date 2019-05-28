<?php get_header(); ?>

<div class="banner" style="background-image: url(<?php the_field('background_1'); ?>)">
    <div class="content">
        <h1 class="h1">
            <?php the_field('title_1'); ?>
        </h1>
        <div class="text">
            <p>
                <?php the_field('text_1'); ?>
            </p>
        </div>
    </div>
</div>

<div class="slider">
    <div id="carouselIndicators" class="carousel slide" data-ride="carousel" data-interval="100000">
        <div class="carousel-inner">
            <?php
            if( have_rows('slider_1') ):
                $r = 0;
                while ( have_rows('slider_1') ) : the_row(); ?>

                    <div class="carousel-item <?php if ($r == 0): echo "active"; endif; ?>" >
                        <div class="image-block">
                            <img src="<?php the_sub_field('image');?>" class="d-block" alt="...">
                        </div>
                        <div class="slider-info">
                            <h5><?php the_sub_field('title');?></h5>
                            <p><?php the_sub_field('text');?></p>
                        </div>
                    </div>

                 <?php
                $r++;
                endwhile;

            endif;
            ?>
        </div>
        <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/svg/back.svg" alt="">
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/svg/right-arrow.svg" alt="">
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="advantage">
    <div class="d-flex flex-wrap">
        <?php
        if( have_rows('features') ):
            while ( have_rows('features') ) : the_row(); ?>

                <div class="col-12 col-md-6 a-item">
                    <div class="media align-items-center">
                        <img src="<?php the_sub_field('image');?>" alt="">
                        <div class="media-body">
                            <div class="ttl"><?php the_sub_field('title');?></div>
                            <p><?php the_sub_field('text');?></p>
                        </div>
                    </div>
                </div>

                <?php
            endwhile;

        endif;
        ?>
    </div>
</div>

<div class="software d-flex justify-content-center">
    <div class="image">
        <img src="<?php the_field('image_2'); ?>" alt="">
    </div>
    <div class="text">
        <img src="<?php the_field('logo_1'); ?>" alt="">
        <div class="ttl"><?php the_field('title_2'); ?></div>
        <p><?php the_field('text_2'); ?></p>
    </div>
</div>

<div class="owner" style="background-image: url(<?php the_field('photo_desktop'); ?>);">
    <div class="mobile-bg"  style="background-image: url(<?php the_field('photo_mobile'); ?>);">

    </div>
    <div class="d-flex flex-wrap justify-content-end">
        <div class="col-12 col-lg-6">
            <div class="cite">
                <h2>
                    <?php the_field('cite'); ?>
                </h2>
                <div class="sign">
                    <p><?php the_field('description'); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="reviews">
    <h2>Reviewers love our software</h2>
    <div class="d-flex flex-wrap">
        <?php
        if( have_rows('reviews') ):
            while ( have_rows('reviews') ) : the_row(); ?>

                <div class="col-12 col-md-6 single-review">
                    <p><?php the_sub_field('text');?></p>
                    <p class="author"><?php the_sub_field('author');?></p>
                </div>

            <?php
            endwhile;

        endif;
        ?>

    </div>
</div>

<?php include 'form.php' ?>

<?php get_footer(); ?>
