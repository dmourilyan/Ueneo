<?php
/*
Plugin Name: Ueneo Custom Posts
Plugin URI: http://www.webdingo.net/ueneo/
Description: Custom post types for Ueneo
Version: 1.0.0
Author: WebDingo
Author URI: http://www.webdingo.net
*/
function Ueneo_load_custom_post_textdomain() {
	$plugin_dir = basename(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'languages' . DIRECTORY_SEPARATOR ;
	load_plugin_textdomain( 'ueneo-custom-posts', false, $plugin_dir );
}
add_action('plugins_loaded', 'Ueneo_load_custom_post_textdomain');

/*-----------------------------------------------------------------------------------*/
/*	Flex Slider
/*-----------------------------------------------------------------------------------*/
if (!function_exists('ueneo_custom_post_flex_slider')) {
	function ueneo_custom_post_flex_slider() {
		$labels = array(
			'name'               => __( 'Flex Sliders', 'ueneo-custom-posts' ),
			'singular_name'      => __( 'Flex Slider', 'ueneo-custom-posts' ),
			'add_new'            => __( 'Add New', 'ueneo-custom-posts' ),
			'add_new_item'       => __( 'Add New Slide', 'ueneo-custom-posts' ),
			'edit_item'          => __( 'Edit Slide', 'ueneo-custom-posts' ),
			'new_item'           => __( 'New Slide' , 'ueneo-custom-posts'),
			'all_items'          => __( 'All Slides', 'ueneo-custom-posts' ),
			'view_item'          => __( 'View Slide', 'ueneo-custom-posts' ),
			'search_items'       => __( 'Search Sliders', 'ueneo-custom-posts' ),
			'not_found'          => __( 'No sliders found', 'ueneo-custom-posts' ),
			'not_found_in_trash' => __( 'No sliders found in the Trash', 'ueneo-custom-posts' ), 
			'menu_name'          => __( 'Flex Slider' , 'ueneo-custom-posts' )
		);
		$args = array(
			'labels'        => $labels,
			'description'   => __('Flex Slider Slides', 'ueneo-custom-posts'),
			'public'        => true,
			'menu_position' => null,
			'supports'      => array( 'title', 'editor', 'thumbnail' ),
			'exclude_from_search' => true,
		);
		register_post_type( 'flex_slider', $args );	
	}
	add_action( 'init', 'ueneo_custom_post_flex_slider' );
}
/*-----------------------------------------------------------------------------------*/
/*	Super Slider
/*-----------------------------------------------------------------------------------*/

if (!function_exists('ueneo_custom_post_super_slider')) {
	function ueneo_custom_post_super_slider() {
		$labels = array(
			'name'               => __( 'SuperSlides', 'ueneo-custom-posts' ),
			'singular_name'      => __( 'SuperSlides Slide', 'ueneo-custom-posts' ),
			'add_new'            => __( 'Add New', 'ueneo-custom-posts' ),
			'add_new_item'       => __( 'Add New Slide', 'ueneo-custom-posts' ),
			'edit_item'          => __( 'Edit Slide', 'ueneo-custom-posts' ),
			'new_item'           => __( 'New Slide', 'ueneo-custom-posts' ),
			'all_items'          => __( 'All Slides', 'ueneo-custom-posts' ),
			'view_item'          => __( 'View Slide', 'ueneo-custom-posts' ),
			'search_items'       => __( 'Search Slide', 'ueneo-custom-posts' ),
			'not_found'          => __( 'No sliders found', 'ueneo-custom-posts' ),
			'not_found_in_trash' => __( 'No sliders found in the Trash', 'ueneo-custom-posts' ), 
			'menu_name'          => __( 'SuperSlides', 'ueneo-custom-posts')
		);
		$args = array(
			'labels'        => $labels,
			'description'   => __('Super Slider / Home Page Slider Slides', 'ueneo-custom-posts'),
			'public'        => true,
			'menu_position' => null,
			'supports'      => array( 'title', 'editor', 'thumbnail' ),
			'exclude_from_search' => true,
		);
		register_post_type( 'super_slider', $args );	
	}
	add_action( 'init', 'ueneo_custom_post_super_slider' );
}
/*-----------------------------------------------------------------------------------*/
/*	Portfolio
/*-----------------------------------------------------------------------------------*/

if (!function_exists('ueneo_custom_post_portfolio')) {
	function ueneo_custom_post_portfolio() {
		$labels = array(
			'name'               => __( 'Portfolio Items', 'ueneo-custom-posts' ),
			'singular_name'      => __( 'Portfolio Item', 'ueneo-custom-posts' ),
			'add_new'            => __( 'Add New', 'ueneo-custom-posts' ),
			'add_new_item'       => __( 'Add New Item', 'ueneo-custom-posts' ),
			'edit_item'          => __( 'Edit Portfolio Item', 'ueneo-custom-posts' ),
			'new_item'           => __( 'New Portfolio Item', 'ueneo-custom-posts' ),
			'all_items'          => __( 'All Items', 'ueneo-custom-posts' ),
			'view_item'          => __( 'View Item', 'ueneo-custom-posts' ),
			'search_items'       => __( 'Search Portfolios', 'ueneo-custom-posts' ),
			'not_found'          => __( 'No items found', 'ueneo-custom-posts' ),
			'not_found_in_trash' => __( 'No items found in the Trash', 'ueneo-custom-posts' ), 
			'menu_name'          => __( 'Portfolio', 'ueneo-custom-posts')
		);
		$args = array(
			'labels'        => $labels,
			'description'   => __( 'Portfolio Items', 'ueneo-custom-posts'),
			'public'        => true,
			'menu_position' => null,
			'supports'      => array( 'title', 'editor', 'thumbnail' ),
			'exclude_from_search' => true,
		);
		register_post_type( 'portfolios', $args );	
	}
	add_action( 'init', 'ueneo_custom_post_portfolio' );
}

/*-----------------------------------------------------------------------------------*/
/*	Team
/*-----------------------------------------------------------------------------------*/

if (!function_exists('ueneo_custom_post_team')) {
	function ueneo_custom_post_team() {
		$labels = array(
			'name'               => __( 'Team', 'ueneo-custom-posts' ),
			'singular_name'      => __( 'Team Member', 'ueneo-custom-posts' ),
			'add_new'            => __( 'Add New', 'ueneo-custom-posts' ),
			'add_new_item'       => __( 'Add New Team Member', 'ueneo-custom-posts' ),
			'edit_item'          => __( 'Edit Team Member', 'ueneo-custom-posts' ),
			'new_item'           => __( 'New Team Member', 'ueneo-custom-posts' ),
			'all_items'          => __( 'All Team Members', 'ueneo-custom-posts' ),
			'view_item'          => __( 'View Team Member', 'ueneo-custom-posts' ),
			'search_items'       => __( 'Search Team Members', 'ueneo-custom-posts' ),
			'not_found'          => __( 'No members found', 'ueneo-custom-posts' ),
			'not_found_in_trash' => __( 'No members found in the Trash', 'ueneo-custom-posts' ), 
			'menu_name'          => __( 'Team', 'ueneo-custom-posts')
		);
		$args = array(
			'labels'        => $labels,
			'description'   => __( 'Team Members', 'ueneo-custom-posts'),
			'public'        => true,
			'menu_position' => null,
			'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
			'exclude_from_search' => true,
		);
		register_post_type( 'team', $args );	
	}
	add_action( 'init', 'ueneo_custom_post_team' );
}


/*-----------------------------------------------------------------------------------*/
/*	Taxonomies
/*-----------------------------------------------------------------------------------*/

if (!function_exists('Ueneo_create_taxonomies')) {
	function Ueneo_create_taxonomies() {
	    register_taxonomy(
	        'flex_slider_category',
	        'flex_slider',
	        array(
	            'labels' => array(
	                'name' => __('Flex Slider Categories', 'ueneo-custom-posts'),
	                'add_new_item' => __( 'Add New Flex Slider Category', 'ueneo-custom-posts'),
	                'new_item_name' => __( 'New Flex Slider Category', 'ueneo-custom-posts'),
	            ),
	            'show_ui' => true,
	            'show_tagcloud' => false,
	            'hierarchical' => true,
	        )
	    );
	    register_taxonomy(
	        'portfolio_item_category',
	        'portfolios',
	        array(
	            'labels' => array(
	                'name' => __( 'Portfolio Categories', 'ueneo-custom-posts'),
	                'add_new_item' => __( 'Add New Portfolio Category', 'ueneo-custom-posts'),
	                'new_item_name' => __( 'New Portfolio Category', 'ueneo-custom-posts'),
	            ),
	            'show_ui' => true,
	            'show_tagcloud' => false,
	            'hierarchical' => true
	        )
	    );
	}
	add_action( 'init', 'Ueneo_create_taxonomies', 0 );
}

?>