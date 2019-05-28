<footer class="main-footer">
    <div class="d-flex justify-content-between flex-wrap">
        <div class="col-12 col-md-3 logo">
            <a href="<?php echo get_site_url(); ?>">
                <img src="<?php the_field('logo','option'); ?>" alt="">
            </a>
        </div>
        <div class="col-12 col-md-3 footer-menu">
            <?php wp_nav_menu([
                'menu' => 'menu',
                'container' => 'false'
            ] ); ?>
        </div>
        <div class="col-12 col-md-4 footer-info">
            <div class="ttl">Explore</div>
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
            <div class="ttl">Contact</div>
            <?php $phone = get_field('phone','option');
            $phone = preg_replace('/\D+/', '', $phone);?>
            <a href="tel:<?php echo $phone ?>"><?php the_field('phone','option'); ?></a>
            <a href="mailto:<?php the_field('email','option'); ?>"><?php the_field('email','option'); ?></a>
        </div>
        <div class="col-12 copyright">
            Copyright © <?php echo date('Y'); ?> <?php echo get_bloginfo( 'name' );?>.
        </div>
    </div>
</footer>


</div> <!-- end site container -->

<?php wp_footer(); ?>

</body>
</html>
