<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function cmb_sample_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';


	$meta_boxes[] = array(
		'id'         => 'page_metabox',
		'title'      => __('Page Options', 'ueneotheme'),
		'pages'      => array( 'page', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => array(
			
			array(
			'name' => __( 'Page Style', 'ueneotheme'),
				'desc' => __( 'Select Page Style', 'ueneotheme'),
				'id'   => $prefix . 'page_style',
				'type' => 'select',
				'options' => array(
					array( 'name' => __('Standard', 'ueneotheme'), 'value' => 'standard', ),
					array( 'name' => __('Half Width Content Left', 'ueneotheme'), 'value' => 'halfwidthleft', ),
					array( 'name' => __('Half Width Content Right', 'ueneotheme'), 'value' => 'halfwidthright', ),
				),
			),

			array(
			'name' => __( 'Heading Style', 'ueneotheme'),
				'desc' => __( 'Select Page Heading Style', 'ueneotheme'),
				'id'   => $prefix . 'heading_style',
				'type' => 'select',
				'options' => array(
					array( 'name' => __('Standard', 'ueneotheme'), 'value' => 'standard', ),
					array( 'name' => __('Underline', 'ueneotheme'), 'value' => 'underline', ),
					array( 'name' => __('No Heading', 'ueneotheme'), 'value' => 'noheading', ),
				),
			),
			array(
			'name' => __( 'Heading Alignment', 'ueneotheme'),
				'desc' => __( 'Select Page Heading Text Alignment', 'ueneotheme'),
				'id'   => $prefix . 'heading_align',
				'type' => 'select',
				'options' => array(
					array( 'name' => __('Left', 'ueneotheme'), 'value' => 'left', ),
					array( 'name' => __('Center', 'ueneotheme'), 'value' => 'center', ),
					array( 'name' => __('Right', 'ueneotheme'), 'value' => 'right', ),
				),
			),
			array(
	            'name' => __('Heading Color', 'ueneotheme'),
	            'desc' => __('Select heading color', 'ueneotheme'),
	            'id'   => $prefix . 'heading_colorpicker',
	            'type' => 'colorpicker',
				'std'  => '#181818'
	        ),		

			array(
	            'name' => __('Background Color', 'ueneotheme'),
	            'desc' => __('Select page background color', 'ueneotheme'),
	            'id'   => $prefix . 'background_colorpicker',
	            'type' => 'colorpicker',
				'std'  => '#ffffff'
	        ),
			array(
				'name' => __('Background Image', 'ueneotheme'),
				'desc' => __('Upload a background image or enter an URL.', 'ueneotheme'),
				'id'   => $prefix . 'background_image',
				'type' => 'file',
			),
			array(
				'name' => __('Page Description', 'ueneotheme'),
				'id'   => $prefix . 'description_text',
				'type' => 'wysiwyg',
			),
		/*	array(
			'name' => __( 'Description Position', 'ueneotheme'),
				'desc' => __( 'Select Page Description Position', 'ueneotheme'),
				'id'   => $prefix . 'description_position',
				'type' => 'select',
				'options' => array(
					array( 'name' => __('Below Title', 'ueneotheme'), 'value' => 'below', ),
					array( 'name' => __('Above Title', 'ueneotheme'), 'value' => 'above', ),
				),
			),*/
			array(
				'name' => __('Padding Top (Pixels)', 'ueneotheme'),
				'id'   => $prefix . 'padding_top',
				'type' => 'text_medium',
				'std' => '100',
			),
			array(
				'name' => __('Padding Bottom (Pixels)', 'ueneotheme'),
				'id'   => $prefix . 'padding_bottom',
				'type' => 'text_medium',
				'std' => '100',
			),



		
		),
	);

	$meta_boxes[] = array(
		'id'         => 'super_slider_metabox',
		'title'      => __('Slide Caption Scoll Animation Presets', 'ueneotheme'),
		'pages'      => array( 'super_slider', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left

		'fields' => array(
			array(
				'name' => __( 'Animtion Style', 'ueneotheme'),
				'id'   => $prefix . 'caption_animation',
				'type' => 'select',
				'options' => array(
					array( 'name' => __('None', 'ueneotheme'), 'value' => '', ),
					array( 'name' => __('Shrink', 'ueneotheme'), 'value' => "data-0='transform:scale(1); top:0px;' data-1400='transform:scale(0.5); top:200px;' ", ),
					array( 'name' => __('Grow', 'ueneotheme'), 'value' => "data-0='transform:scale(1); top:0px;' data-1400='transform:scale(2); top:-200px;' ", ),
					array( 'name' => __('Spin', 'ueneotheme'), 'value' => "data-0='transform:rotate(0deg);' data-1400='transform:rotate(360deg);' ", ),
					array( 'name' => __('Parallax Down', 'ueneotheme'), 'value' => "data-0='transform:translateY(0px);' data-1400='transform:translateY(400px);' ", ),

				),
			),
		)
	);
$categories = get_categories(array('taxonomy' => 'portfolio_item_category'));
	$meta_boxes[] = array(
		'id'         => 'post_header_metabox',
		'title'      => __('Post Options', 'ueneotheme'),
		'pages'      => array( 'post', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		//'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
		'fields' => array(
			array(
				'name' => __('Header Image', 'ueneotheme'),
				'desc' => __('Upload a header image or enter an URL.', 'ueneotheme'),
				'id'   => $prefix . 'header_image',
				'type' => 'file',
			),
			array(
				'name' => __('Sub Heading', 'ueneotheme'),
				'id'   => $prefix . 'single_sub_heading',
				'type' => 'text',
				'std' => '',
			),
			/*array(
			'name' => __( 'Side Bar Position', 'ueneotheme'),
				'desc' => __( 'Select Post Side Bar Position', 'ueneotheme'),
				'id'   => $prefix . 'post_side_bar_position',
				'type' => 'select',
				'options' => array(
					array( 'name' => __('Left', 'ueneotheme'), 'value' => 'left', ),
					array( 'name' => __('Right', 'ueneotheme'), 'value' => 'right', ),
					array( 'name' => __('No Side Bar', 'ueneotheme'), 'value' => 'none', ),
				),
				'std' => 'left',
			),*/

		/*	array(
			    'name' => 'Flex Slider Category',
			    'desc' => 'Select Flex Slider category to show',
			    'id' => $prefix . 'flex_slider',
			    'taxonomy' => 'flex_slider_category', //Enter Taxonomy Slug
			    'type' => 'taxonomy_select',    
			),*/
		)
	);

	//$categories = get_categories(array('taxonomy' => 'portfolio_item_category'));
	$meta_boxes[] = array(
		'id'         => 'team_metabox',
		'title'      => __('Team Member Options', 'ueneotheme'),
		'pages'      => array( 'team', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		//'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
		'fields' => array(
			array(
			    'name' => 'Member Role',
			    //'desc' => 'field description (optional)',
			    //'default' => 'standard value (optional)',
			    'id' => $prefix . 'role',
			    'type' => 'text_medium'
			),
			
			array(
			    'name' => 'Twitter Link',
			    'id' => $prefix . 'twitter_link',
			    'type' => 'text'
			),
			array(
			    'name' => 'Facebook Link',
			    'id' => $prefix . 'facebook_link',
			    'type' => 'text'
			),
			array(
			    'name' => 'Dribbble Link',
			    'id' => $prefix . 'dribbble_link',
			    'type' => 'text'
			),
			array(
			    'name' => 'Github Link',
			    'id' => $prefix . 'github_link',
			    'type' => 'text'
			),
			array(
			    'name' => 'Youtube Link',
			    'id' => $prefix . 'youtube_link',
			    'type' => 'text'
			),
			array(
			    'name' => 'Vimeo Link',
			    'id' => $prefix . 'vimeo_link',
			    'type' => 'text'
			),
			array(
			    'name' => 'Instagram Link',
			    'id' => $prefix . 'instagram_link',
			    'type' => 'text'
			),
			array(
			    'name' => 'Pinterest Link',
			    'id' => $prefix . 'pinterest_link',
			    'type' => 'text'
			),
			array(
			    'name' => 'Wordpress Link',
			    'id' => $prefix . 'wordpress_link',
			    'type' => 'text'
			),
			array(
			    'name' => 'Google Link',
			    'id' => $prefix . 'google_link',
			    'type' => 'text'
			),
			array(
			    'name' => 'Flickr Link',
			    'id' => $prefix . 'flickr_link',
			    'type' => 'text'
			),
			array(
			    'name' => 'Linkedin Link',
			    'id' => $prefix . 'linkedin_link',
			    'type' => 'text'
			),
			array(
			    'name' => 'Dropbox Link',
			    'id' => $prefix . 'dropbox_link',
			    'type' => 'text'
			),
			array(
			    'name' => 'Tumblr Link',
			    'id' => $prefix . 'tumblr_link',
			    'type' => 'text'
			),
			array(
			    'name' => 'Behance Link',
			    'id' => $prefix . 'behance_link',
			    'type' => 'text'
			),

		)
	);



	// Add other metaboxes as needed

	return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'init.php';

}
