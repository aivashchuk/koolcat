<?php
/**
 * Template Name: Pricing Template
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

<div class="pricing-columns">
    <div class="d-flex flex-wrap">
        <div class="col-12 col-md-3 info-col">
            <div class="heading d-flex align-items-center justify-content-center">
                <p><?php the_field('plans_description'); ?></p>
            </div>
        </div>
        <div class="col-12 col-md-3 plan-info">
            <div class="heading">
                <h3 class="h3"><?php the_field('plan_name_1'); ?></h3>
                <p><?php the_field('plan_text_1'); ?></p>
                <div class="price">
                    <span class="currency">$</span> <?php the_field('plan_price_1'); ?> <span class="duration">/ MO</span>
                </div>
                <a href="<?php the_field('onboarding_page'); ?>" class="buy">buy now</a>
            </div>
        </div>
        <div class="col-12 info-table d-block d-md-none">
            <?php
            if( have_rows('table') ):
                while ( have_rows('table') ) : the_row(); ?>

                    <div class="d-flex flex-wrap info-table-row">
                        <div class="col-6 text">
                            <p><?php the_sub_field('text');?></p>
                        </div>
                        <div class="col-6 <?php if (get_sub_field('plan_1')) { ?>yes<?php } ?>"></div>
                    </div>

                <?php
                endwhile;

            endif;
            ?>

        </div>
        <div class="col-12 col-md-3 plan-info second">
            <div class="heading">
                <h3 class="h3"><?php the_field('plan_name_2'); ?></h3>
                <p><?php the_field('plan_text_2'); ?></p>
                <div class="price">
                    <span class="currency">$</span> <?php the_field('plan_price_2'); ?> <span class="duration">/ MO</span>
                </div>
                <a href="<?php the_field('onboarding_page'); ?>/#plan-2" class="buy">buy now</a>
            </div>
        </div>
        <div class="col-12 info-table d-block d-md-none">
            <?php
            if( have_rows('table') ):
                while ( have_rows('table') ) : the_row(); ?>

                    <div class="d-flex flex-wrap info-table-row">
                        <div class="col-6 text">
                            <p><?php the_sub_field('text');?></p>
                        </div>
                        <div class="col-6 <?php if (get_sub_field('plan_2')) { ?>yes<?php } ?>"></div>
                    </div>

                <?php
                endwhile;

            endif;
            ?>
        </div>
        <div class="col-12 col-md-3 plan-info third">
            <div class="heading">
                <h3 class="h3"><?php the_field('plan_name_3'); ?></h3>
                <p><?php the_field('plan_text_3'); ?></p>
                <div class="price">
                    <span class="currency">$</span> <?php the_field('plan_price_3'); ?> <span class="duration">/ MO</span>
                </div>
                <a href="<?php the_field('onboarding_page'); ?>/#plan-3" class="buy">buy now</a>
            </div>
        </div>
        <div class="col-12 info-table d-block d-md-none">
            <?php
            if( have_rows('table') ):
                while ( have_rows('table') ) : the_row(); ?>

                    <div class="d-flex flex-wrap info-table-row">
                        <div class="col-6 text">
                            <p><?php the_sub_field('text');?></p>
                        </div>
                        <div class="col-6 <?php if (get_sub_field('plan_3')) { ?>yes<?php } ?>"></div>
                    </div>

                <?php
                endwhile;

            endif;
            ?>
        </div>

    </div>

    <div class="info-table d-none d-md-block">
        <?php
        if( have_rows('table') ):
            while ( have_rows('table') ) : the_row(); ?>

                <div class="d-flex flex-wrap info-table-row">
                    <div class="col-3 text">
                        <p><?php the_sub_field('text');?></p>
                    </div>
                    <div class="col-3 <?php if (get_sub_field('plan_1')) { ?>yes<?php } ?>"></div>
                    <div class="col-3 <?php if (get_sub_field('plan_2')) { ?>yes<?php } ?>"></div>
                    <div class="col-3 <?php if (get_sub_field('plan_3')) { ?>yes<?php } ?>"></div>
                </div>

            <?php
            endwhile;

        endif;
        ?>

    </div>

</div>

<?php include 'form.php' ?>

<?php get_footer(); ?>
