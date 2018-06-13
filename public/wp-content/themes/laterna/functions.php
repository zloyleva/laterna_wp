<?php

/**
 * Main setup of theme
 */
add_action('after_setup_theme', 'laterna_theme_setup');
function laterna_theme_setup(){
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'left_sidebar' => __('Left sidebar menu'),
        'footer' => __('Footer menu'),
    ));
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'));
    add_theme_support('custom-logo', array(
        'flex-height' => true,
        'flex-width' => true,
    ));
}

/**
 * Load css style and javascript files
 */
add_action('wp_enqueue_scripts', 'load_laterna_theme_scripts');
function load_laterna_theme_scripts(){
    wp_enqueue_style('main-css', get_stylesheet_uri());
    wp_enqueue_style('laterna_bootstrap_styles', get_template_directory_uri() . '/styles/bootstrap.min.css');
    wp_enqueue_style('laterna_theme_styles', get_template_directory_uri() . '/styles/style.css');

    wp_enqueue_script('jquery');

    wp_register_script('bootstrap_script', get_template_directory_uri() . '/scripts/bootstrap.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('bootstrap_script');
    wp_register_script('laterna_theme_script', get_template_directory_uri() . '/scripts/script.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('laterna_theme_script');
}


/**
 * Set translate directory for theme
 */
add_action('after_setup_theme', 'set_translates_for_laterna');
function set_translates_for_laterna(){
    load_theme_textdomain( 'laterna', get_template_directory() . '/languages' );
}

/**
 * localize theme ?lang=en_EN
 */
add_filter( 'locale', 'localize_theme' );
function localize_theme( $locale ) {
    if ( isset( $_GET['lang'] ) ) {
        return esc_attr( $_GET['lang'] );
    }
    return $locale;
}

/**
 * Change drop down menu class
 */
add_filter('nav_menu_submenu_css_class', 'filter_menu_submenu_css_class', 10, 3);
function filter_menu_submenu_css_class($classes, $args, $depth){
    if($args->theme_location == 'primary'){
        $classes = [
            'dropdown-menu'
        ];
    }
    return $classes;
}

/**
 * Change links class
 */
add_filter('nav_menu_link_attributes', 'change_menu_link_attributes', 10, 4);
function change_menu_link_attributes($atts, $item, $args, $depth){
    if($args->theme_location == 'primary'){
        $atts['class']   = 'nav-link';

        if($item->current){
            $atts['class'] .= ' active';
        }
    }
    return $atts;
}

/**
 * Change excerpt's length
 */
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function custom_excerpt_length( $length ) {
    return 20;
}

/**
 * Set excerpt "more"
 */
add_filter( 'excerpt_more', 'excerpt_more' );
function excerpt_more( $more ) {
    return ' [...]';
}