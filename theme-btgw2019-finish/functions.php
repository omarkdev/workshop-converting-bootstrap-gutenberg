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
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'btgw2019-finish/style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), null, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery', 'bootstrap'), null, true);
}
add_action( 'wp_enqueue_scripts', 'theme_scripts_styles' );

/**
 * Disable admin bar
 */
add_filter('show_admin_bar', '__return_false');

// Register Custom Navigation Walker
require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

// The change to filter nav_menu_css_class
function theme_menu_css_class($classes, $item, $args) {
    if($args->theme_location == 'primary') {
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'theme_menu_css_class', 1, 3);

// The change to filter nav_menu_css_class
function theme_menu_link_attrs($atts, $item, $args) {
    if($args->theme_location == 'primary') {
        $atts['class'] = (isset($atts['class']) ? $atts['class'] : '').' nav-link';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'theme_menu_link_attrs', 1, 3);


/**
 * Enqueue front end and editor JavaScript and CSS
 */
function theme_enqueue_block_assets() {
    $blockPath =  get_template_directory_uri() . '/build/index.js';
    $stylePath =  get_template_directory_uri() . '/assets/css/blocks.css';

    wp_enqueue_script(
        'btgw2019-finish/block-js',
        $blockPath,
        [ 'wp-i18n', 'wp-edit-post', 'wp-element', 'wp-editor', 'wp-components', 'wp-data', 'wp-plugins', 'wp-edit-post', 'wp-api' ],
        filemtime( $blockPath )
    );

    wp_enqueue_style(
        'btgw2019-finish/block-css',
        $stylePath,
        '',
        filemtime( $stylePath )
    );
}
add_action('enqueue_block_assets', 'theme_enqueue_block_assets');

function admin_style() {
    wp_enqueue_style('admin-style', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}
add_action('admin_enqueue_scripts', 'admin_style');
