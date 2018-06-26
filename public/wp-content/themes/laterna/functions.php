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

	wp_localize_script( 'laterna_theme_script', 'ajax_data',
		array(
			'call_url' => admin_url('admin-ajax.php'),
			'grow' => 'grow_call_action',
			'getInTouch' => 'get_in_touch_call_action',
			'questionAboutPricing' => 'question_about_pricing_call_action',
			'nonce' => wp_create_nonce('laterna_ajax-nonce')
		)
	);
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

function isVerifyPostQuery(){
	return ! wp_verify_nonce( $_POST['nonce'], 'laterna_ajax-nonce' );
}

function laternaSendMail($subject){
	if( isVerifyPostQuery() ){
		wp_send_json([
			'code' => 422,
			'error' => 'Error send message',
		]);
		wp_die();
	}

	$headers = 'From: Laterna <info@laterna.sk>' . "\r\n" ;
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

	$to = get_option('admin_email'). ', ovv@messinasolutions.com, tlm@messinasolutions.com';

	$name = sanitize_text_field($_POST['name']);
	$messageRequest = sanitize_text_field(isset($_POST['message'])?$_POST['message']:'');
	$email = sanitize_email($_POST['email']);
	$message = "From: name - {$name}, email - {$email}.";
	if($messageRequest){
		$message .= " Message text: {$messageRequest}";
	}
	$message = wordwrap($message, 70, "\r\n");

	mail( $to, $subject, $message, $headers );

	wp_send_json([
		'code' => 200,
		'data' => 'Message was send'
	]);

	wp_die();
}

add_action('wp_ajax_grow_call_action', 'ready_to_grow_callback');
add_action('wp_ajax_nopriv_grow_call_action', 'ready_to_grow_callback');
function ready_to_grow_callback() {
	laternaSendMail('Ready to grow?');
}

add_action('wp_ajax_get_in_touch_call_action', 'get_in_touch_callback');
add_action('wp_ajax_nopriv_get_in_touch_call_action', 'get_in_touch_callback');
function get_in_touch_callback() {
	laternaSendMail('Get In Touch');
}

add_action('wp_ajax_question_about_pricing_call_action', 'question_about_pricing_callback');
add_action('wp_ajax_nopriv_question_about_pricing_call_action', 'question_about_pricing_callback');
function question_about_pricing_callback() {
	laternaSendMail('Question about pricing');
}