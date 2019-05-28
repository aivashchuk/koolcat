<div class="footer-form" style="background-image: url(<?php the_field('bg_form','option'); ?>);">
    <div class="content">
        <h2>
            <?php the_field('title_form','option'); ?>
        </h2>

        <?php echo do_shortcode('[contact-form-7 id="23" title="Contact Footer"]'); ?>

        <div class="text">
            <p><?php the_field('text_form','option'); ?></p>
        </div>
    </div>
</div>