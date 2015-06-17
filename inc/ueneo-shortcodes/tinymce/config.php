<?php


/*-----------------------------------------------------------------------------------*/
/*	Columns Config
/*-----------------------------------------------------------------------------------*/
$ueneo_shortcodes['columns'] = array(
	'params' => array(),
	'shortcode' => ' {{child_shortcode}} ',
	'popup_title' => 'Insert Columns Shortcode',
	'no_preview' => true,
	'child_shortcode' => array(
		'params' => array(
			'column' => array(
				'type' => 'select',
				'label' => 'Column Type',
				'desc' => 'Select the type, ie width of the column.',
				'options' => array(
					'column_full' => 'Full Width',
					'column_third' => 'One Third',
					'column_third_last' => 'One Third Last',
					'column_two_thirds' => 'Two Thirds',
					'column_two_thirds_last' => 'Two Thirds Last',
					'column_half' => 'One Half',
					'column_half_last' => 'One Half Last',
					'column_quarter' => 'One Quarter',
					'column_quarter_last' => 'One Quarter Last',
					'column_three_quarter' => 'Three Quarters',
					'column_three_quarter_last' => 'Three Quarters Last',
					'column_fifth' => 'One Fifth',
					'column_fifth_last' => 'One Fifth Last',

				
				)
			),
			'content' => array(
				'std' => '',
				'type' => 'textarea',
				'label' => 'Column Content',
				'desc' => 'Add the column content.',
			)
		),
		'shortcode' => '[{{column}}] {{content}} [/{{column}}] ',
		'clone_button' => 'Add Column',
	)
);

/*-----------------------------------------------------------------------------------*/
/*	Button Config
/*-----------------------------------------------------------------------------------*/
$ueneo_shortcodes['button'] = array(
	'no_preview' => true,
	'params' => array(
		'link' => array(
			'type' => 'text',
			'label' => 'Link',
			'desc' => 'Enter the buttons URL. For in page links use #page-title eg - #about (use lowercase letters replace spaces with hyphens)',
			'std' => '#About',
		),
		'color' => array(
			'type' => 'select',
			'label' => 'Button Color',
			'desc' => 'Select Button Color',
			'options' => array(
					'colored' => 'Accent Color',
					'light' => 'White',
					'dark' => 'Black',
				),
		),
		'style' => array(
			'type' => 'select',
			'label' => 'Button Style',
			'desc' => 'Select Button Style',
			'options' => array(
					'outline' => 'Outline',
					'solid' => 'Solid',
				),
		),
		'size' => array(
			'type' => 'select',
			'label' => 'Button Size',
			'desc' => 'Select Button Size',
			'options' => array(
					'large' => 'Large',
					'small' => 'Small',
				),
		),
		'label' => array(
			'type' => 'text',
			'label' => 'Button Label',
			'desc' => 'Enter the button label',
			'std' => '',
		),
	),
	'shortcode' => '[button link="{{link}}" color="{{color}}" style="{{style}}" size="{{size}}"]{{label}}[/button]',
	'popup_title' => 'Insert Button Shortcode',
);

/*-----------------------------------------------------------------------------------*/
/*	Skill Config
/*-----------------------------------------------------------------------------------*/
$ueneo_shortcodes['skill'] = array(
	'no_preview' => true,
	'params' => array(
		'name' => array(
			'type' => 'text',
			'label' => 'Skill',
			'desc' => 'Add a title to go above the skill rating bar',
			'std' => 'Skill',
		),
		'level' => array(
			'type' => 'text',
			'label' => 'Skill Level',
			'desc' => 'Add the level of skill between 0% and 100%',
			'std' => '100',
		),
	),
	'shortcode' => '[skill name="{{name}}" level="{{level}}"]',
	'popup_title' => 'Insert Skill Rating Bar Shortcode',
);



/*-----------------------------------------------------------------------------------*/
/*	CSS Animation Config
/*-----------------------------------------------------------------------------------*/
$ueneo_shortcodes['cssAnimation'] = array(
	'no_preview' => true,
	'params' => array(
		'style' => array(
			'type' => 'select',
			'label' => 'Animation Style',
			'desc' => 'Select animation type',
			'options' => array(
					'fadeIn' => 'Fade In',
					'slideInUp' => 'Slide In Up',
					'slideInDown' => 'Slide In Down',
					'slideInLeft' => 'Slide In Left',
					'slideInRight' => 'Slide In Right',
					'flipInX' => 'Flip In Vertical',
					'flipInY' => 'Flip In Horizontal',
			),
		),

	),
	'shortcode' => '[css_animation style="{{style}}"][/css_animation]',
	'popup_title' => 'Insert CSS Animation Shortcode',
);

      

/*-----------------------------------------------------------------------------------*/
/*	Recent Posts Config
/*-----------------------------------------------------------------------------------*/
$ueneo_shortcodes['recentPosts'] = array(
	'no_preview' => true,
	'params' => array(
		'numPosts' => array(
			'type' => 'text',
			'label' => 'Number of posts',
			'desc' => 'Add the number of posts to show',
			'std' => '3'
		),
		'excerptWords' => array(
			'type' => 'text',
			'label' => 'Excerpt Words',
			'desc' => 'Add the amount of words for auto generated excerpts',
			'std' => '75',
		),
		'style' => array(
			'type' => 'select',
			'label' => 'Style',
			'desc' => '',
			'options' => array(
					'standard' => 'Standard',
					'light' => 'Light',
				
			),
		),
		'align' => array(
			'type' => 'select',
			'label' => 'Align',
			'desc' => '',
			'options' => array(
					'left' => 'Left',
					'center' => 'Center',
					'right' => 'Right',
				
			),
		),
	),
	'shortcode' => '[recent_posts num_posts="{{numPosts}}" excerpt_words="{{excerptWords}}" style="{{style}}" align="{{align}}"]',
	'popup_title' => 'Insert Recent Posts Shortcode',
);


