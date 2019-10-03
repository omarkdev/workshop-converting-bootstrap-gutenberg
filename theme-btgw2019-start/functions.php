<?php

/*
 * Let WordPress manage the document title.
 */
add_theme_support( 'title-tag' );

/*
 * Enable support for Post Thumbnails on posts and pages.
 */
add_theme_support( 'post-thumbnails' );

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support( 'html5', array(
    'search-form',
    'gallery',
    'caption',
) );

/**
 * Include primary navigation menu
 */
function theme_nav_init() {
    register_nav_menus( array(
        'primary' => 'Menu Principal',
    ) );
}
add_action( 'init', 'theme_nav_init' );

/**
 * Enqueue scripts and styles.
 */
function theme_scripts_styles() {
    wp_enqueue_style( 'btgw2019-start/style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts_styles' );
