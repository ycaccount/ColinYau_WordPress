<?php

function wpb_add_google_fonts() {

	wp_enqueue_style( 'wpb-google-fonts',
		'https://fonts.googleapis.com/css?family=Quicksand:700|Montserrat:300',
		false );
}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

function my_theme_enqueue_styles() {

	$parent_style = 'twentysixteen-style'; //This is 'twentysixteen-style' for the Twenty Sixteen theme.

	wp_enqueue_style( $parent_style,
		get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version')
	);
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );