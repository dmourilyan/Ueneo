<?php
/*
 *
 * Set the text domain for the theme or plugin.
 *
 */
define('UeneoTheme_TEXT_DOMAIN', 'ueneotheme');

/*
 *
 * Require the framework class before doing anything else, so we can use the defined URLs and directories.
 * If you are running on Windows you may have URL problems which can be fixed by defining the framework url first.
 *
 */
//define('UeneoTheme_OPTIONS_URL', site_url('path the options folder'));
if(!class_exists('UeneoTheme_Options')){
    require_once(dirname(__FILE__) . '/options/defaults.php');
}

/*
 *
 * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
 * Simply include this function in the child themes functions.php file.
 *
 * NOTE: the defined constansts for URLs, and directories will NOT be available at this point in a child theme,
 * so you must use get_template_directory_uri() if you want to use any of the built in icons
 *
 */
function add_another_section($sections){
    //$sections = array();
    $sections[] = array(
        'title' => __('A Section added by hook', UeneoTheme_TEXT_DOMAIN),
        'desc' => __('<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', UeneoTheme_TEXT_DOMAIN),
		'icon' => 'paper-clip',
		'icon_class' => 'icon-large',
        // Leave this as a blank section, no options just some intro text set above.
        'fields' => array()
    );

    return $sections;
}
//add_filter('ueneotheme-opts-sections-twenty_eleven', 'add_another_section');


/*
 * 
 * Custom function for filtering the args array given by a theme, good for child themes to override or add to the args array.
 *
 */
function change_framework_args($args){
    //$args['dev_mode'] = false;
    
    return $args;
}
//add_filter('ueneotheme-opts-args-twenty_eleven', 'change_framework_args');


/*
 *
 * Most of your editing will be done in this section.
 *
 * Here you can override default values, uncomment args and change their values.
 * No $args are required, but they can be over ridden if needed.
 *
 */
