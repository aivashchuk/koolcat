<?php
/**
 * Template Name: Contact Template
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

<div class="contact-section">
    <div class="content">
        <h2>
            <?php the_field('title_form','option'); ?>
        </h2>
        <div class="d-flex align-items-center flex-wrap social">
            <?php if(get_field('instagram','option')): ?>
                <a href="<?php the_field('instagram','option'); ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/svg/instagram.svg" alt="">
                </a>
            <?php endif; ?>
            <?php if(get_field('twitter','option')): ?>
                <a href="<?php the_field('twitter','option'); ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/svg/twitter-logo-silhouette.svg" alt="">
                </a>
            <?php endif; ?>
            <?php if(get_field('facebook','option')): ?>
                <a href="<?php the_field('facebook','option'); ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/svg/facebook-logo.svg" alt="">
                </a>
            <?php endif; ?>
            <?php if(get_field('youtube','option')): ?>
                <a href="<?php the_field('youtube','option'); ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/svg/youtube.svg" alt="">
                </a>
            <?php endif; ?>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="23" title="Contact Footer"]'); ?>
        <div class="text">
            <p><?php the_field('text_form','option'); ?></p>
        </div>
    </div>
</div>

<?php get_footer(); ?>
