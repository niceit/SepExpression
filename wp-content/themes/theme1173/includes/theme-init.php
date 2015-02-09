<?php

add_action( 'after_setup_theme', 'my_setup' );

if ( ! function_exists( 'my_setup' ) ):

function my_setup() {

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// This theme uses post thumbnails
	if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 262, 135, true ); // Normal post thumbnails
		add_image_size( 'slider-post-thumbnail', 940, 446, true ); // Slider Thumbnail
	}

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// custom menu support
	add_theme_support( 'menus' );
	if ( function_exists( 'register_nav_menus' ) ) {
	  	register_nav_menus(
	  		array(
	  		  'header_menu' => 'Header Menu',
	  		  'sidebar_menu' => 'Sidebar Menu',
	  		  'category_menu' => 'Category Menu',
	  		  'footer_menu' => 'Footer Menu'
	  		)
	  	);
	}
}
endif;

// Creates Custom post type
register_post_type('custom', array(
'labels' => array(
						'name' => __( 'Home page' ),
						'singular_name' => __( 'Slide' ),
						'add_new' => __( 'Add New content' ),
						'add_new_item' => __( 'Add New content' ),
						'edit_item' => __( 'Edit contents' ),
						'new_item' => __( 'New content' ),
						'view_item' => __( 'View content' ),
						'not_found' => __( 'Sorry, we couldn\'t find the contents you are looking for.' )
				),
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'menu_position' => 5,
			'has_archive' => true,
			'hierarchical' => true,
			'capability_type' => 'post',
'supports' => array(
'title',
'editor',
'excerpt',
'trackbacks',
'custom-fields',
'comments',
'revisions',
'thumbnail',
'author',
'page-attributes',)
) );

/* Top Banners */
function my_post_type_banners1() {
	register_post_type( 'banners-1',
                array( 
				'label' => __('Top Banners'), 
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => false,
				'menu_position' => 5,
				'supports' => array(
						'title',
						'custom-fields',
						'excerpt',
						'editor',
						'thumbnail')
					) 
				);
}

add_action('init', 'my_post_type_banners1');



/* Center Banners */
function my_post_type_banners2() {
	register_post_type( 'banners-2',
                array( 
				'label' => __('Center Banners'), 
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => false,
				'menu_position' => 5,
				'supports' => array(
						'title',
						'custom-fields',
						'excerpt',
						'editor',
						'thumbnail')
					) 
				);
}

add_action('init', 'my_post_type_banners2');

/* Right Banners */
function my_post_type_banners3() {
	register_post_type( 'banners-3',
                array( 
				'label' => __('Right Banners'), 
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => false,
				'menu_position' => 5,
				'supports' => array(
						'title',
						'custom-fields',
						'excerpt',
						'editor')
					) 
				);
}

add_action('init', 'my_post_type_banners3');



/* Portfolio */
function my_post_type_portfolio() {
	register_post_type( 'portfolio',
                array( 
				'label' => __('Portfolio'), 
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => true,
				'rewrite' => true,
				'hierarchical' => true,
				'menu_position' => 5,
				'supports' => array(
						'title',
						'editor',
						'thumbnail',
						'excerpt',
						'custom-fields',
						'revisions')
					) 
				);
	register_taxonomy('portfoliocat', 'portfolio', array('hierarchical' => true, 'label' => 'Portfolio Categories', 'singular_name' => 'Category'));
}

add_action('init', 'my_post_type_portfolio');


?>