<?php 

// Include scripts
function awesome_script_enqueue() {

	// CSS
	wp_enqueue_style("bootstrap", get_template_directory_uri() . "/assets/bootstrap/css/bootstrap.min.css", array(), '4.3.0', 'all');
	wp_enqueue_style("customstyle", get_template_directory_uri() . "/css/awesome.css", array(), '1.0.0', 'all');

	// Javascript
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/awesome.js', array('jquery'), '1.0.0', true);
}

add_action( 'wp_enqueue_scripts' , "awesome_script_enqueue" );

// Activate Menues
function awesome_theme_setup(){

	add_theme_support( 'menus' );

	register_nav_menu( 'primary', 'Primary Header Navigation' );
	register_nav_menu( 'secondary', 'Footer Navigation' );

}

add_action( 'init', 'awesome_theme_setup' );

// activate theme support
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', array( 'aside', 'image', 'video') );
add_theme_support( 'html5', array( 'search-form' ) );

// Widgets Setup
function awesome_widget_setup(){

	register_sidebar(
		array(
			"name" => "Sidebar",
			"id" 	=> "sidebar-1",
			"class"	=> "custom",
			"description" => "Standard Sidebar",
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
	        'after_widget'  => "</li>\n",
	        'before_title'  => '<h2 class="widgettitle">',
	        'after_title'   => "</h2>\n",
		)
	);

}

add_action( "widgets_init", "awesome_widget_setup" );