/*-----------------------------------------------------------------------------------*/
/*	Flex Slider Config
/*-----------------------------------------------------------------------------------*/
$ueneo_shortcodes['flexSlider'] = array(
	'no_preview' => true,
	'params' => array(
		'cat' => array(
			'type' => 'text',
			'label' => 'Flex Slider Category',
			'desc' => 'Enter the flex slider post category to show',
			'std' => '',
		),
	),
	'shortcode' => '[flex_slider cat="{{cat}}"]',
	'popup_title' => 'Insert Recent Posts Shortcode',
);

/*-----------------------------------------------------------------------------------*/
/*	Portfolio Config
/*-----------------------------------------------------------------------------------*/
$ueneo_shortcodes['portfolio'] = array(
	'no_preview' => true,
	'params' => array(
		'filterAlign' => array(
			'type' => 'select',
			'label' => 'Filter Align',
			'desc' => 'Select filter alignment',
			'options' => array(
					'left' => 'Left',
					'center' => 'Center',
					'right' => 'Right',
	
			),
		),
	),
	'shortcode' => '[portfolio filter_align="{{filterAlign}}"]',
	'popup_title' => 'Insert Portfolio Shortcode',
);

/*-----------------------------------------------------------------------------------*/
/*	Full Width Section Config
/*-----------------------------------------------------------------------------------*/
$ueneo_shortcodes['fullWidthSection'] = array(
	'no_preview' => true,
	'params' => array(
		'background' => array(
			'type' => 'text',
			'label' => 'Background Image',
			'desc' => 'Enter the background image URL',
			'std' => '',
		),
		'height' => array(
			'type' => 'text',
			'label' => 'Height',
			'desc' => 'Enter the parallax section height in pixels (eg. 450px)',
			'std' => '450px',
		),

	),
	'shortcode' => '[full_width_section height="{{height}}" background="{{background}}" ][/full_width_section]',
	'popup_title' => 'Insert Full Width Section Shortcode',
);

/*-----------------------------------------------------------------------------------*/
/*	Masked Image Config
/*-----------------------------------------------------------------------------------*/
$ueneo_shortcodes['maskedImage'] = array(
	'no_preview' => true,
	'params' => array(
		'background' => array(
			'type' => 'text',
			'label' => 'Background Image',
			'desc' => 'Enter the background image URL',
			'std' => '',
		),
		'mask' => array(
			'type' => 'text',
			'label' => 'Image Mask',
			'desc' => 'Enter the image mask URL(transparent .png)',
			'std' => '',
		),

	),
	'shortcode' => '[masked_image background="{{background}}" mask="{{mask}}"]',
	'popup_title' => 'Insert Masked Image Shortcode',
);

/*-----------------------------------------------------------------------------------*/
/*	Parallax Background Config
/*-----------------------------------------------------------------------------------*/
$ueneo_shortcodes['parallaxBackground'] = array(
	'no_preview' => true,
	'params' => array(
		'background' => array(
			'type' => 'text',
			'label' => 'Background Image',
			'desc' => 'Enter the background image URL',
			'std' => '',
		),
	),
	'shortcode' => '[parallax_background background="{{background}}"][/parallax_background]',
	'popup_title' => 'Insert Parallax Background Shortcode',
);
/*-----------------------------------------------------------------------------------*/
/*	Google Map Config
/*-----------------------------------------------------------------------------------*/
$ueneo_shortcodes['googleMap'] = array(
	'no_preview' => true,
	'params' => array(
		'title' => array(
			'type' => 'text',
			'label' => 'Map Title',
			'desc' => 'Enter the map title',
			'std' => 'Envato Office',
		),
		'location' => array(
			'type' => 'text',
			'label' => 'Location',
			'desc' => 'Enter Map Address',
			'std' => '2 Elizabeth St, Melbourne Victoria 3000 Australia',
		),
		'zoom' => array(
			'type' => 'text',
			'label' => 'Zoom',
			'desc' => 'Enter the defaut zoom level',
			'std' => '10',
		),
		'height' => array(
			'type' => 'text',
			'label' => 'Height',
			'desc' => 'Enter the map height in pixels',
			'std' => '350',
		),
	
	),
	'shortcode' => '[google_map title="{{title}}" location="{{location}}" zoom="{{zoom}}" height="{{height}}" ]',
	'popup_title' => 'Insert Google Map shortcode',
);


/*-----------------------------------------------------------------------------------*/
/*	Contact Details Config
/*-----------------------------------------------------------------------------------*/
$ueneo_shortcodes['contactDetails'] = array(
	'no_preview' => true,
	'params' => array(
		'address' => array(
			'type' => 'text',
			'label' => 'Address',
			'desc' => '',
			'std' => '',
		),
		'phone' => array(
			'type' => 'text',
			'label' => 'Phone Number',
			'desc' => '',
			'std' => '',
		),
		'email' => array(
			'type' => 'text',
			'label' => 'Email Address',
			'desc' => '',
			'std' => '',
		),

	
	),
	'shortcode' => '[contact_details address="{{address}}" phone="{{phone}}" email="{{email}}"]',
	'popup_title' => 'Insert Contact Details Shortcode',
);



/*-----------------------------------------------------------------------------------*/
/*	Testimonial Slider Config
/*-----------------------------------------------------------------------------------*/
$ueneo_shortcodes['testimonialsSlider'] = array(

    'no_preview' => true,
    'shortcode' => '[testimonials_slider] {{child_shortcode}}  [/testimonials_slider]',
    'popup_title' => 'Testimonials Slider Shortcode', 
    
    'child_shortcode' => array(
        'params' => array(
            'image' => array(
                'std' => '',
                'type' => 'text',
                'label' => 'Testimonial Image',
                'desc' => 'Enter the URL for testimonial avatar', 
            ),
            'name' => array(
                'std' => '',
                'type' => 'text',
                'label' => 'Name',
                'desc' => 'Enter the name of the testimonial author', 
            ),
            'company' => array(
                'std' => '',
                'type' => 'text',
                'label' => 'Company',
                'desc' => 'Enter the company of the testimonial author',
            ),
            'content' => array(
                'std' => '',
                'type' => 'textarea',
                'label' => 'Quote',
                'desc' => 'Add the quote content',
            )
        ),
        'shortcode' => '[testimonial image="{{image}}" name="{{name}}" company="{{company}}"] {{content}} [/testimonial]',
        'clone_button' => 'Add Testimonial', 
    )
);



/*-----------------------------------------------------------------------------------*/
/*	Pricing Table Config
/*-----------------------------------------------------------------------------------*/
$ueneo_shortcodes['pricingTable'] = array(
	'no_preview' => true,
	'params' => array(

		'featured' => array(
			'type' => 'select',
			'label' => 'Featured?',
			'desc' => '',
			'options' => array(
					'yes' => 'Yes',
					'no' => 'No',
			),
		),
		'plan' => array(
			'type' => 'text',
			'label' => 'Plan',
			'std' => 'Basic',
			'desc' => '',
		),
		'cost' => array(
			'type' => 'text',
			'label' => 'Cost',
			'std' => '10',
			'desc' => '',
		),
		'currency' => array(
			'type' => 'text',
			'label' => 'Currency',
			'std' => '$',
			'desc' => '',
		),
		'button_text' => array(
			'type' => 'text',
			'label' => 'Button Text',
			'std' => 'Buy Now',
			'desc' => '',
		),
		'button_url' => array(
			'type' => 'text',
			'label' => 'Button URL',
			'std' => 'http://www.google.com',
			'desc' => '',
		),
		'button_link_target' => array(
			'type' => 'select',
			'label' => 'Button Link Target',
			'desc' => '',
			'options' => array(
					'_self' => 'Self',
					'_blank' => 'Blank',
			),
		),

	),

	'shortcode' => '[pricing_table featured="{{featured}}" plan="{{plan}}" cost="{{cost}}" currency="{{currency}}" button_text="{{button_text}}" button_url="{{button_url}}" button_link_target="{{button_link_target}}"]{{child_shortcode}}[/pricing_table]',
	'popup_title' => 'Insert Pricing Table',

	'child_shortcode' => array(
        'params' => array(
	        
            'features' => array(
                'std' => '',
                'type' => 'text',
                'label' => 'Feature',
                'desc' => '',
            )
        ),
        'shortcode' => '[feature] {{features}} [/feature]',
        'clone_button' => 'Add Feature', 
    )
);

