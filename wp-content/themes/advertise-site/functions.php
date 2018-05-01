<?php
/**
 * Twenty Fifteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
function advertiseSite_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'advertiseSite_javascript_detection', 0 );

function advertiseSite_scripts() {	


	 wp_dequeue_script('parent_theme_script_handle');
	
    wp_enqueue_script('sortableJs', get_stylesheet_directory_uri() . '/assets/js/sortable.js', array(), null, false);
	//wp_enqueue_script('sortableJs');
	wp_enqueue_script( 'slick', get_stylesheet_directory_uri() . '/assets/js/slick.js',array(), null, false);
	wp_enqueue_script('remodal.js', get_stylesheet_directory_uri() . '/assets/js/remodal.js', array(), null, false);
	wp_enqueue_script('main.js', get_stylesheet_directory_uri() . '/assets/js/main.js',array(), null, false);

//Child Css and Js
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'parent-rtl-style', get_template_directory_uri().'/rtl.css' );
	
	// Load Child stylesheet.
	wp_enqueue_style( 'child-style',get_stylesheet_directory_uri() . '/style.css',array(), null, false);


	// Load the Internet Explorer specific stylesheet.
	//wp_enqueue_style( 'advertiseSite-ie', get_template_directory_uri() . '/assets/css/ie.css', array( 'advertiseSite-style' ), '20141010' );
	//wp_style_add_data( 'advertiseSite-ie', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	//wp_enqueue_style( 'advertiseSite-ie7', get_template_directory_uri() . '/assets/css/ie7.css', array( 'advertiseSite-style' ), '20141010' );
	//wp_style_add_data( 'advertiseSite-ie7', 'conditional', 'lt IE 8' );

}

add_action( 'wp_enqueue_scripts', 'advertiseSite_scripts' );

add_action( 'init', 'create_custom_post_type' );

function create_custom_post_type() {

   $labels = array(
    'name' => __( 'New Advertise' ),
    'singular_name' => __( 'New Advertise' )
    );

    $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'taxliens'),
    );

  register_post_type( 'tax_lien', $args);
}
/**
 * A function used to programmatically create a post in WordPress. The slug, author ID, and title
 * are defined within the context of the function.
 *
 * @returns -1 if the post was never created, -2 if a post with the same title exists, or the ID
 *          of the post if successful.
 */
function programmatically_create_post($post_type) {

	// Initialize the page ID to -1. This indicates no action has been taken.
	$post_id = -1;

	// Setup the author, slug, and title for the post
	$author_id = 1;
	$slug = 'example-post';
	$title = 'My Example Post';

	// If the page doesn't already exist, then create it
	if( null == get_page_by_title( $title ) ) {

		// Set the post ID so that we know the post was created successfully
		$post_id = wp_insert_post(
			array(
				'comment_status'	=>	'closed',
				'ping_status'		=>	'closed',
				'post_author'		=>	$author_id,
				'post_name'		=>	$slug,
				'post_title'		=>	$title,
				'post_status'		=>	'publish',
				'post_type'		=>	$post_type
			)
		);

	// Otherwise, we'll stop
	} else {

    		// Arbitrarily use -2 to indicate that the page with the title already exists
    		$post_id = -2;

	} // end if

} // end programmatically_create_post

//add_filter( 'after_setup_theme', 'programmatically_create_post' );

function advertiseSite_add_adv() {

	if ( isset( $_POST['adv-submission'] ) && '1' == $_POST['adv-submission'] ) {

		programmatically_create_post("add_adv");

	} // end if

} // end my_theme_send_email
add_action( 'init', 'advertiseSite_add_adv' );