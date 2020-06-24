<?php
	add_action( 'wp_enqueue_scripts', 'setup_static' );

	function setup_static() {
		wp_enqueue_style('style.css', get_stylesheet_uri());
		wp_enqueue_style('main.css', get_template_directory_uri() . '/static/main.css');

		if ( is_front_page() ) {
			wp_enqueue_style('front-page.css', get_template_directory_uri() . '/static/front-page.css');
		}
 	}


	add_action('after_setup_theme', 'setup_primary_menu');

	function setup_primary_menu() {
		register_nav_menu('primary', 'Sidebar Menu');
	}
	
?>