/*-----------------------------------------------------------------------------------*/
/*	Icon box Config
/*-----------------------------------------------------------------------------------*/
$ueneo_shortcodes['iconBox'] = array(
	'no_preview' => true,
	'params' => array(
		'icon' => array(
			'type' => 'select',
			'label' => 'Icon',
			'desc' => 'Select Icon',
			'options' => array(
					'fa-adjust' => '&#xf042; Adjust',
					'fa-adn' => '&#xf170; Adn',
					'fa-align-center' => '&#xf037; Align Center',
					'fa-align-justify' => '&#xf039; Align Justify',
					'fa-align-left' => '&#xf036; Align Left',
					'fa-align-right' => '&#xf038; Align Right',
					'fa-ambulance' => '&#xf0f9; Ambulance',
					'fa-anchor' => '&#xf13d; Anchor',
					'fa-android' => '&#xf17b; Android',
					'fa-angle-double-down' => '&#xf103; Angle Double Down',
					'fa-angle-double-left' => '&#xf100; Angle Double Left',
					'fa-angle-double-right' => '&#xf101; Angle Double Right',
					'fa-angle-double-up' => '&#xf102; Angle Double Up',
					'fa-angle-down' => '&#xf107; Angle Down',
					'fa-angle-left' => '&#xf104; Angle Left',
					'fa-angle-right' => '&#xf105; Angle Right',
					'fa-angle-up' => '&#xf106; Angle Up',
					'fa-apple' => '&#xf179; Apple',
					'fa-archive' => '&#xf187; Archive',
					'fa-arrow-circle-down' => '&#xf0ab; Arrow Circle Down',
					'fa-arrow-circle-left' => '&#xf0a8; Arrow Circle Left',
					'fa-arrow-circle-o-down' => '&#xf01a; Arrow Circle O Down',
					'fa-arrow-circle-o-left' => '&#xf190; Arrow Circle O left',
					'fa-arrow-circle-o-right' => '&#xf18e; Arrow Circle O Right',
					'fa-arrow-circle-o-up' => '&#xf01b; Arrow Circle O Up',
					'fa-arrow-circle-right' => '&#xf0a9; Arrow Circle Right',
					'fa-arrow-circle-up' => '&#xf0aa; Arrow Circle Up',
					'fa-arrow-down' => '&#xf063; Arrow Down',
					'fa-arrow-left' => '&#xf060; Arrow Left',
					'fa-arrow-right' => '&#xf061; Arrow Right',
					'fa-arrow-up' => '&#xf062; Arrow Up',
					'fa-arrows' => '&#xf047; Arrows',
					'fa-arrows-alt' => '&#xf0b2; Arrows Alt',
					'fa-arrows-h' => '&#xf07e; Arrows H',
					'fa-arrows-v' => '&#xf07d; Arrows V',
					'fa-asterisk' => '&#xf069; Asterisk',
					'fa-automobile' => '&#xf1b9; Automobile',
					'fa-backward' => '&#xf04a; Backward',
					'fa-ban' => '&#xf05e; Ban',
					'fa-bank' => '&#xf19c; Bank',
					'fa-bar-chart-o' => '&#xf080; Bar Chart O',
					'fa-barcode' => '&#xf02a; Barcode',
					'fa-bars' => '&#xf0c9; Bars',
					'fa-beer' => '&#xf0fc; Beer',
					'fa-behance' => '&#xf1b4; Behance',
					'fa-behance-square' => '&#xf1b5; Behance Square',
					'fa-bell' => '&#xf0f3; Bell',
					'fa-bell-o' => '&#xf0a2; Bell O',
					'fa-bitbucket' => '&#xf171; Bitbucket',
					'fa-bitbucket-square' => '&#xf172; Bitbucket Square',
					'fa-bitcoin' => '&#xf15a; Bitcoin',
					'fa-bold' => '&#xf032; Bold',
					'fa-bolt' => '&#xf0e7; Bolt',
					'fa-bomb' => '&#xf1e2; Bomb',
					'fa-book' => '&#xf02d; Book',
					'fa-bookmark' => '&#xf02e; Bookmark',
					'fa-bookmark-o' => '&#xf097; Bookmark O',
					'fa-briefcase' => '&#xf0b1; Briefcase',
					'fa-btc' => '&#xf15a; Btc',
					'fa-bug' => '&#xf188; Bug',
					'fa-building' => '&#xf1ad; Building',
					'fa-building-o' => '&#xf0f7; Building O',
					'fa-bullhorn' => '&#xf0a1; Bullhorn',
					'fa-bullseye' => '&#xf140; Bullseye',
					'fa-cab' => '&#xf1ba; Cab',
					'fa-calendar' => '&#xf073; Calendar',
					'fa-calendar-o' => '&#xf133; Calendar O',
					'fa-camera' => '&#xf030; Camera',
					'fa-camera-retro' => '&#xf083; Camera Retro',
					'fa-car' => '&#xf1b9; Car',
					'fa-caret-down' => '&#xf0d7; Caret Down',
					'fa-caret-left' => '&#xf0d9; Caret Left',
					'fa-caret-right' => '&#xf0da; Caret Right',
					'fa-caret-square-o-down' => '&#xf150; Caret Square O Down',
					'fa-caret-square-o-left' => '&#xf191; Caret Square O Left',
					'fa-caret-square-o-right' => '&#xf152; Caret Square O Right',
					'fa-caret-square-o-up' => '&#xf151; Caret Square O Up',
					'fa-caret-up' => '&#xf0d8; Caret Up',
					'fa-certificate' => '&#xf0a3; Certificate',
					'fa-chain' => '&#xf0c1; Chain',
					'fa-chain-broken' => '&#xf127; Chain Broken',
					'fa-check' => '&#xf00c; Check',
					'fa-check-circle' => '&#xf058; Check Circle',
					'fa-check-circle-o' => '&#xf05d; Check Circle O',
					'fa-check-square' => '&#xf14a; Check Square',
					'fa-check-square-o' => '&#xf046; Check Square O',
					'fa-chevron-circle-down' => '&#xf13a; Chevron Circle Down',
					'fa-chevron-circle-left' => '&#xf137; Chevron Circle Left',
					'fa-chevron-circle-right' => '&#xf138; Chevron Circle Right',
					'fa-chevron-circle-up' => '&#xf139; Chevron Circle Up',
					'fa-chevron-down' => '&#xf078; Chevron Down',
					'fa-chevron-left' => '&#xf053; Chevron Left',
					'fa-chevron-right' => '&#xf054; Chevron Right',
					'fa-chevron-up' => '&#xf077; Chevron Up',
					'fa-child' => '&#xf1ae; Child',
					'fa-circle' => '&#xf111; Circle',
					'fa-circle-o' => '&#xf10c; Circle O',
					'fa-circle-o-notch' => '&#xf1ce; Circle O Notch',
					'fa-circle-thin' => '&#xf1db; Circle Thin',
					'fa-clipboard' => '&#xf0ea; Clipboard',
					'fa-clock-o' => '&#xf017; Clock O',
					'fa-cloud' => '&#xf0c2; Cloud',
					'fa-cloud-download' => '&#xf0ed; Cloud Download',
					'fa-cloud-upload' => '&#xf0ee; Cloud Upload',
					'fa-cny' => '&#xf157; Cny',
					'fa-code' => '&#xf121; Code',
					'fa-code-fork' => '&#xf126; Code Fork',
					'fa-codepen' => '&#xf1cb; Codepen',
					'fa-coffee' => '&#xf0f4; Coffee',
					'fa-cog' => '&#xf013; Cog',
					'fa-cogs' => '&#xf085; Cogs',
					'fa-columns' => '&#xf0db; Columns',
					'fa-comment' => '&#xf075; Comment',
					'fa-comment-o' => '&#xf0e5; Comment O',
					'fa-comments' => '&#xf086; Comments',
					'fa-comments-o' => '&#xf0e6; Comments O',
					'fa-compass' => '&#xf14e; Compass',
					'fa-compress' => '&#xf066; Compress',
					'fa-copy' => '&#xf0c5; Copy',
					'fa-credit-card' => '&#xf09d; Credit Card',
					'fa-crop' => '&#xf125; Crop',
					'fa-crosshairs' => '&#xf05b; Crosshairs',
					'fa-css3' => '&#xf13c; CSS3',
					'fa-cube' => '&#xf1b2; Cube',
					'fa-cubes' => '&#xf1b3; Cubes',
					'fa-cut' => '&#xf0c4; Cut',
					'fa-cutlery' => '&#xf0f5; Cutlery',
					'fa-dashboard' => '&#xf0e4; Dashboard',
					'fa-database' => '&#xf1c0; Database',
					'fa-dedent' => '&#xf03b; Dedent',
					'fa-delicious' => '&#xf1a5; Delicious',
					'fa-desktop' => '&#xf108; Desktop',
					'fa-deviantart' => '&#xf1bd; Deviantart',
					'fa-digg' => '&#xf1a6; Digg',
					'fa-dollar' => '&#xf155; Dollar',
					'fa-dot-circle-o' => '&#xf192; Dot Circle O',
					'fa-download' => '&#xf019; Download',
					'fa-dribbble' => '&#xf17d; Dribbble',
					'fa-dropbox' => '&#xf16b; Dropbox',
					'fa-drupal' => '&#xf1a9; Drupal',
					'fa-edit' => '&#xf044; Edit',
					'fa-eject' => '&#xf052; Eject',
					'fa-ellipsis-h' => '&#xf141; Ellipsis H',
					'fa-ellipsis-v' => '&#xf142; Ellipsis V',
					'fa-empire' => '&#xf1d1; Empire',
					'fa-envelope' => '&#xf0e0; Envelope',
					'fa-envelope-o' => '&#xf003; Envelope O',
					'fa-envelope-square' => '&#xf199; Envelope Square',
					'fa-eraser' => '&#xf12d; Eraser',
					'fa-eur' => '&#xf153; Eur',
					'fa-euro' => '&#xf153; Euro',
					'fa-exchange' => '&#xf0ec; Exchange',
					'fa-exclamation' => '&#xf12a; Exclamation',
					'fa-exclamation-circle' => '&#xf06a; Exclamation Circle',
					'fa-exclamation-triangle' => '&#xf071; Exclamation Triangle',
					'fa-expand' => '&#xf065; Expand',
					'fa-external-link' => '&#xf08e; External Link',
					'fa-external-link-square' => '&#xf14c; External Link Square',
					'fa-eye' => '&#xf06e; Eye',
					'fa-eye-slash' => '&#xf070; Eye Slash',
					'fa-facebook' => '&#xf09a; Facebook',
					'fa-facebook-square' => '&#xf082; Facebook Square',
					'fa-fast-backward' => '&#xf049; Fast Backward',
					'fa-fast-forward' => '&#xf050; Fast Forward',
					'fa-fax' => '&#xf1ac; Fax',
					'fa-female' => '&#xf182; Female',
					'fa-fighter-jet' => '&#xf0fb; Fighter Jet',
					'fa-file' => '&#xf15b; File',
					'fa-file-archive-o' => '&#xf1c6; File Archive O',
					'fa-file-audio-o' => '&#xf1c7; File Audio O',
					'fa-file-code-o' => '&#xf1c9; File Code O',
					'fa-file-excel-o' => '&#xf1c3; File Excel O',
					'fa-file-image-o' => '&#xf1c5; File Image O',
					'fa-file-movie-o' => '&#xf1c8; File Movie O',
					'fa-file-o' => '&#xf016; File O',
					'fa-file-pdf-o' => '&#xf1c1; File Pdf O',
					'fa-file-photo-o' => '&#xf1c5; File Photo O',
					'fa-file-picture-o' => '&#xf1c5; File Picture O',
					'fa-file-powerpoint-o' => '&#xf1c4; File Powerpoint O',
					'fa-file-sound-o' =>  '&#xf1c7; File Sound O',
					'fa-file-text' => '&#xf15c; File Text',
					'fa-file-text-o' => '&#xf0f6; File Text O',
					'fa-file-video-o' => '&#xf1c8; File Video O',
					'fa-file-word-o' => '&#xf1c2; File Word O',
					'fa-file-zip-o' => '&#xf1c6; File Zip O',
					'fa-files-o' => '&#xf0c5; Files O',
					'fa-film' => '&#xf008; Film',
					'fa-filter' => '&#xf0b0; Filter',
					'fa-fire' => '&#xf06d; Fire',
					'fa-fire-extinguisher' => '&#xf134; Fire Extinguisher',
					'fa-flag' => '&#xf024; Flag',
					'fa-flag-checkered' => '&#xf11e; Flag Checkered',
					'fa-flag-o' => '&#xf11d; Flag O',
					'fa-flash' => '&#xf0e7; Flash',
					'fa-flask' => '&#xf0c3; Flask',
					'fa-flickr' => '&#xf16e; Flickr',
					'fa-floppy-o' => '&#xf0c7; Floppy O',
					'fa-folder' => '&#xf07b; Folder',
					'fa-folder-o' => '&#xf114; Folder O',
					'fa-folder-open' => '&#xf07c; Folder Open',
					'fa-folder-open-o' => '&#xf115; Folder Open O',
					'fa-font' => '&#xf031; Font',
					'fa-forward' => '&#xf04e; Forward',
					'fa-foursquare' => '&#xf180; Foursquare',
					'fa-frown-o' => '&#xf119; Frown O',
					'fa-gamepad' => '&#xf11b; Gamepad',
					'fa-gavel' => '&#xf0e3; Gavel',
					'fa-gbp' => '&#xf154; Gbp',
					'fa-ge' => '&#xf1d1; Ge',
					'fa-gear' => '&#xf013; Gear',
					'fa-gears' => '&#xf085; Gears',
					'fa-gift' => '&#xf06b; Gift',
					'fa-git' => '&#xf1d3; Git',
					'fa-git-square' => '&#xf1d2; Git Square',
					'fa-github' => '&#xf09b; Github',
					'fa-github-alt' => '&#xf113; Github Alt',
					'fa-github-square' => '&#xf092; Github Square',
					'fa-gittip' => '&#xf184; Gittip',
					'fa-glass' => '&#xf000; Glass',
					'fa-globe' => '&#xf0ac; Globe',
					'fa-google' => '&#xf1a0; Google',
					'fa-google-plus' => '&#xf0d5; Google Plus',
					'fa-google-plus-square' => '&#xf0d4; Google Plus Square',
					'fa-graduation-cap' => '&#xf19d; Graduation Cap',
					'fa-group' => '&#xf0c0; Group',
					'fa-h-square' => '&#xf0fd; H Square',
					'fa-hacker-news' => '&#xf1d4; Hacker News',
					'fa-hand-o-down' => '&#xf0a7; Hand O Down',
					'fa-hand-o-left' => '&#xf0a5; Hand O Left',
					'fa-hand-o-right' => '&#xf0a4; Hand O Right',
					'fa-hand-o-up' => '&#xf0a6; Hand O Up',
					'fa-hdd-o' => '&#xf0a0; Hdd O',
					'fa-header' => '&#xf1dc; Header',
					'fa-headphones' => '&#xf025; Headphones',
					'fa-heart' => '&#xf004; Heart',
					'fa-heart-o' => '&#xf08a; Heart O',
					'fa-history' => '&#xf1da; History',
					'fa-home' => '&#xf015; Home',
					'fa-hospital-o' => '&#xf0f8; Hospital O',
					'fa-html5' => '&#xf13b; HTML5',
					'fa-image' => '&#xf03e; Image',
					'fa-inbox' => '&#xf01c; Inbox',
					'fa-indent' => '&#xf03c; Indent',
					'fa-info' => '&#xf129; Info',
					'fa-info-circle' => '&#xf05a; Info Circle',
					'fa-inr' => '&#xf156; Inr',
					'fa-instagram' => '&#xf16d; Instagram',
					'fa-institution' => '&#xf19c; Institution',
					'fa-italic' => '&#xf033; Italic',
					'fa-joomla' => '&#xf1aa; Joomla',
					'fa-jpy' => '&#xf157; Jpy',
					'fa-jsfiddle' => '&#xf1cc; Jsfiddle',
					'fa-key' => '&#xf084; Key',
					'fa-keyboard-o' => '&#xf11c; Keyboard O',
					'fa-krw' => '&#xf159; Krw',
					'fa-language' => '&#xf1ab; Language',
					'fa-laptop' => '&#xf109; Laptop',
					'fa-leaf' => '&#xf06c; Leaf',
					'fa-legal' => '&#xf0e3; Legal',
					'fa-lemon-o' => '&#xf094; Lemon O',
					'fa-level-down' => '&#xf149; Level Down',
					'fa-level-up' => '&#xf148; Level Up',
					'fa-life-bouy' => '&#xf1cd; Life Bouy',
					'fa-life-ring' => '&#xf1cd; Life Ring',
					'fa-life-saver' => '&#xf1cd; Life Saver',
					'fa-lightbulb-o' => '&#xf0eb; Lightbulb O',
					'fa-link' => '&#xf0c1; Link',
					'fa-linkedin' => '&#xf0e1; Linkedin',
					'fa-linkedin-square' => '&#xf08c; Linkedin Square',
					'fa-linux' => '&#xf17c; Linux',
					'fa-list' => '&#xf03a; List',
					'fa-list-alt' => '&#xf022; List Alt',
					'fa-list-ol' => '&#xf0cb; List Ol',
					'fa-list-ul' => '&#xf0ca; List Ul',
					'fa-location-arrow' => '&#xf124; Location Arrow',
					'fa-lock' => '&#xf023; Lock',
					'fa-long-arrow-down' => '&#xf175; Long Arrow Down',
					'fa-long-arrow-left' => '&#xf177; Long Arrow Left',
					'fa-long-arrow-right' => '&#xf178; Long Arrow Right',
					'fa-long-arrow-up' => '&#xf176; Long Arrow Up',
					'fa-magic' => '&#xf0d0; Magic',
					'fa-magnet' => '&#xf076; Magnet',
					'fa-mail-forward' => '&#xf064; Mail Forward',
					'fa-mail-reply' => '&#xf112; Mail Reply',
					'fa-mail-reply-all' => '&#xf122; Mail Reply All',
					'fa-male' => '&#xf183; Male',
					'fa-map-marker' => '&#xf041; Map Marker',
					'fa-maxcdn' => '&#xf136; Maxcdn',
					'fa-medkit' => '&#xf0fa; Medkit',
					'fa-meh-o' => '&#xf11a; Meh O',
					'fa-microphone' => '&#xf130; Microphone',
					'fa-microphone-slash' => '&#xf131; Microphone Slash',
					'fa-minus' => '&#xf068; Minus',
					'fa-minus-circle' => '&#xf056; Minus Circle',
					'fa-minus-square' => '&#xf146; Minus Square',
					'fa-minus-square-o' => '&#xf147; Minus Square O',
					'fa-mobile' => '&#xf10b; Mobile',
					'fa-mobile-phone' => '&#xf10b; Mobile Phone',
					'fa-money' => '&#xf0d6; Money',
					'fa-moon-o' => '&#xf186; Moon O',
					'fa-mortar-board' => '&#xf19d; Mortar Board',
					'fa-music' => '&#xf001; Music',
					'fa-navicon' => '&#xf0c9; Navicon',
					'fa-openid' => '&#xf19b; Openid',
					'fa-outdent' => '&#xf03b; Outdent',
					'fa-pagelines' => '&#xf18c; Pagelines',
					'fa-paper-plane' => '&#xf1d8; Paper Plane',
					'fa-paper-plane-o' => '&#xf1d9; Paper Plane O',
					'fa-paperclip' => '&#xf0c6; Paperclip',
					'fa-paragraph' => '&#xf1dd; Paragraph',
					'fa-paste' => '&#xf0ea; Paste',
					'fa-pause' => '&#xf04c; Pause',
					'fa-paw' => '&#xf1b0; Paw',
					'fa-pencil' => '&#xf040; Pencil',
					'fa-pencil-square' => '&#xf14b; Pencil Square',
					'fa-pencil-square-o' => '&#xf044; Pencil Square O',
					'fa-phone' => '&#xf095; Phone',
					'fa-phone-square' => '&#xf098; Phone Square',
					'fa-photo' => '&#xf03e; Photo',
					'fa-picture-o' => '&#xf03e; Picture O',
					'fa-pied-piper' => '&#xf1a7; Pied Piper',
					'fa-pied-piper-alt' => '&#xf1a8; Pied Piper Alt',
					'fa-pied-piper-square' => '&#xf1a7; Pied Piper Square',
					'fa-pinterest' => '&#xf0d2; Pinterest',
					'fa-pinterest-square' => '&#xf0d3; Pinterest Square',
					'fa-plane' => '&#xf072; Plane',
					'fa-play' => '&#xf04b; Play',
					'fa-play-circle' => '&#xf144; Play Circle',
					'fa-play-circle-o' => '&#xf01d; Play Circle O',
					'fa-plus' => '&#xf067; Plus',
					'fa-plus-circle' => '&#xf055; Plus Circle',
					'fa-plus-square' => '&#xf0fe; Plus Square',
					'fa-plus-square-o' => '&#xf196; Plus Square O',
					'fa-power-off' => '&#xf011; Power Off',
					'fa-print' => '&#xf02f; Print',
					'fa-puzzle-piece' => '&#xf12e; Puzzle Piece',
					'fa-qq' => '&#xf1d6; Qq',
					'fa-qrcode' => '&#xf029; Qrcode',
					'fa-question' => '&#xf128; Question',
					'fa-question-circle' => '&#xf059; Question Circle',
					'fa-quote-left' => '&#xf10d; Quote Left',
					'fa-quote-right' => '&#xf10e; Quote Right',
					'fa-ra' => '&#xf1d0; Ra',
					'fa-random' => '&#xf074; Random',
					'fa-rebel' => '&#xf1d0; Rebel',
					'fa-recycle' => '&#xf1b8; Recycle',
					'fa-reddit' => '&#xf1a1; Reddit',
					'fa-reddit-square' => '&#xf1a2; Reddit Square',
					'fa-refresh' => '&#xf021; Refresh',
					'fa-renren' => '&#xf18b; Renren',
					'fa-reorder' => '&#xf0c9; Reorder',
					'fa-repeat' => '&#xf01e; Repeat',
					'fa-reply' => '&#xf112; Reply',
					'fa-reply-all' => '&#xf122; Reply All',
					'fa-retweet' => '&#xf079; Retweet',
					'fa-rmb' => '&#xf157; Rmb',
					'fa-road' => '&#xf018; Road',
					'fa-rocket' => '&#xf135; Rocket',
					'fa-rotate-left' => '&#xf0e2; Rotate Left',
					'fa-rotate-right' => '&#xf01e; Rotate Right',
					'fa-rouble' => '&#xf158; Rouble',
					'fa-rss' => '&#xf09e; Rss',
					'fa-rss-square' => '&#xf143; Rss Square',
					'fa-rub' => '&#xf158; Rub',
					'fa-ruble' => '&#xf158; Ruble',
					'fa-rupee' => '&#xf156; Rupee',
					'fa-save' => '&#xf0c7; Save',
					'fa-scissors' => '&#xf0c4; Scissors',
					'fa-search' => '&#xf002; Search',
					'fa-search-minus' => '&#xf010; Search Minus',
					'fa-search-plus' => '&#xf00e; Search Plus',
					'fa-send' => '&#xf1d8; Send',
					'fa-send-o' => '&#xf1d9; Send O',
					'fa-share' => '&#xf064; Share',
					'fa-share-alt' => '&#xf1e0; Share Alt',
					'fa-share-alt-square' => '&#xf1e1; Share Alt Square',
					'fa-share-square' => '&#xf14d; Share Square',
					'fa-share-square-o' => '&#xf045; Share Square O',
					'fa-shield' => '&#xf132; Shield',
					'fa-shopping-cart' => '&#xf07a; Shopping Cart',
					'fa-sign-in' => '&#xf090; Sign In',
					'fa-sign-out' => '&#xf08b; Sign Out',
					'fa-signal' => '&#xf012; Signal',
					'fa-sitemap' => '&#xf0e8; Sitemap',
					'fa-skype' => '&#xf17e; Skype',
					'fa-slack' => '&#xf198; Slack',
					'fa-sliders' => '&#xf1de; Sliders',
					'fa-smile-o' => '&#xf118; Smile O',
					'fa-sort' => '&#xf0dc; Sort',
					'fa-sort-alpha-asc' => '&#xf15d; Sort Alpha Asc',
					'fa-sort-alpha-desc' => '&#xf15e; Sort Alpha Desc',
					'fa-sort-amount-asc' => '&#xf160; Sort Amount Asc',
					'fa-sort-amount-desc' => '&#xf161; Sort Amount Desc',
					'fa-sort-asc' => '&#xf0de; Sort Asc',
					'fa-sort-desc' => '&#xf0dd; Sort Desc',
					'fa-sort-down' => '&#xf0dd; Sort Down',
					'fa-sort-numeric-asc' => '&#xf162; Sort Numeric Asc',
					'fa-sort-numeric-desc' => '&#xf163; Sort Numeric Desc',
					'fa-sort-up' => '&#xf0de; Sort Up',
					'fa-soundcloud' => '&#xf1be; Soundcloud',
					'fa-space-shuttle' => '&#xf197; Space Shuttle',
					'fa-spinner' => '&#xf110; Spinner',
					'fa-spoon' => '&#xf1b1; Spoon',
					'fa-spotify' => '&#xf1bc; Spotify',
					'fa-square' => '&#xf0c8; Square',
					'fa-square-o' => '&#xf096; Square O',
					'fa-stack-exchange' => '&#xf18d; Stack Exchange',
					'fa-stack-overflow' => '&#xf16c; Stack Overflow',
					'fa-star' => '&#xf005; Star',
					'fa-star-half' => '&#xf089; Star Half',
					'fa-star-half-empty' => '&#xf123; Star Half Empty',
					'fa-star-half-full' => '&#xf123; Star Half Full',
					'fa-star-half-o' => '&#xf123; Star Half O',
					'fa-star-o' => '&#xf006; Star O',
					'fa-steam' => '&#xf1b6; Steam',
					'fa-steam-square' => '&#xf1b7; Steam Square',
					'fa-step-backward' => '&#xf048; Step Backward',
					'fa-step-forward' => '&#xf051; Step Forward',
					'fa-stethoscope' => '&#xf0f1; Stethoscope',
					'fa-stop' => '&#xf04d; Stop',
					'fa-strikethrough' => '&#xf0cc; Strikethrough',
					'fa-stumbleupon' => '&#xf1a4; Stumbleupon',
					'fa-stumbleupon-circle' => '&#xf1a3; Stumbleupon Circle',
					'fa-subscript' => '&#xf12c; Subscript',
					'fa-suitcase' => '&#xf0f2; Suitcase',
					'fa-sun-o' => '&#xf185; Sun O',
					'fa-superscript' => '&#xf12b; Superscript',
					'fa-support' => '&#xf1cd; Support',
					'fa-table' => '&#xf0ce; Table',
					'fa-tablet' => '&#xf10a; Tablet',
					'fa-tachometer' => '&#xf0e4; Tachometer',
					'fa-tag' => '&#xf02b; Tag',
					'fa-tags' => '&#xf02c; Tags',
					'fa-tasks' => '&#xf0ae; Tasks',
					'fa-taxi' => '&#xf1ba; Taxi',
					'fa-tencent-weibo' => '&#xf1d5; Tencent Weibo',
					'fa-terminal' => '&#xf120; Terminal',
					'fa-text-height' => '&#xf034; Text Height',
					'fa-text-width' => '&#xf035; Text Width',
					'fa-th' => '&#xf00a; Th',
					'fa-th-large' => '&#xf009; Th Large',
					'fa-th-list' => '&#xf00b; Th List',
					'fa-thumb-tack' => '&#xf08d; Thumb Tack',
					'fa-thumbs-down' => '&#xf165; Thumbs Down',
					'fa-thumbs-o-down' => '&#xf088; Thumbs O Down',
					'fa-thumbs-o-up' => '&#xf087; Thumbs O Up',
					'fa-thumbs-up' => '&#xf164; Thumbs Up',
					'fa-ticket' => '&#xf145; Ticket',
					'fa-times' => '&#xf00d; Times',
					'fa-times-circle' => '&#xf057; Times Circle',
					'fa-times-circle-o' => '&#xf05c; Times Circle O',
					'fa-tint' => '&#xf043; Tint',
					'fa-toggle-down' => '&#xf150; Toggle Down',
					'fa-toggle-left' => '&#xf191; Toggle Left',
					'fa-toggle-right' => '&#xf152; Toggle Right',
					'fa-toggle-up' => '&#xf151; Toggle Up',
					'fa-trash-o' => '&#xf014; Trash O',
					'fa-tree' => '&#xf1bb; Tree',
					'fa-trello' => '&#xf181; Trello',
					'fa-trophy' => '&#xf091; Trophy',
					'fa-truck' => '&#xf0d1; Truck',
					'fa-try' => '&#xf195; Try',
					'fa-tumblr' => '&#xf173; Tumblr',
					'fa-tumblr-square' => '&#xf174; Tumblr Square',
					'fa-turkish-lira' => '&#xf195; Turkish Lira',
					'fa-twitter' => '&#xf099; Twitter',
					'fa-twitter-square' => '&#xf081; Twitter Square',
					'fa-umbrella' => '&#xf0e9; Umbrella',
					'fa-underline' => '&#xf0cd; Underline',
					'fa-undo' => '&#xf0e2; Undo',
					'fa-university' => '&#xf19c; University',
					'fa-unlink' => '&#xf127; Unlink',
					'fa-unlock' => '&#xf09c; Unlock',
					'fa-unlock-alt' => '&#xf13e; Unlock Alt',
					'fa-unsorted' => '&#xf0dc; Unsorted',
					'fa-upload' => '&#xf093; Upload',
					'fa-usd' => '&#xf155; Usd',
					'fa-user' => '&#xf007; User',
					'fa-user-md' => '&#xf0f0; User Md',
					'fa-users' => '&#xf0c0; Users',
					'fa-video-camera' => '&#xf03d; Video Camera',
					'fa-vimeo-square' => '&#xf194; Vimeo Square',
					'fa-vine' => '&#xf1ca; Vine',
					'fa-vk' => '&#xf189; Vk',
					'fa-volume-down' => '&#xf027; Volume Down',
					'fa-volume-off' => '&#xf026; Volume Off',
					'fa-volume-up' => '&#xf028; Volume Up',
					'fa-warning' => '&#xf071; Warning',
					'fa-wechat' => '&#xf1d7; Wechat',
					'fa-weibo' => '&#xf18a; Weibo',
					'fa-weixin' => '&#xf1d7; Weixin',
					'fa-wheelchair' => '&#xf193; Wheelchair',
					'fa-windows' => '&#xf17a; Windows',
					'fa-won' => '&#xf159; Won',
					'fa-wordpress' => '&#xf19a; Wordpress',
					'fa-wrench' => '&#xf0ad; Wrench',
					'fa-xing' => '&#xf168; Xing',
					'fa-xing-square' => '&#xf169; Xing Square',
					'fa-yahoo' => '&#xf19e; Yahoo',
					'fa-yen' => '&#xf157; Yen',
					'fa-youtube' => '&#xf167; Youtube',
					'fa-youtube-play' => '&#xf16a; Youtube Play',
					'fa-youtube-square' => '&#xf166; Youtube Square',

				),
		),

		'content' => array(
                'std' => '',
                'type' => 'textarea',
                'label' => 'Content',
                'desc' => 'Add the icon box content, accepts HTML',
        ),
        'style' => array(
			'type' => 'select',
			'label' => 'Style',
			'desc' => '',
			'options' => array(
					'standard' => 'Standard',
					'light' => 'Light',
				
			),
		),

	),
	'shortcode' => '[icon_box icon="{{icon}}" style="{{style}}"]{{content}}[/icon_box]',
	'popup_title' => 'Insert Icon Box Shortcode',
);


