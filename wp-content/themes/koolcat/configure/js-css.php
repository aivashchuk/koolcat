<?php
    function _add_jquery()
    {
        wp_deregister_script('jquery');
        wp_enqueue_script('slim', '//code.jquery.com/jquery-3.4.1.slim.min.js', array(), null, true );
    }
    add_action('wp_enqueue_scripts', 'wp-head', 100);
	function _add_javascript()
	{
        wp_enqueue_script('popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), null, true );
		wp_enqueue_script('bootstrap-js', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array(), null, true );
        wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/dist/js/main.js', array(), null, true );
	}
	add_action('wp_enqueue_scripts', '_add_javascript', 100);

	function _add_stylesheets()
	{
        wp_enqueue_style('lato-font', '//fonts.googleapis.com/css?family=Lato:300,400,700&display=swap', array(), null, 'all' );
		wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/dist/css/main.css', array(), null, 'all' );
	}
	add_action('wp_enqueue_scripts', '_add_stylesheets');
