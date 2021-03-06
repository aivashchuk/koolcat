<?php

	// MENUS

	function _custom_theme_register_menu()
	{
  		register_nav_menus(
    		array(
      			'menu-main' => __( 'Menu principal' ),
      			//'menu-footer' => __( 'Menu footer' ),
    		)
  		);
	}
	add_action( 'init', '_custom_theme_register_menu' );

	// IMAGES

	add_theme_support( 'post-thumbnails' );

	function _custom_theme_init_images_size()
	{
		//add_image_size( '424x424', 424, 424, true );
		//add_image_size( '1920', 1920, 9999 );
	}
	add_action( 'init', '_custom_theme_init_images_size' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	// Giving credits
	function remove_footer_admin () {
		echo 'Thème crée par <a href="http://www.olivier-guilleux.com" target="_blank">Olivier Guilleux</a>';
	}
	add_filter('admin_footer_text', 'remove_footer_admin');

	// Move Yoast to bottom
	function yoasttobottom() {
		return 'low';
	}
	add_filter( 'wpseo_metabox_prio', 'yoasttobottom');

	// Remove WP Emoji
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('wp_print_styles', 'print_emoji_styles');

	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );

	// delete wp-embed.js from footer
	function my_deregister_scripts(){
		wp_deregister_script( 'wp-embed' );
	}
	add_action( 'wp_footer', 'my_deregister_scripts' );

	// delete jquery migrate
	function dequeue_jquery_migrate( &$scripts){
		if(!is_admin()){
			$scripts->remove( 'jquery');
			$scripts->add( 'jquery', false, array( 'jquery-core' ), '1.12.4', true );
		}
	}
	add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );

	// force all scripts to load in footer
	function clean_header() {
		remove_action('wp_head', 'wp_print_scripts');
		remove_action('wp_head', 'wp_print_head_scripts', 9);
		remove_action('wp_head', 'wp_enqueue_scripts', 1);
	}
	add_action('wp_enqueue_scripts', 'clean_header');

	// add SVG to allowed file uploads
	function add_file_types_to_uploads($file_types){

		$new_filetypes = array();
		$new_filetypes['svg'] = 'image/svg+xml';
		$file_types = array_merge($file_types, $new_filetypes );

		return $file_types;
	}
	add_action('upload_mimes', 'add_file_types_to_uploads');

    if( function_exists('acf_add_options_page') ) {

        acf_add_options_page(array(
            'page_title' 	=> 'Theme General Settings',
            'menu_title'	=> 'Theme Settings',
            'menu_slug' 	=> 'theme-general-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        ));

    }

    function cc_mime_types($mimes) {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }
    add_filter('upload_mimes', 'cc_mime_types');

add_action('init', 'create_post_type_features');
function create_post_type_features()
{
    register_post_type('feature', // Register Custom Post Type
        array(
            'labels' => array(
                'name' => __('Features', 'html5blank'),
                'singular_name' => __('Feature', 'html5blank'),
                'add_new' => __('Add New', 'html5blank'),
                'add_new_item' => __('Add New', 'html5blank'),
                'edit' => __('Edit', 'html5blank'),
                'edit_item' => __('Edit', 'html5blank'),
                'new_item' => __('New', 'html5blank'),
                'view' => __('View', 'html5blank'),
                'view_item' => __('View', 'html5blank'),
                'search_items' => __('Search', 'html5blank'),
                'not_found' => __('No found', 'html5blank'),
                'not_found_in_trash' => __('No found in Trash', 'html5blank')
            ),
            'public' => true,
            'hierarchical' => true,
            'has_archive' => false,
            'publicly_queryable'  => true,
            'menu_icon'  => 'dashicons-portfolio',
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'thumbnail'
            ),
            'can_export' => true
        ));
}