function setup_framework_options(){
    $args = array();

    // Setting dev mode to true allows you to view the class settings/info in the panel.
    // Default: true
    $args['dev_mode'] = false;

	// Set the icon for the dev mode tab.
	// If $args['icon_type'] = 'image', this should be the path to the icon.
	// If $args['icon_type'] = 'iconfont', this should be the icon name.
	// Default: info-sign
	//$args['dev_mode_icon'] = 'info-sign';

	// Set the class for the dev mode tab icon.
	// This is ignored unless $args['icon_type'] = 'iconfont'
	// Default: null
	$args['dev_mode_icon_class'] = 'icon-large';

    // If you want to use Google Webfonts, you MUST define the api key.
    $args['google_api_key'] = 'AIzaSyBC06MPjQ3ZfCuYAPEcW6y0XSWfEMK3wPs';

    // Define the starting tab for the option panel.
    // Default: '0';
    //$args['last_tab'] = '0';

    // Define the option panel stylesheet. Options are 'standard', 'custom', and 'none'
    // If only minor tweaks are needed, set to 'custom' and override the necessary styles through the included custom.css stylesheet.
    // If replacing the stylesheet, set to 'none' and don't forget to enqueue another stylesheet!
    // Default: 'standard'
    //$args['admin_stylesheet'] = 'standard';

    // Add HTML before the form.
    //$args['intro_text'] = __('<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', UeneoTheme_TEXT_DOMAIN);

    // Add content after the form.
   // $args['footer_text'] = __('<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', UeneoTheme_TEXT_DOMAIN);

    // Set footer/credit line.
    //$args['footer_credit'] = __('<p>This text is displayed in the options panel footer across from the WordPress version (where it normally says \'Thank you for creating with WordPress\'). This field accepts all HTML.</p>', UeneoTheme_TEXT_DOMAIN);

    // Setup custom links in the footer for share icons
    /*$args['share_icons']['twitter'] = array(
        'link' => 'http://twitter.com/ghost1227',
        'title' => 'Follow me on Twitter', 
        'img' => UeneoTheme_OPTIONS_URL . 'img/social/Twitter.png'
    );
    $args['share_icons']['linked_in'] = array(
        'link' => 'http://www.linkedin.com/profile/view?id=52559281',
        'title' => 'Find me on LinkedIn', 
        'img' => UeneoTheme_OPTIONS_URL . 'img/social/LinkedIn.png'
    );*/

    // Enable the import/export feature.
    // Default: true
    //$args['show_import_export'] = false;

	// Set the icon for the import/export tab.
	// If $args['icon_type'] = 'image', this should be the path to the icon.
	// If $args['icon_type'] = 'iconfont', this should be the icon name.
	// Default: refresh
	//$args['import_icon'] = 'refresh';

	// Set the class for the import/export tab icon.
	// This is ignored unless $args['icon_type'] = 'iconfont'
	// Default: null
	$args['import_icon_class'] = 'icon-large';

    // Set a custom option name. Don't forget to replace spaces with underscores!
    $args['opt_name'] = 'twenty_eleven2';

    // Set a custom menu icon.
    //$args['menu_icon'] = '';

    // Set a custom title for the options page.
    // Default: Options
    $args['menu_title'] = __('Theme Options', UeneoTheme_TEXT_DOMAIN);

    // Set a custom page title for the options page.
    // Default: Options
    $args['page_title'] = __('Theme Options', UeneoTheme_TEXT_DOMAIN);

    // Set a custom page slug for options page (wp-admin/themes.php?page=***).
    // Default: ueneotheme_options
    $args['page_slug'] = 'theme_options';

    // Set a custom page capability.
    // Default: manage_options
    //$args['page_cap'] = 'manage_options';

    // Set the menu type. Set to "menu" for a top level menu, or "submenu" to add below an existing item.
    // Default: menu
    //$args['page_type'] = 'submenu';

    // Set the parent menu.
    // Default: themes.php
    // A list of available parent menus is available at http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
    //$args['page_parent'] = 'options_general.php';

    // Set a custom page location. This allows you to place your menu where you want in the menu order.
    // Must be unique or it will override other items!
    // Default: null
    //$args['page_position'] = null;

    // Set a custom page icon class (used to override the page icon next to heading)
    //$args['page_icon'] = 'icon-themes';

	// Set the icon type. Set to "iconfont" for Font Awesome, or "image" for traditional.
	// UeneoTheme no longer ships with standard icons!
	// Default: iconfont
	$args['icon_type'] = 'iconfont';

    // Disable the panel sections showing as submenu items.
    // Default: true
    //$args['allow_sub_menu'] = false;
        
    // Set ANY custom page help tabs, displayed using the new help tab API. Tabs are shown in order of definition.
   /* $args['help_tabs'][] = array(
        'id' => 'ueneotheme-opts-1',
        'title' => __('Theme Information 1', UeneoTheme_TEXT_DOMAIN),
        'content' => __('<p>This is the tab content, HTML is allowed.</p>', UeneoTheme_TEXT_DOMAIN)
    );
    $args['help_tabs'][] = array(
        'id' => 'ueneotheme-opts-2',
        'title' => __('Theme Information 2', UeneoTheme_TEXT_DOMAIN),
        'content' => __('<p>This is the tab content, HTML is allowed.</p>', UeneoTheme_TEXT_DOMAIN)
    );*/

    // Set the help sidebar for the options page.                                        
   // $args['help_sidebar'] = __('<p>This is the sidebar content, HTML is allowed.</p>', UeneoTheme_TEXT_DOMAIN);

    $sections = array();

   /* $sections[] = array(
		// UeneoTheme uses the Font Awesome iconfont to supply its default icons.
		// If $args['icon_type'] = 'iconfont', this should be the icon name minus 'icon-'.
		// If $args['icon_type'] = 'image', this should be the path to the icon.
		'icon' => 'paper-clip',
		// Set the class for this icon.
		// This field is ignored unless $args['icon_type'] = 'iconfont'
		'icon_class' => 'icon-large',
        'title' => __('Getting Started', UeneoTheme_TEXT_DOMAIN),
		'desc' => __('<p class="description">This is the description field for this section. HTML is allowed</p>', UeneoTheme_TEXT_DOMAIN),
        // Lets leave this as a blank section, no options just some intro text set above.
        //'fields' => array()
    );*/

    $sections[] = array(
		'icon' => 'wrench',
		'icon_class' => 'icon-large',
        'title' => __('General', UeneoTheme_TEXT_DOMAIN),
        'fields' => array(
            array(
                'id' => '1', // The item ID must be unique
                'type' => 'upload', // Built-in field types include:
                // text, textarea, editor, checkbox, multi_checkbox, radio, radio_img, button_set,
                // select, multi_select, color, date, divide, info, upload
                'title' => __('Logo', UeneoTheme_TEXT_DOMAIN),
                'sub_desc' => __('Upload your logo', UeneoTheme_TEXT_DOMAIN),
                'std' => get_template_directory_uri().'/images/logo.png'
                //'validate' => '', // Built-in validation includes: 
                //  email, html, html_custom, no_html, js, numeric, comma_numeric, url, str_replace, preg_replace
                //'msg' => 'custom error message', // Override the default validation error message for specific fields
                //'std' => '', // This is the default value and is used to set an option on theme activation.
                //'class' => '' // Set custom classes for elements if you want to do something a little different
                //'rows' => '6' // Set the number of rows shown for the textarea. Default: 6
			),
            array(
                'id' => 'retina_logo', // The item ID must be unique
                'type' => 'upload', // Built-in field types include:
                'title' => __('Retina Logo', UeneoTheme_TEXT_DOMAIN),
                'sub_desc' => __('Upload your logo (retina version)', UeneoTheme_TEXT_DOMAIN),
                'std' => get_template_directory_uri().'/images/logo@2x.png'
            ),
            array(
                'id' => 'ut_favicon', 
                'type' => 'upload', 
                'title' => __('Favicon', UeneoTheme_TEXT_DOMAIN),
                'sub_desc' => __('Upload your favicon ( .ico format 16px 16px )', UeneoTheme_TEXT_DOMAIN),
                'std' => get_template_directory_uri().'/images/favicon.ico'
            ),
            array(
                'id' => 'ut_nav_style',
                'type' => 'radio',
                'title' => __('Navigation Style', UeneoTheme_TEXT_DOMAIN), 
                'options' => array('standard' => 'Standard', 'offcanvas' => 'Off Canvas'), // Must provide key => value pairs for select options
                'std' => 'offcanvas'
            ),
            array(
                'id' => 'ut_portfolio_layout',
                'type' => 'radio',
                'title' => __('Portfolio Style', UeneoTheme_TEXT_DOMAIN), 
                'options' => array('fitRows' => 'Standard', 'masonry' => 'Masonry'), // Must provide key => value pairs for select options
                'std' => 'masonry'
            ),

            array(
                'id' => 'ut_portfolio_items_per_row',
                'type' => 'select',
                'title' => __('Portfolio Items Per Row', UeneoTheme_TEXT_DOMAIN), 
                'options' => array(
                    'p2' => 'Two',
                    'p3' => 'Three',
                    'p4' => 'Four',
                    'p5' => 'Five',
                ), 
                'std' => 'p4'
            ),
            array(
                'id' => 'ut_p_t_hover_style',
                'type' => 'select',
                'title' => __('Portfolio And Team Member Hover Style', UeneoTheme_TEXT_DOMAIN), 
                'options' => array(
                    'hover-style-1' => 'Style One',
                    'hover-style-2' => 'Style Two',

                ), 
                'std' => 'hover-style-1'
            ),
            array(
                'id' => 'ut_blog_sidebar',
                'type' => 'radio_img',
                'title' => __('Blog Sidebar', UeneoTheme_TEXT_DOMAIN), 
                'sub_desc' => __('Select the sidebar position for archive pages', UeneoTheme_TEXT_DOMAIN),
                'options' => array(
                    '1' => array('title' => 'Full Width', 'img' => UeneoTheme_OPTIONS_URL . 'img/1col.png'),
                    '2' => array('title' => 'Sidebar Left', 'img' => UeneoTheme_OPTIONS_URL . 'img/2cl.png'),
                    '3' => array('title' => 'Sidebar Right', 'img' => UeneoTheme_OPTIONS_URL . 'img/2cr.png')
                ), 
                'std' => '3'
            ),
            array(
                'id' => 'ut_single_sidebar',
                'type' => 'radio_img',
                'title' => __('Post Sidebar', UeneoTheme_TEXT_DOMAIN), 
                'sub_desc' => __('Select the sidebar position for single post pages', UeneoTheme_TEXT_DOMAIN),
                'options' => array(
                    'none' => array('title' => 'Full Width', 'img' => UeneoTheme_OPTIONS_URL . 'img/1col.png'),
                    'left' => array('title' => 'Sidebar Left', 'img' => UeneoTheme_OPTIONS_URL . 'img/2cl.png'),
                    'right' => array('title' => 'Sidebar Right', 'img' => UeneoTheme_OPTIONS_URL . 'img/2cr.png')
                ), 
                'std' => 'right'
            ),
            array(
                'id' => 'ut_blog_layout',
                'type' => 'radio',
                'title' => __('Blog Layout', UeneoTheme_TEXT_DOMAIN), 
                'options' => array('standard' => 'Standard', 'masonry' => 'Masonry'), // Must provide key => value pairs for select options
                'std' => 'standard'
            ),
            array(
                'id' => 'ut_blog_header', 
                'type' => 'upload', 
                'title' => __('Blog Header Image', UeneoTheme_TEXT_DOMAIN),
                'sub_desc' => __('Upload your blog header image', UeneoTheme_TEXT_DOMAIN),
                'std' => get_template_directory_uri().'/images/header.jpg'
            ),
            array(
                'id' => 'ut_posts_page',
                'type' => 'text',
                'title' => __('Posts Page Heading', UeneoTheme_TEXT_DOMAIN), 
                'sub_desc' => __('Enter the title to be displayed on latest posts page', UeneoTheme_TEXT_DOMAIN),
                'std' => __('Latest Posts', UeneoTheme_TEXT_DOMAIN),
            ),
            array(
                'id' => 'ut_posts_page_sub',
                'type' => 'text',
                'title' => __('Posts Page Sub Heading', UeneoTheme_TEXT_DOMAIN), 
                'sub_desc' => __('Enter the sub heading to be displayed on latest post page', UeneoTheme_TEXT_DOMAIN),
                'std' => __('', UeneoTheme_TEXT_DOMAIN),
            ),

          
           
        )
    );
    
 

    $sections[] = array(
		'icon' => 'font',
		'icon_class' => 'icon-large',
        'title' => __('Typography', UeneoTheme_TEXT_DOMAIN),
        'fields' => array(
            array(
                'id' => 'ut_fonton',
                'type' => 'radio',
                'title' => __('Enable custom google fonts', UeneoTheme_TEXT_DOMAIN), 
                'options' => array('yes' => 'Yes', 'no' => 'No'), // Must provide key => value pairs for select options
                'desc' => __('<p class="description">If google fonts are disabled the default font familys "Montserrat" and "Crimson Text" will be used - these fonts are included in the theme files.<br /> Be sure to select YES if you wish to use a different font.</p>', UeneoTheme_TEXT_DOMAIN),
                'std' => 'no'
            ),
            array(
                'id' => 'ut_body_font',
                'type' => 'google_webfonts',
                'title' => __('Body Font', UeneoTheme_TEXT_DOMAIN), 
                'sub_desc' => __('Select the main body font', UeneoTheme_TEXT_DOMAIN),

            ),
            array(
                'id' => 'ut_heading1_font',
                'type' => 'google_webfonts',
                'title' => __('Heading 1 Font', UeneoTheme_TEXT_DOMAIN), 
                'sub_desc' => __('Select h1 font', UeneoTheme_TEXT_DOMAIN),
           
            ),

            array(
                'id' => 'ut_body_font_size',
                'type' => 'text',
                'title' => __('Body Font Size (px)', UeneoTheme_TEXT_DOMAIN), 
                'sub_desc' => __('Enter body font size - Default is 16', UeneoTheme_TEXT_DOMAIN),
                'std' => '16'
            ),
            array(
                'id' => 'ut_main_nav_font_size',
                'type' => 'text',
                'title' => __('Main Navigation Font Size (px)', UeneoTheme_TEXT_DOMAIN), 
                'sub_desc' => __('Enter main navigation font size - Default is 12', UeneoTheme_TEXT_DOMAIN),
                'std' => '12'
            ),
            array(
                'id' => 'ut_secodary_nav_font_size',
                'type' => 'text',
                'title' => __('Portfolio Filter Button Font Size (px)', UeneoTheme_TEXT_DOMAIN), 
                'sub_desc' => __('Enter portfolio filter buttons font size - Default is 10', UeneoTheme_TEXT_DOMAIN),
                'std' => '10'
            ),
            array(
                'id' => 'ut_page_desc_font_size',
                'type' => 'text',
                'title' => __('Page Description Font Size (px)', UeneoTheme_TEXT_DOMAIN), 
                'sub_desc' => __('Enter the page description font size - Default is 20', UeneoTheme_TEXT_DOMAIN),
                'std' => '20'
            ),
            array(
                'id' => 'ut_h1_font_size',
                'type' => 'text',
                'title' => __('Heading H1 Font Size (px)', UeneoTheme_TEXT_DOMAIN), 
                'sub_desc' => __('Enter heading one font size - Default is 22', UeneoTheme_TEXT_DOMAIN),
                'std' => '22'
            ),
            array(
                'id' => 'ut_h1_uppercase',
                'type' => 'radio',
                'title' => __('Force Heading One To Uppercase', UeneoTheme_TEXT_DOMAIN), 
                'options' => array('text-transform:uppercase;' => 'Yes', ' ' => 'No'), // Must provide key => value pairs for select options
                'desc' => __('<p class="description">Force heading one to uppercase or leave standard.</p>', UeneoTheme_TEXT_DOMAIN),
                'std' => 'text-transform:uppercase;'
            ),
            array(
                'id' => 'ut_h2_font_size',
                'type' => 'text',
                'title' => __('Heading H2 Font Size (px)', UeneoTheme_TEXT_DOMAIN), 
                'sub_desc' => __('Enter heading two font size - Default is 15', UeneoTheme_TEXT_DOMAIN),
                'std' => '15'
            ),
            array(
                'id' => 'ut_h3_font_size',
                'type' => 'text',
                'title' => __('Heading H3 Font Size (px)', UeneoTheme_TEXT_DOMAIN), 
                'sub_desc' => __('Enter heading three font size - Default is 14', UeneoTheme_TEXT_DOMAIN),
                'std' => '14'
            ),
            array(
                'id' => 'ut_h4_font_size',
                'type' => 'text',
                'title' => __('Heading H4 Font Size (px)', UeneoTheme_TEXT_DOMAIN), 
                'sub_desc' => __('Enter heading four font size - Default is 14', UeneoTheme_TEXT_DOMAIN),
                'std' => '14'
            ),
            array(
                'id' => 'ut_h5_font_size',
                'type' => 'text',
                'title' => __('Heading H5 Font Size (px)', UeneoTheme_TEXT_DOMAIN), 
                'sub_desc' => __('Enter heading five font size - Default is 14', UeneoTheme_TEXT_DOMAIN),
                'std' => '14'
            ),
            array(
                'id' => 'ut_h6_font_size',
                'type' => 'text',
                'title' => __('Heading H6 Font Size (px)', UeneoTheme_TEXT_DOMAIN), 
                'sub_desc' => __('Enter heading six font size - Default is 14', UeneoTheme_TEXT_DOMAIN),
                'std' => '12'
            ),
            array(
                'id' => 'ut_mega_font_size',
                'type' => 'text',
                'title' => __('Mega Font Size (px)', UeneoTheme_TEXT_DOMAIN), 
                'sub_desc' => __('Mega font size - Default is 50', UeneoTheme_TEXT_DOMAIN),
                'desc' => __('<p class="description">This size will be assigned to the class "mega"</p> <p class="description"> 
                    <code> example use: <strong> &lth1 class="mega"&gt This is a big font &lt/h1&gt </strong></code></p>', UeneoTheme_TEXT_DOMAIN),
                'std' => '50'
            ),
            array(
                'id' => 'ut_giga_font_size',
                'type' => 'text',
                'title' => __('Giga Font Size (px)', UeneoTheme_TEXT_DOMAIN), 
                'sub_desc' => __('Giga font size - Default is 90', UeneoTheme_TEXT_DOMAIN),
                'desc' => __('<p class="description">This size will be assigned to the class "giga"</p> <p class="description"> 
                    <code> example use: <strong> &lth1 class="giga"&gt This is a realy big font &lt/h1&gt </strong></code></p>', UeneoTheme_TEXT_DOMAIN),
                'std' => '90'
            ),
            array(
                'id' => 'ut_tera_font_size',
                'type' => 'text',
                'title' => __('Tera Font Size (px)', UeneoTheme_TEXT_DOMAIN), 
                'sub_desc' => __('Tera font size - Default is 130', UeneoTheme_TEXT_DOMAIN),
                'desc' => __('<p class="description">This size will be assigned to the class "tera"</p> <p class="description"> 
                    <code> example use: <strong> &lth1 class="tera"&gt This is a huge font &lt/h1&gt </strong></code></p>', UeneoTheme_TEXT_DOMAIN),
                'std' => '120'
            ),
            array(
                'id' => 'ut_h1_spacing',
                'type' => 'text',
                'title' => __('Heading one letter spacing (px)', UeneoTheme_TEXT_DOMAIN), 
                'sub_desc' => __('Enter the heading one letter spacing - Default is 3', UeneoTheme_TEXT_DOMAIN),
                'std' => '4'
            ),
            array(
                'id' => 'ut_mgt_spacing',
                'type' => 'text',
                'title' => __('Mega, Giga and Tera letter spacing (em)', UeneoTheme_TEXT_DOMAIN), 
                'sub_desc' => __('Enter the Mega, Giga and Tera letter spacing - Default is 0', UeneoTheme_TEXT_DOMAIN),
                'std' => '0'
            ),
        )
    );

   
        $sections[] = array(
            'icon' => 'magic',
            'icon_class' => 'icon-large',
            'title' => __('Styling Options', UeneoTheme_TEXT_DOMAIN),
            'fields' => array(
                array(
                    'id' => 'ut_styled_map',
                    'type' => 'checkbox',
                    'switch' => true,
                    'title' => __('Style Google Map', UeneoTheme_TEXT_DOMAIN), 
                    'sub_desc' => __('<p class="description">Use custom map colors or not?</p>', UeneoTheme_TEXT_DOMAIN),
                    'std' => '1',
                ),

               array(
                    'id' => '39',
                    'type' => 'color',
                    'title' => __('Google Map Hue', UeneoTheme_TEXT_DOMAIN), 
                    'desc' => __('<p class="description">Indicates the basic map color.</p>', UeneoTheme_TEXT_DOMAIN),
                    'sub_desc' => __('Select Google map hue', UeneoTheme_TEXT_DOMAIN),
                    'std' => '#000000',
                ),
                array(
                    'id' => '40',
                    'type' => 'text',
                    'title' => __('Google Map Saturation', UeneoTheme_TEXT_DOMAIN), 
                    'desc' => __('<p class="description"> (Value between -100 and 100) indicates the intensity of the basic color.</p>', UeneoTheme_TEXT_DOMAIN),
                    'sub_desc' => __('Enter Google map saturation', UeneoTheme_TEXT_DOMAIN),
                    'std' => '-100',
                ),
                array(
                    'id' => '42',
                    'type' => 'text',
                    'title' => __('Google Map Brightness', UeneoTheme_TEXT_DOMAIN), 
                    'desc' => __('<p class="description"> (Value between -100 and 100) ndicates the percentage change in brightness of the map.</p>', UeneoTheme_TEXT_DOMAIN),
                    'sub_desc' => __('Enter Google map saturation', UeneoTheme_TEXT_DOMAIN),
                    'std' => '-10',
                ),
                 array(
                    'id' => '41',
                    'type' => 'upload',
                    'title' => __('Google Map Marker', UeneoTheme_TEXT_DOMAIN), 
                    'sub_desc' => __('Upload a custom Google map marker', UeneoTheme_TEXT_DOMAIN),
                    'std' => get_template_directory_uri().'/images/marker.png',
                ),
                array(
                    'id' => 'ut_main_color',
                    'type' => 'color',
                    'title' => __('Accent Color', UeneoTheme_TEXT_DOMAIN), 
                    'sub_desc' => __('Select the main accent color', UeneoTheme_TEXT_DOMAIN),
                    'std' => '#181818',
                ),
                array(
                    'id' => 'ut_body_background_color',
                    'type' => 'color',
                    'title' => __('Body Background Color', UeneoTheme_TEXT_DOMAIN), 
                    'sub_desc' => __('Select the body background color', UeneoTheme_TEXT_DOMAIN),
                    'desc' => __('<p class="description">Site wide background color. To set background images or colors for individual sections/pages use the meta box options in the page editor screen.</p>', UeneoTheme_TEXT_DOMAIN),
                    'std' => '#ffffff',
                ),
                array(
                    'id' => 'ut_single_post_background_color',
                    'type' => 'color',
                    'title' => __('Single Post Background Color', UeneoTheme_TEXT_DOMAIN), 
                    'sub_desc' => __('Select the single post background color', UeneoTheme_TEXT_DOMAIN),
                  //  'desc' => __('<p class="description">Site wide background color. To set background images or colors for individual sections/pages use the meta box options in the page editor screen.</p>', UeneoTheme_TEXT_DOMAIN),
                    'std' => '#ffffff',
                ),

                array(
                    'id' => 'ut_nav_color',
                    'type' => 'color',
                    'title' => __('Navigation Bar Color', UeneoTheme_TEXT_DOMAIN), 
                    'sub_desc' => __('Select the navigation bar color', UeneoTheme_TEXT_DOMAIN),
                    'std' => '#ffffff',
                ),

                array(
                    'id' => 'ut_portfolio_single_background_color',
                    'type' => 'color',
                    'title' => __('Portfolio Single Background Color', UeneoTheme_TEXT_DOMAIN), 
                    'sub_desc' => __('Select the background color for the portfolio popup', UeneoTheme_TEXT_DOMAIN),
                    'std' => '#efefef',
                ),
                array(
                    'id' => 'ut_portfolio_single_nav_color',
                    'type' => 'color',
                    'title' => __('Portfolio Single Navigation Color', UeneoTheme_TEXT_DOMAIN), 
                    'sub_desc' => __('Select the color for the portfolio popup navigation bar', UeneoTheme_TEXT_DOMAIN),
                    'std' => '#ffffff',
                ),
                array(
                    'id' => 'ut_footer_color',
                    'type' => 'color',
                    'title' => __('Footer Color', UeneoTheme_TEXT_DOMAIN), 
                    'sub_desc' => __('Select the background color of the footer', UeneoTheme_TEXT_DOMAIN),
                    'std' => '#181818',
                ),
                array(
                    'id' => 'ut_body_font_color',
                    'type' => 'color',
                    'title' => __('Body Font Color', UeneoTheme_TEXT_DOMAIN), 
                    'sub_desc' => __('Select the main font color', UeneoTheme_TEXT_DOMAIN),
                    'std' => '#696969',
                ),
                array(
                    'id' => 'ut_heading_font_color',
                    'type' => 'color',
                    'title' => __('Heading Font Color', UeneoTheme_TEXT_DOMAIN), 
                    'sub_desc' => __('Select the global font color for headings (change individual page heading colors in page options)', UeneoTheme_TEXT_DOMAIN),
                    'std' => '#181818',
                ),
                array(
                    'id' => 'ut_main_nav_font_color',
                    'type' => 'color',
                    'title' => __('Main Navigation Standard Font Color', UeneoTheme_TEXT_DOMAIN), 
                    'sub_desc' => __('Select the main navigation standard font color', UeneoTheme_TEXT_DOMAIN),
                    'std' => '#999999',
                ),
                array(
                    'id' => 'ut_main_nav_active_font_color',
                    'type' => 'color',
                    'title' => __('Main Navigation Active Font Color', UeneoTheme_TEXT_DOMAIN), 
                    'sub_desc' => __('Select the main navigation active font color', UeneoTheme_TEXT_DOMAIN),
                    'std' => '#ffffff',
                ),
                array(
                    'id' => 'ut_link_color',
                    'type' => 'color',
                    'title' => __('Link Color', UeneoTheme_TEXT_DOMAIN), 
                    'sub_desc' => __('Select font color for links', UeneoTheme_TEXT_DOMAIN),
                    'std' => '#181818',
                ),
                array(
                    'id' => 'ut_custom_css',
                    'type' => 'textarea',
                    'title' => __('Custom CSS', UeneoTheme_TEXT_DOMAIN), 
                ),

             
            )
        );

        $sections[] = array(
            'icon' => 'picture',
            'icon_class' => 'icon-large',
            'title' => __('Slider Options', UeneoTheme_TEXT_DOMAIN),
            'fields' => array(
               array(
                    'id' => 'ut_super_play',
                    'type' => 'text',
                    'title' => __('SuperSlides Play', UeneoTheme_TEXT_DOMAIN), 
                    'sub_desc' => __('<p class="description">Home page slider auto play</p>', UeneoTheme_TEXT_DOMAIN),
                    'desc' => __('<p class="description">Auto play speed in milliseconds. Leave empty to disable auto play.</p>', UeneoTheme_TEXT_DOMAIN),
                    'std' => '',
                ),
               /* array(
                    'id' => 'ut_super_pagi',
                    'type' => 'checkbox',
                    'switch' => true,
                    'title' => __('SuperSlides Pagination', UeneoTheme_TEXT_DOMAIN), 
                    'sub_desc' => __('<p class="description">Turn home page slider pagination display on or off</p>', UeneoTheme_TEXT_DOMAIN),
                    'std' => '0',
                ),*/
                array(
                    'id' => 'ut_super_animation',
                    'type' => 'radio',
                    'title' => __('SuperSlides Animation Type', UeneoTheme_TEXT_DOMAIN), 
                    'sub_desc' => __('Select homepage slider animation style', UeneoTheme_TEXT_DOMAIN),
                    'options' => array('fade' => 'Fade', 'slide' => 'Slide'), // Must provide key => value pairs for select options
                    'std' => 'slide'
                ),
                array(
                    'id' => 'ut_super_scroll_text',
                    'type' => 'text',
                    'title' => __('SuperSlides Scroll Down Text', UeneoTheme_TEXT_DOMAIN), 
                    'sub_desc' => __('Enter the scroll down dext to be displayed on SuperSlides', UeneoTheme_TEXT_DOMAIN),
                    'std' => 'Discovery',
                ),
                array(
                    'id' => 'ut_flex_auto_play',
                    'type' => 'checkbox',
                    'switch' => true,
                    'title' => __('Flex Slider Auto Play', UeneoTheme_TEXT_DOMAIN), 
                    'sub_desc' => __('<p class="description">Turn flex slider auto play on or off</p>', UeneoTheme_TEXT_DOMAIN),
                    'std' => '0',
                ),
                array(
                    'id' => 'ut_flex_play_speed',
                    'type' => 'text',
                    'title' => __('Flex Slider Auto Play Speed', UeneoTheme_TEXT_DOMAIN), 
                    'sub_desc' => __('<p class="description">Flex slider auto play speed</p>', UeneoTheme_TEXT_DOMAIN),
                    'desc' => __('<p class="description">The speed of the slideshow cycling, in milliseconds </p>', UeneoTheme_TEXT_DOMAIN),
                    'std' => '1500',
                ),
                array(
                    'id' => 'ut_flex_animation',
                    'type' => 'radio',
                    'title' => __('Flex Slider Animation Type', UeneoTheme_TEXT_DOMAIN), 
                    'sub_desc' => __('Select fade or slide animation types', UeneoTheme_TEXT_DOMAIN),
                    'options' => array('fade' => 'Fade', 'slide' => 'Slide'), // Must provide key => value pairs for select options
                    'std' => 'slide'
                ),
                array(
                    'id' => 'ut_flex_direction',
                    'type' => 'radio',
                    'title' => __('Flex Slider Slide Direction', UeneoTheme_TEXT_DOMAIN), 
                    'sub_desc' => __('Select direction for slide animation', UeneoTheme_TEXT_DOMAIN),
                    'options' => array('horizontal' => 'Horizontal', 'vertical' => 'Vertical'), // Must provide key => value pairs for select options
                    'std' => 'horizontal'
                ),
                array(
                    'id' => 'ut_flex_controll',
                    'type' => 'checkbox',
                    'switch' => true,
                    'title' => __('Flex Slider Pagination', UeneoTheme_TEXT_DOMAIN), 
                    'sub_desc' => __('<p class="description">Turn pagination display on or off</p>', UeneoTheme_TEXT_DOMAIN),
                    'std' => '0',
                ),
                array(
                    'id' => 'ut_testimonials_auto_play',
                    'type' => 'checkbox',
                    'switch' => true,
                    'title' => __('Testimonials Slider Auto Play', UeneoTheme_TEXT_DOMAIN), 
                    'sub_desc' => __('<p class="description">Turn the testimonials slider auto play on or off</p>', UeneoTheme_TEXT_DOMAIN),
                    'std' => '1',
                ),

 
              
            )

        );
        $sections[] = array(
            'icon' => 'group',
            'icon_class' => 'icon-large',
            'title' => __('Social Networks', UeneoTheme_TEXT_DOMAIN),
            'fields' => array(
                array(
                    'id' => 'ut_twitter',
                    'type' => 'text',
                    'title' => __('Twitter Link', UeneoTheme_TEXT_DOMAIN), 
                    'sub_desc' => __('Leave field empty to remove icon', UeneoTheme_TEXT_DOMAIN),
                    'std' => 'http://www.twitter.com'
                ),
                array(
                    'id' => 'ut_facebook',
                    'type' => 'text',
                    'title' => __('Facebook Link', UeneoTheme_TEXT_DOMAIN),
                    'sub_desc' => __('Leave field empty to remove icon', UeneoTheme_TEXT_DOMAIN), 
                    'std' => 'http://www.facebook.com'
                ),
                array(
                    'id' => 'ut_dribbble',
                    'type' => 'text',
                    'title' => __('Dribbble Link', UeneoTheme_TEXT_DOMAIN),
                    'sub_desc' => __('Leave field empty to remove icon', UeneoTheme_TEXT_DOMAIN), 
                    'std' => 'http://www.dribbble.com'
                ),
                array(
                    'id' => 'ut_github',
                    'type' => 'text',
                    'title' => __('Github Link', UeneoTheme_TEXT_DOMAIN),
                    'sub_desc' => __('Leave field empty to remove icon', UeneoTheme_TEXT_DOMAIN), 
                    'std' => ''
                ),
                array(
                    'id' => 'ut_youtube',
                    'type' => 'text',
                    'title' => __('Youtube Link', UeneoTheme_TEXT_DOMAIN),
                    'sub_desc' => __('Leave field empty to remove icon', UeneoTheme_TEXT_DOMAIN), 
                    'std' => ''
                ),
                array(
                    'id' => 'ut_vimeo',
                    'type' => 'text',
                    'title' => __('Vimeo Link', UeneoTheme_TEXT_DOMAIN),
                    'sub_desc' => __('Leave field empty to remove icon', UeneoTheme_TEXT_DOMAIN), 
                    'std' => ''
                ),
                array(
                    'id' => 'ut_instagram',
                    'type' => 'text',
                    'title' => __('Instagram Link', UeneoTheme_TEXT_DOMAIN),
                    'sub_desc' => __('Leave field empty to remove icon', UeneoTheme_TEXT_DOMAIN), 
                    'std' => ''
                ),
                array(
                    'id' => 'ut_pinterest',
                    'type' => 'text',
                    'title' => __('Pinterest Link', UeneoTheme_TEXT_DOMAIN),
                    'sub_desc' => __('Leave field empty to remove icon', UeneoTheme_TEXT_DOMAIN), 
                    'std' => 'http://www.pinterest.com'
                ),
                array(
                    'id' => 'ut_wordpress',
                    'type' => 'text',
                    'title' => __('Wordpress Link', UeneoTheme_TEXT_DOMAIN),
                    'sub_desc' => __('Leave field empty to remove icon', UeneoTheme_TEXT_DOMAIN), 
                    'std' => ''
                ),
                array(
                    'id' => 'ut_google',
                    'type' => 'text',
                    'title' => __('Google Link', UeneoTheme_TEXT_DOMAIN),
                    'sub_desc' => __('Leave field empty to remove icon', UeneoTheme_TEXT_DOMAIN), 
                    'std' => ''
                ),
                array(
                    'id' => 'ut_flickr',
                    'type' => 'text',
                    'title' => __('Flickr Link', UeneoTheme_TEXT_DOMAIN),
                    'sub_desc' => __('Leave field empty to remove icon', UeneoTheme_TEXT_DOMAIN), 
                    'std' => ''
                ),
                array(
                    'id' => 'ut_linkedin',
                    'type' => 'text',
                    'title' => __('Linkedin Link', UeneoTheme_TEXT_DOMAIN),
                    'sub_desc' => __('Leave field empty to remove icon', UeneoTheme_TEXT_DOMAIN), 
                    'std' => ''
                ),
                array(
                    'id' => 'ut_dropbox',
                    'type' => 'text',
                    'title' => __('Dropbox Link', UeneoTheme_TEXT_DOMAIN),
                    'sub_desc' => __('Leave field empty to remove icon', UeneoTheme_TEXT_DOMAIN), 
                    'std' => ''
                ),
                array(
                    'id' => 'ut_tumblr',
                    'type' => 'text',
                    'title' => __('Tumblr Link', UeneoTheme_TEXT_DOMAIN),
                    'sub_desc' => __('Leave field empty to remove icon', UeneoTheme_TEXT_DOMAIN), 
                    'std' => ''
                ),
                array(
                    'id' => 'ut_behance',
                    'type' => 'text',
                    'title' => __('Behance Link', UeneoTheme_TEXT_DOMAIN),
                    'sub_desc' => __('Leave field empty to remove icon', UeneoTheme_TEXT_DOMAIN), 
                    'std' => ''
                ),


              
            )
        );




        $sections[] = array(
            'icon' => 'tasks',
            'icon_class' => 'icon-large',
            'title' => __('Footer Options', UeneoTheme_TEXT_DOMAIN),
            'fields' => array(
                array(
                    'id' => 'ut_footer_content',
                    'type' => 'editor',
                    'title' => __('Footer Content', UeneoTheme_TEXT_DOMAIN), 
                    'sub_desc' => __('Enter content to be displayded in footer', UeneoTheme_TEXT_DOMAIN),
                    'args'   => array(
                        'teeny'            => true,
                        'textarea_rows'    => 10
                    ),
                    'std' => '  
[column_half]
<p><img src="'.get_template_directory_uri().'/images/footer-logo.png'.'" alt="logo-light" /></p>
<p class="underline">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Proin eget tortor risus. 
Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Praesent sapien massa, convallis a pellentesque ne</p>
[contact_details address="300 King Street Melbourne" phone="01 2345 6789" email="Hello@Ueneo.com"]
<h1><em>Opening Hours</em></h1>
<p>Mon-Sat : 8am - 5pm <br> Sun : 8am - 10pm</p>
[/column_half]
                                
[column_half_last]
<h1 class="underline">Contact</h1>
<p>
<em>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar onec rutrum congue</em>
</p>
[contact-form-7 id="4948" title="Contact form 1"]
[/column_half_last]
                            
                            '

                ),
            
            array(
                'id' => 'ut_copyright_text',
                'type' => 'text',
                'title' => __('Footer Copyright Text', UeneoTheme_TEXT_DOMAIN), 
                'sub_desc' => __('Enter the copright text to be displayed in the footer', UeneoTheme_TEXT_DOMAIN),
                'std' => __('Copyright 2014, Example Corporation', UeneoTheme_TEXT_DOMAIN),
            ),
            array(
                'id' => 'ut_footer_social_icons',
                'type' => 'checkbox',
                'switch' => true,
                'title' => __('Social Network Icons In Footer', UeneoTheme_TEXT_DOMAIN), 
                'sub_desc' => __('<p class="description">Turn the footer social network icons display on or off</p>', UeneoTheme_TEXT_DOMAIN),
                'std' => '1',
            ),
              
            )
        );

    $tabs = array();

    if (function_exists('wp_get_theme')){
        $theme_data = wp_get_theme();
        $item_uri = $theme_data->get('ThemeURI');
        $description = $theme_data->get('Description');
        $author = $theme_data->get('Author');
        $author_uri = $theme_data->get('AuthorURI');
        $version = $theme_data->get('Version');
        $tags = $theme_data->get('Tags');
    }else{
        $theme_data = wp_get_theme(trailingslashit(get_stylesheet_directory()) . 'style.css');
        $item_uri = $theme_data['URI'];
        $description = $theme_data['Description'];
        $author = $theme_data['Author'];
        $author_uri = $theme_data['AuthorURI'];
        $version = $theme_data['Version'];
        $tags = $theme_data['Tags'];
     }
    
    $item_info = '<div class="ueneotheme-opts-section-desc">';
    $item_info .= '<p class="ueneotheme-opts-item-data description item-uri">' . __('<strong>Theme URL:</strong> ', UeneoTheme_TEXT_DOMAIN) . '<a href="' . $item_uri . '" target="_blank">' . $item_uri . '</a></p>';
    $item_info .= '<p class="ueneotheme-opts-item-data description item-author">' . __('<strong>Author:</strong> ', UeneoTheme_TEXT_DOMAIN) . ($author_uri ? '<a href="' . $author_uri . '" target="_blank">' . $author . '</a>' : $author) . '</p>';
    $item_info .= '<p class="ueneotheme-opts-item-data description item-version">' . __('<strong>Version:</strong> ', UeneoTheme_TEXT_DOMAIN) . $version . '</p>';
    $item_info .= '<p class="ueneotheme-opts-item-data description item-description">' . $description . '</p>';
    $item_info .= '<p class="ueneotheme-opts-item-data description item-tags">' . __('<strong>Tags:</strong> ', UeneoTheme_TEXT_DOMAIN) . implode(', ', $tags) . '</p>';
    $item_info .= '</div>';

    $tabs['item_info'] = array(
		'icon' => 'info-sign',
		'icon_class' => 'icon-large',
        'title' => __('Theme Information', UeneoTheme_TEXT_DOMAIN),
        'content' => $item_info
    );
    
    if(file_exists(trailingslashit(dirname(__FILE__)) . 'README.html')) {
        $tabs['docs'] = array(
			'icon' => 'book',
			'icon_class' => 'icon-large',
            'title' => __('Documentation', UeneoTheme_TEXT_DOMAIN),
            'content' => nl2br(file_get_contents(trailingslashit(dirname(__FILE__)) . 'README.html'))
        );
    }

    global $UeneoTheme_Options;
    $UeneoTheme_Options = new UeneoTheme_Options($sections, $args, $tabs);

}
add_action('init', 'setup_framework_options', 0);

/*
 * 
 * Custom function for the callback referenced above
 *
 */
function my_custom_field($field, $value) {
    print_r($field);
    print_r($value);
}

/*
 * 
 * Custom function for the callback validation referenced above
 *
 */
function validate_callback_function($field, $value, $existing_value) {
    $error = false;
    $value =  'just testing';
    /*
    do your validation
    
    if(something) {
        $value = $value;
    } elseif(somthing else) {
        $error = true;
        $value = $existing_value;
        $field['msg'] = 'your custom error message';
    }
    */
    
    $return['value'] = $value;
    if($error == true) {
        $return['error'] = $field;
    }
    return $return;
}
