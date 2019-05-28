<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="site-content">

    <div class="site-header">
        <nav class="navbar navbar-expand-md">
            <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
                <img src="<?php the_field('logo','option'); ?>" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <?php wp_nav_menu([
                    'menu' => 'menu',
                    'container' => 'false',
                    'menu_class' => 'navbar-nav'
                ] ); ?>
            </div>
        </nav>
    </div>