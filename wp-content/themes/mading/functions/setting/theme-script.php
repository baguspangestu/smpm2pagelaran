<?php
/*
Nama Tema: mading
Tema URI: http://main-css.com/mading/
Facebook: http://facebook.com/ciussgw
Whatsapp: 0838-1525-1385
Copyright: (c) 2017 main-CSS.com
*/
 
function mading_scripts() {
	// Load our main stylesheet.
	wp_enqueue_style('mading-style', get_stylesheet_uri());

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style('mading-ie', get_template_directory_uri().'/ie.css', array('mading-style'), '20131217');
	wp_enqueue_style('awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.css');
	wp_style_add_data('mading-ie', 'conditional', 'IE');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

	wp_enqueue_script('cycle', get_template_directory_uri().'/js/jquery.slide.js', array('jquery'), '20170529', false);
}
add_action('wp_enqueue_scripts', 'mading_scripts');

?>