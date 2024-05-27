<?php
/**
 * Setup theme
 */
function w010609_lp_theme_setup() {

	register_nav_menus(
		array(
			'main-menu'        => __( 'Main Menu', 'w010609-lp' ),
			'menu-footer'      => __( 'Menu Footer', 'w010609-lp' ),
		)
	);

	add_theme_support( 'menus' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	//add_image_size( 'image-square', 1024, 1024, array( 'center', 'center' ) );

}

add_action( 'after_setup_theme', 'w010609_lp_theme_setup' );

/**
 * Register our sidebars and widgetized areas.
 */
function w010609_lp_theme_footer_widgets_init() {

	register_sidebar(
		array(
			'name'          => 'Footer',
			'id'            => 'footer',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		),
	);

	register_sidebar(
		array(
			'name'          => 'Header Language Switcher',
			'id'            => 'header_ls',
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);

}

add_action( 'widgets_init', 'w010609_lp_theme_footer_widgets_init' );




/**
 * Enqueue styles and scripts
 */
function w010609_lp_theme_enqueue_styles() {

	//Get the theme data
	$the_theme     = wp_get_theme();
	$theme_version = $the_theme->get( 'Version' );

	// Register Theme main style.
	wp_register_style( 'theme-styles', get_template_directory_uri() . '/dist/css/main.css', array(), $theme_version );
	// Enqueue theme stylesheet.
	wp_enqueue_style( 'theme-styles' );
	wp_enqueue_style( 'theme-fonts', 'https://use.typekit.net/evg0ous.css', array(), $theme_version );

	//Wwp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/dist/js/main.js', array( 'jquery' ), $theme_version, false );
	
}

add_action( 'wp_enqueue_scripts', 'w010609_lp_theme_enqueue_styles' );


/**
 * Lowers the metabox priority to 'core' for Yoast SEO's metabox.
 *
 * @param string $priority The current priority.
 *
 * @return string $priority The potentially altered priority.
 */
function w010609_lp_theme_lower_yoast_metabox_priority( $priority ) {
	return 'core';
}

add_filter( 'wpseo_metabox_prio', 'w010609_lp_theme_lower_yoast_metabox_priority' );


// Theme custom template tags.
require get_template_directory() . '/inc/theme-template-tags.php';

// The theme admin settings.
require get_template_directory() . '/inc/theme-admin-settings.php';