/*-----------------------------------------------------------------------------------*/
/*	Counter Config
/*-----------------------------------------------------------------------------------*/
$ueneo_shortcodes['counter'] = array(
	'no_preview' => true,
	'params' => array(
		'number' => array(
			'type' => 'text',
			'label' => 'Number',
			'desc' => 'Enter the number to count to',
			'std' => '',
		),
		'details' => array(
			'type' => 'text',
			'label' => 'Details',
			'desc' => 'Enter the number description',
			'std' => '',
		),
	),
	'shortcode' => '[counter number="{{number}}" details="{{details}}"]',
	'popup_title' => 'Insert Counter Shortcode',
);


/*-----------------------------------------------------------------------------------*/
/*	Clients Config
/*-----------------------------------------------------------------------------------*/
$ueneo_shortcodes['clientsSlider'] = array(
   'params' => array(
           'items' => array(
                'std' => '6',
                'type' => 'text',
                'label' => 'Items',
                'desc' => 'Enter the maximum amount of items displayed at a time',
            )
    ),
    'no_preview' => true,
    'shortcode' => '[clients_slider items="{{items}}"] {{child_shortcode}}  [/clients_slider]',
    'popup_title' => 'Clients Slider Shortcode', 
    
    'child_shortcode' => array(
        'params' => array(
           'image' => array(
                'std' => '',
                'type' => 'text',
                'label' => 'Image',
                'desc' => 'Enter the image URL',
            )
        ),
        'shortcode' => '[client]' . htmlspecialchars("<img src='{{image}}'/>", ENT_QUOTES) . '[/client]',
        'clone_button' => 'Add Client', 
    )
);


?>


