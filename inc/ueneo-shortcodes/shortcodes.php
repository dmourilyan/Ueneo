<?php

/*-----------------------------------------------------------------------------------*/
/*	Column Shortcodes
/*-----------------------------------------------------------------------------------*/
if (!function_exists('Ueneo_column_full')) {
	function Ueneo_column_full( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'spacing' => '',
		), $atts ) );
	   return '<div class="c12 end ">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('column_full', 'Ueneo_column_full');
}

if (!function_exists('Ueneo_column_third')) {
	function Ueneo_column_third( $atts, $content = null ) {
	   return '<div class="c4">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('column_third', 'Ueneo_column_third');
}

if (!function_exists('Ueneo_column_third_last')) {
	function Ueneo_column_third_last( $atts, $content = null ) {
	   return '<div class="c4 end">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('column_third_last', 'Ueneo_column_third_last');
}

if (!function_exists('Ueneo_column_two_thirds')) {
	function Ueneo_column_two_thirds( $atts, $content = null ) {
	   return '<div class="c8">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('column_two_thirds', 'Ueneo_column_two_thirds');
}

if (!function_exists('Ueneo_column_two_thirds_last')) {
	function Ueneo_column_two_thirds_last( $atts, $content = null ) {
	   return '<div class="c8 end">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('column_two_thirds_last', 'Ueneo_column_two_thirds_last');
}

if (!function_exists('Ueneo_column_half')) {
	function Ueneo_column_half( $atts, $content = null ) {
	   return '<div class="c6">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('column_half', 'Ueneo_column_half');
}

if (!function_exists('Ueneo_column_half_last')) {
	function Ueneo_column_half_last( $atts, $content = null ) {
	   return '<div class="c6 end">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('column_half_last', 'Ueneo_column_half_last');
}

if (!function_exists('Ueneo_column_quarter')) {
	function Ueneo_column_quarter( $atts, $content = null ) {
	   return '<div class="c3">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('column_quarter', 'Ueneo_column_quarter');
}

if (!function_exists('Ueneo_column_quarter_last')) {
	function Ueneo_column_quarter_last( $atts, $content = null ) {
	   return '<div class="c3 end">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('column_quarter_last', 'Ueneo_column_quarter_last');
}

if (!function_exists('Ueneo_column_three_quarter')) {
	function Ueneo_column_three_quarter( $atts, $content = null ) {
	   return '<div class="c9">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('column_three_quarter', 'Ueneo_column_three_quarter');
}

if (!function_exists('Ueneo_column_three_quarter_last')) {
	function Ueneo_column_three_quarter_last( $atts, $content = null ) {
	   return '<div class="c9 end">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('column_three_quarter_last', 'Ueneo_column_three_quarter_last');
}
if (!function_exists('Ueneo_column_fifth')) {
	function Ueneo_column_fifth( $atts, $content = null ) {
	   return '<div class="c-fifth">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('column_fifth', 'Ueneo_column_fifth');
}
if (!function_exists('Ueneo_column_fifth_last')) {
	function Ueneo_column_fifth_last( $atts, $content = null ) {
	   return '<div class="c-fifth end">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('column_fifth_last', 'Ueneo_column_fifth_last');
}

if (!function_exists('Ueneo_grid')) {
	function Ueneo_grid( $atts, $content = null ) {
	   return '<div class="grid">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('grid', 'Ueneo_grid');
}
/*-----------------------------------------------------------------------------------*/
/*	Button Shortcode
/*-----------------------------------------------------------------------------------*/
if (!function_exists('Ueneo_button_func')) {
	function Ueneo_button_func($atts, $content = null) {
		extract( shortcode_atts( array(
			'link' => '',
			'color' => '',
			'style' => '',
			'size' => '',
		), $atts ) );
		
		return '<a href="'.$link.'" class="button '.$color.' '.$style.' '.$size.'">'. do_shortcode($content) .'</a>'; 
		
	}
	add_shortcode( 'button', 'Ueneo_button_func' );
}

/*-----------------------------------------------------------------------------------*/
/*	Contact Details Shortcode
/*-----------------------------------------------------------------------------------*/
if (!function_exists('Ueneo_contact_details_func')) {
	function Ueneo_contact_details_func($atts, $content = null) {
		extract( shortcode_atts( array(
			'address' => '',
			'phone' => '',
			'email' => '',

		), $atts ) );

		$output = '<ul class="contact-details">';
		$output .= '<li><i class="fa fa-map-marker fa-lg"></i>'.$atts['address'].'</li>';
		$output .= '<li><i class="fa fa-phone fa-lg"></i>'.$atts['phone'].'</li>';
		$output .= '<li><i class="fa fa-envelope fa-lg"></i>'.$atts['email'].'</li>';
		$output .= '</ul>';
		return $output; 
		
	}
	add_shortcode( 'contact_details', 'Ueneo_contact_details_func' );
}


/*-----------------------------------------------------------------------------------*/
/*	Skill Shortcode
/*-----------------------------------------------------------------------------------*/
if (!function_exists('Ueneo_skill_func')) {
	function Ueneo_skill_func($atts) {
		extract( shortcode_atts( array(
			'name' => '',
			'level' => '',
		), $atts ) );
		return '<div class="barwrapper"><span class="barbase"></span><div class="bar"><div style="width:'.$level.'%"><span class="skilllevel">'.$level.'%</span></div></div></div><p class="skilltitle">'.$name.'</p>';  
	}
	add_shortcode( 'skill', 'Ueneo_skill_func' );
}


/*-----------------------------------------------------------------------------------*/
/*	Recent Posts Shortcode
/*-----------------------------------------------------------------------------------*/
if (!function_exists('Ueneo_string_limit_words')) {	
	function Ueneo_string_limit_words($string, $word_limit){
	  $words = explode(' ', $string, ($word_limit + 1));
	  if(count($words) > $word_limit)
	  array_pop($words);
	  return implode(' ', $words);
	}
}	

if (!function_exists('Ueneo_get_special_excerpt')) {
	function Ueneo_get_special_excerpt($count){
		$excerpt = get_the_content();
		$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
		$excerpt = strip_tags($excerpt);
		$excerpt = substr($excerpt, 0, $count);
		$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
		$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
		return $excerpt;
	}
}

if (!function_exists('Ueneo_recent_posts')) {
	function Ueneo_recent_posts($atts) {
		$output = '';
		global $post;
		$atts = shortcode_atts(
			array(
				'excerpt_words' => '',
				'num_posts' => '',
				'style' => '',
				'align' => '',
		), $atts);
		
		if(!isset($atts['num_posts'])) {
			$atts['num_posts'] = 3;
		}
		if(!isset($atts['excerpt_words'])) {
			$atts['excerpt_words'] = 50;
		}

		$output .= '<div id="recent-posts" class="clearfix '.$atts['style'].' '.$atts['align'].'">';
		$counter = 1;
		if(!empty($atts['cat_slug']) && $atts['cat_slug']){
			$recent_posts = new WP_Query('post_status=publish&showposts='.$atts['num_posts'].'&category_name='.$atts['cat_slug']);
		} else {
			$recent_posts = new WP_Query('post_status=publish&showposts='.$atts['num_posts']);
		}
		while($recent_posts->have_posts()): $recent_posts->the_post();

		$output .= '<div class="c12 end">';
	   
	    if('post' == get_post_type()){		

			
	
			$output .= '<div class="entry-details">';
			$output .= '<span class="postdate">'.get_the_date('j M Y').' / </span>'; 		
			$output .= '<a class="author" href="'.get_author_posts_url( get_the_author_meta( 'ID' ) ). '">'. __(' By ', 'ueneo-shortcodes') . get_the_author() .'</a>';
			$output .= '</div>';
			$output .= '<h3 class="entry-title"><a href="'.get_permalink(get_the_ID()).'" rel=""><i class="fa fa-caret-right fa-lg"></i>'.get_the_title().'</a></h3>';
			
		

			if ( has_excerpt() ) 
			{
			    $the_excerpt = get_the_excerpt();
				$output .= "<p>$the_excerpt</p>";
			} 
			else 
			{
			    $the_excerpt = Ueneo_get_special_excerpt(3072);
				$the_excerpt = preg_replace("~(?:\[/?)[^/\]]+/?\]~s", '', $the_excerpt);
				if(has_post_format('video')){
					$the_excerpt = preg_replace('|https?://www\.[a-z\.0-9/?\S*]+|i', '',  $the_excerpt);	
				}
				$the_excerpt = Ueneo_string_limit_words($the_excerpt, $atts['excerpt_words']);
				$output .="<p>$the_excerpt</p>";
			}
			

		}	

		$output .= '</div>';
		
		$counter++ ; 
		endwhile;
		if( get_option( 'show_on_front' ) == 'page' ){ 
			$blog_link = get_permalink( get_option('page_for_posts' ) );
		}
		else {
			$blog_link = get_home_url(); 
		}
		if($atts['style'] == 'light') {
			$output .= '<div class="c12 end"><a class="button light outline large" href="'.$blog_link.'">'.__('All Posts', 'ueneo-shortcodes').'</a></div>';	
		}
		else{
			$output .= '<div class="c12 end"><a class="button colored outline large" href="'.$blog_link.'">'.__('All Posts', 'ueneo-shortcodes').'</a></div>';		
		}
		
		$output .= '</div>';
		return $output;
	}

	add_shortcode('recent_posts', 'Ueneo_recent_posts');
}

/*-----------------------------------------------------------------------------------*/
/*	Social Networks Shortcode
/*-----------------------------------------------------------------------------------*/

if ( !function_exists('Ueneo_social_networks')) {
	function Ueneo_social_networks () {
		global $UeneoTheme_Options;
		$output = '';
		if (isset($UeneoTheme_Options)){

			$twitter_link = $UeneoTheme_Options->get('ut_twitter');
			$facebook_link = $UeneoTheme_Options->get('ut_facebook');
			$dribbble_link = $UeneoTheme_Options->get('ut_dribbble');
			$github_link = $UeneoTheme_Options->get('ut_github');
			$youtube_link = $UeneoTheme_Options->get('ut_youtube');
			$vimeo_link = $UeneoTheme_Options->get('ut_vimeo');
			$instagram_link = $UeneoTheme_Options->get('ut_instagram');
			$pinterest_link = $UeneoTheme_Options->get('ut_pinterest');
			$wordpress_link = $UeneoTheme_Options->get('ut_wordpress');
			$google_link = $UeneoTheme_Options->get('ut_google');
			$flickr_link = $UeneoTheme_Options->get('ut_flickr');
			$linkedin_link = $UeneoTheme_Options->get('ut_linkedin');
			$dropbox_link = $UeneoTheme_Options->get('ut_dropbox');
			$tumblr_link = $UeneoTheme_Options->get('ut_tumblr');
			$behance_link = $UeneoTheme_Options->get('ut_behance');


			$output .= '<ul class="social-networks">';
			if($twitter_link <> ''){
				$output .= '<li class="twitter">';
				$output .= '<a href="'.$twitter_link.'" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>';
				$output .= '</li>';	
			}
			if($facebook_link <> ''){
				$output .= '<li class="facebook">';
				$output .= '<a href="'.$facebook_link.'" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>';
				$output .= '</li>';	
			}
			if($dribbble_link <> ''){
				$output .= '<li class="dribbble">';
				$output .= '<a href="'.$dribbble_link.'" target="_blank"><i class="fa fa-dribbble fa-lg"></i></a>';
				$output .= '</li>';	
			}
			if($github_link <> ''){
				$output .= '<li class="github">';
				$output .= '<a href="'.$github_link.'" target="_blank"><i class="fa fa-github fa-lg"></i></a>';
				$output .= '</li>';	
			}
			if($youtube_link <> ''){
				$output .= '<li class="youtube">';
				$output .= '<a href="'.$youtube_link.'" target="_blank"><i class="fa fa-youtube fa-lg"></i></a>';
				$output .= '</li>';	
			}
			if($vimeo_link <> ''){
				$output .= '<li class="vimeo">';
				$output .= '<a href="'.$vimeo_link.'" target="_blank"><i class="fa fa-vimeo-square fa-lg"></i></a>';
				$output .= '</li>';	
			}
			if($instagram_link <> ''){
				$output .= '<li class="instagram">';
				$output .= '<a href="'.$instagram_link.'" target="_blank"><i class="fa fa-instagram fa-lg"></i></a>';
				$output .= '</li>';	
			}
			if($pinterest_link <> ''){
				$output .= '<li class="pinterest">';
				$output .= '<a href="'.$pinterest_link.'" target="_blank"><i class="fa fa-pinterest fa-lg"></i></a>';
				$output .= '</li>';	
			}
			if($wordpress_link <> ''){
				$output .= '<li class="wordpress">';
				$output .= '<a href="'.$wordpress_link.'" target="_blank"><i class="fa fa-wordpress fa-lg"></i></a>';
				$output .= '</li>';	
			}
			if($google_link <> ''){
				$output .= '<li class="google">';
				$output .= '<a href="'.$google_link.'" target="_blank"><i class="fa fa-google-plus fa-lg"></i></a>';
				$output .= '</li>';	
			}
			if($flickr_link <> ''){
				$output .= '<li class="flickr">';
				$output .= '<a href="'.$flickr_link.'" target="_blank"><i class="fa fa-flickr fa-lg"></i></a>';
				$output .= '</li>';	
			}
			if($linkedin_link <> ''){
				$output .= '<li class="linkedin">';
				$output .= '<a href="'.$linkedin_link.'" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a>';
				$output .= '</li>';	
			}
			if($dropbox_link <> ''){
				$output .= '<li class="dropbox">';
				$output .= '<a href="'.$dropbox_link.'" target="_blank"><i class="fa fa-dropbox fa-lg"></i></a>';
				$output .= '</li>';	
			}
			if($tumblr_link <> ''){
				$output .= '<li class="tumblr">';
				$output .= '<a href="'.$tumblr_link.'" target="_blank"><i class="fa fa-tumblr fa-lg"></i></a>';
				$output .= '</li>';	
			}
			if($behance_link <> ''){
				$output .= '<li class="behance">';
				$output .= '<a href="'.$behance_link.'" target="_blank"><i class="fa fa-behance fa-lg"></i></a>';
				$output .= '</li>';	
			}

			$output .= '</ul>'; 
		}
		else{
			$output .= '<em>'.__('Shortcode requires ueneo theme options','ueneo-shortcodes').'</em>';
		}
		return $output;
	}
	add_shortcode( 'social_networks', 'Ueneo_social_networks' );
}	

/*-----------------------------------------------------------------------------------*/
/*	Flex Slider Shortcode
/*-----------------------------------------------------------------------------------*/
if (!function_exists('Ueneo_flex_slider')) {
	function Ueneo_flex_slider($atts) {
		$output = '';
		global $post;
		extract( shortcode_atts( array(
			'cat' => '',
		), $atts ) );
	  	$default = array(
		    'type'      => 'flex_slider',
		    'limit' => '100',
	  	);
	  	$r = shortcode_atts( $default, $atts );
	  	extract( $r );
	  	if( empty($post_type) ){
		    $post_type = $type;
			$post_type_ob = get_post_type_object( $post_type );
		}	
		if( !$post_type_ob ){
			return '<div class="warning"><p>'.__('No such post type found.', 'ueneo-shortcodes').'</p></div>';
		}	
		$args = array(
			'post_type'   => $post_type,
		   	'flex_slider_category' => $cat,
		   	'numberposts' => $limit,
		   	'suppress_filters' => false,
		   	'orderby'          => 'post_date',
		);
		$posts = get_posts( $args );
		$category = get_the_category();
		if( count($posts) ):
			$output .= '<div class="flexslider" id="flexslider_'. $cat .'">';
			$output .= '<ul class="slides">';
		    foreach( $posts as $post ): setup_postdata( $post );
	    	$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
	        $output .= '<li>';
		    $output .=	get_the_post_thumbnail() ;
			$output .= '<div class="flexslide-caption">'.do_shortcode( get_the_content() ).'</div>';	
		    $output .= '</li>';
		    endforeach; wp_reset_postdata();
		    $output .= '</ul></div>';
		  else :
		    $output .= '<p>'.__('No posts found.','ueneo-shortcodes').'</p>';
		  endif;
		return $output;
	}
	add_shortcode( 'flex_slider', 'Ueneo_flex_slider' );
}
/*-----------------------------------------------------------------------------------*/
/*	Superslides Shortcode
/*-----------------------------------------------------------------------------------*/
if (!function_exists('Ueneo_super_slides')) {
	function Ueneo_super_slides ($atts) {
		$output = '';
		global $post;
		global $UeneoTheme_Options;
		$default = array(
			'type'      => 'super_slider',
			'limit' => '100'
		  );
		
		$r = shortcode_atts( $default, $atts );
		extract( $r );
		if( empty($post_type) ){
			$post_type = $type;
			$post_type_ob = get_post_type_object( $post_type );
		}	
		if( !$post_type_ob ){
			return '<div class="warning"><p>'.__('No such post type found.', 'ueneo-shortcodes').'</p></div>';
		}	
		$args = array(
			'post_type'   => $post_type,
			'numberposts' => $limit,
			'suppress_filters' => false,
			'orderby'          => 'post_date',
		);
		$posts = get_posts( $args );
		if( count($posts) ):
			$output .= '<div id="superslider_loading"><div class="spinner"><div class="double-bounce1"></div><div class="double-bounce2"></div></div></div>';
			$output .= '<div id="superslider_home">';
			$output .= '<nav class="slides-navigation">
		      			<a href="#" class="next"><span>Next</span></a>
		      			<a href="#" class="prev"><span>Previous</span></a>
		   			 </nav>';
			$output .= '<ul class="slides-container">';
		
		    foreach( $posts as $post ): setup_postdata( $post );
		    $animation = get_post_meta( $post->ID, '_cmb_caption_animation', true );
	    	$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			$alt_text = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true);

			$title = get_the_title();
			$output .= '<li data-tile="'.$title.'">';
			$output .= '<img src="'.$url.'" alt="'.$alt_text.'" data-0="transform:translateY(0px);" data-1500="transform:translateY(650px);"/>';
		    $output .= '<div class="slide-caption" '.$animation.'>';

		    $output .= 	do_shortcode( get_the_content() );
		    $output .= '</div>';
		    $output .= '</li>';
		    endforeach; wp_reset_postdata();
		    $output .= '</ul>';
		 
		    
		    $output .= '<span class="discovery" data-0="transform:translateY(0px); opacity:1;" data-300="transform:translateY(30px);opacity:0;">'.$UeneoTheme_Options->get('ut_super_scroll_text').'</span>';
		    $output .= '<div class="mouseWrap" data-0="transform:translateY(0px); opacity:1;" data-300="transform:translateY(30px);opacity:0;"><span class="mouse"><span class="scroller"></span></span></div>';

		    $output .= '</div>';
		  else :
		    $output .= '<p>'.__('No posts found.','ueneo-shortcodes').'</p>';
		  endif;
	return $output;
	}
	add_shortcode( 'super_slides', 'Ueneo_super_slides' );
}
/*-----------------------------------------------------------------------------------*/
/*	Portfolio Shortcode
/*-----------------------------------------------------------------------------------*/
if (!function_exists('Ueneo_portfolio')) {
	function Ueneo_portfolio($atts){
		global $post;
		global $UeneoTheme_Options;
		$output = '';
	  	$atts = shortcode_atts(
			array(
				'filter_align' => '',
			), $atts);	
	  	$default = array(
		    'type'      => 'portfolios',
		    'limit' => '100'

		);
	  	$r = shortcode_atts( $default, $atts );
	  	extract( $r );
	  	if( empty($post_type) ){
	    	$post_type = $type;
			$post_type_ob = get_post_type_object( $post_type );
		}	  
	  	if( !$post_type_ob ){
	    	return '<div class="warning"><p>'.__('No such post type found.', 'ueneo-shortcodes').'</em> found.</p></div>';
	 	}
 	  	$args = array(
		    'post_type'   => $post_type,
	    	'numberposts' => $limit,
	    	'suppress_filters' => false,
	    	'orderby'          => 'post_date',

	  	);
		$posts = get_posts( $args );
	  	$category = get_the_category();
		
		if (isset($UeneoTheme_Options)){

			$items_per_row = $UeneoTheme_Options->get('ut_portfolio_items_per_row');
			$hover_style = $UeneoTheme_Options->get('ut_p_t_hover_style');
			
			
			
		}
		if( count($posts) ){
	
			$output .= '<div class="c12 end">';	
			$output .= '<ul class="portfolio-nav '.$atts['filter_align'].'">';	
			$output .= '<li class="filter checked" data-filter="all">All</li>';
			$categories = get_categories(array('taxonomy' => 'portfolio_item_category'));
			foreach ($categories as $category) {
				$output .= '<li class="filter" data-filter="'. preg_replace('/\s+/', '', $category->cat_name) .'">';
				$output .= $category->cat_name;
				$output .= '</li>';
			}

			$output .= '</ul>';
			
			$output .= '</div></div>';
			$output .= '<ul id="portfolioinner" class="'. $items_per_row .' '. $hover_style .'">';
			foreach( $posts as $post ): setup_postdata( $post );
			$terms = get_the_terms( $post->ID, 'portfolio_item_category' );
			if ( $terms && ! is_wp_error( $terms ) ) : 
				$portfolio_links = array();
			foreach ( $terms as $term ) {
				$portfolio_links[] = preg_replace('/\s+/', '', $term->name);
			}
			$portfolio_item_category = join( " ", $portfolio_links );
			$portfolio_category_list = join( " / ", $portfolio_links );

			endif;
	    	$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
	 	
	 		$output .= '<li class="item all ' .$portfolio_item_category. '">';       
		    $output .= '<figure>';
		    $output .= get_the_post_thumbnail($post->ID, 'large');
		    $output .= '<figcaption>';
		    $output .= '<a class="plink" href="'.get_permalink(get_the_ID()).'" ></a>' ;
		    $output .= '<div class="caption-inner">';
		    $output .= '<h3>'.get_the_title().'</h3>';
		    $output .= '<em>'.$portfolio_category_list.'</em>';
		    $output .= '</div>';
		    $output .= '</figcaption>';
		    $output .= '</figure>' ; 
		    $output .= '</li>';   
		    endforeach; wp_reset_postdata();
		    $output .= '</ul>';
		    $output .= '<div class="grid">';

		}	
		else{
	    	$output .= '<p>'.__('No posts found.','ueneo-shortcodes').'</p>';
	    }	

	 	return $output;
	}
	add_shortcode( 'portfolio', 'Ueneo_portfolio' );
}



/*-----------------------------------------------------------------------------------*/
/*	Full Width Section Shortcode
/*-----------------------------------------------------------------------------------*/
if (!function_exists('Ueneo_full_width_section')) {
	function Ueneo_full_width_section ($atts, $content = null) {
		$output = '';
		$atts = shortcode_atts(
			array(
				'background' => '',
				'height' => '',
		
			), $atts);	
		$output .= '</div>';
		$output .= '</div>';
		$output .= '<div class="full-width-section" style="background-image:url('.$atts['background'].'); height:'.$atts['height'].';" data-bottom-top="background-position: 50% 300px" data-top-bottom="background-position: 50% -250px;" >';

		$output .= '<div class="full-width-section-content">';
		$output .= do_shortcode($content);
		return $output;
	}
	add_shortcode( 'full_width_section', 'Ueneo_full_width_section' );
}
/*-----------------------------------------------------------------------------------*/
/*	Parallax Background Shortcode
/*-----------------------------------------------------------------------------------*/
if (!function_exists('Ueneo_parallax_background')) {
function Ueneo_parallax_background ($atts, $content = null) {
	$output = '';
	$atts = shortcode_atts(
		array(
			'background' => ''
		), $atts);	
	$output .= '</div>';
	$output .= '<div class="parallaxBackground" style="background-image:url('.$atts['background'].');" >';
	
	$output .= '<div class ="grid">'.do_shortcode($content).'</div>';
	return $output;
}
add_shortcode( 'parallax_background', 'Ueneo_parallax_background' );
}


/*-----------------------------------------------------------------------------------*/
/*	Maksed Image Shortcode
/*-----------------------------------------------------------------------------------*/
if (!function_exists('Ueneo_masked_image')) {
	function Ueneo_masked_image ($atts, $content = null) {
		$output = '';
		$atts = shortcode_atts(
			array(
				'background' => '',
				'mask' => '',
		
			), $atts);	
		$output = '<div class="masked-image" style="background-image: url('.$atts['background'].');" data-bottom-top="background-position: 0% 0%;" data-top-bottom="background-position: -50% 0%;">';
		$output .= '<img src="'.$atts['mask'].'" alt="image"/>';
		$output .= '</div>';
		$output .= do_shortcode($content);
		return $output;
	}
	add_shortcode( 'masked_image', 'Ueneo_masked_image' );
}



/*-----------------------------------------------------------------------------------*/
/*	Google Map Shortcode
/*-----------------------------------------------------------------------------------*/

if (! function_exists( 'Ueneo_google_map' ) ){
	function Ueneo_google_map($atts, $content = null) {
		global $UeneoTheme_Options;
		extract(shortcode_atts(array(
				'title'		=> '',
				'location'	=> '',
				'height'	=> '350',
				'zoom'		=> 8,
				'class'		=> '',

		), $atts));
	
		$output = '</div><div id="map_canvas_'.rand(1, 100).'" class="googlemap '. $class .'" style="height:'.$height.'px;width:100%">';
			$output .= (!empty($title)) ? '<input class="title" type="hidden" value="'.$title.'" />' : '';
			$output .= '<input class="location" type="hidden" value="'.$location.'" />';
			$output .= '<input class="zoom" type="hidden" value="'.$zoom.'" />';
			if (isset($UeneoTheme_Options)){
				$output .= '<input class="hue" type="hidden" value="'.$UeneoTheme_Options->get('39').'" />';
				$output .= '<input class="saturation" type="hidden" value="'.$UeneoTheme_Options->get('40').'" />';
				$output .= '<input class="lightness" type="hidden" value="'.$UeneoTheme_Options->get('42').'" />';
				$output .= '<input class="iconLink" type="hidden" value="'.$UeneoTheme_Options->get('41').'" />';
				$output .= '<input class="styledMap" type="hidden" value="'.$UeneoTheme_Options->get('ut_styled_map').'" />';
				
			}	
			
	    	$output .= '<div class="map_canvas"></div>';
	    	
		
		$output .= '</div><div class="grid">';

		return $output;
	}
	add_shortcode("google_map", "Ueneo_google_map");
}

/*-----------------------------------------------------------------------------------*/
/*	Testimonials Shortcodes
/*-----------------------------------------------------------------------------------*/
if (! function_exists( 'Ueneo_testimonials_slider' ) ){
	function Ueneo_testimonials_slider( $atts, $content = null ) {

	    $output  =  '<div class="flexslider testimonials">';
	    $output .=  '<ul class="slides">';
	    $output .=  do_shortcode($content);
	    $output .=  '</ul></div>';
	    return $output;
	}
	add_shortcode( 'testimonials_slider', 'Ueneo_testimonials_slider' ); 
}
if (! function_exists( 'Ueneo_testimonial' ) ){
	function Ueneo_testimonial( $atts, $content = null ) {
	    extract( shortcode_atts( array(
		    'image' => '',
		    'name' => '',
		    'company' => '',
		    ), $atts )
	    );
	    $output  = '<li>';
	    $output  .= '<div class="flex-caption">';
	    $output  .= '<blockquote>';
		if($atts['image']){
			$output  .= '<span class="testimonial-avatar" style="background:url('.$atts['image'].') no-repeat center center;"></span>';
		}
		$output  .= '<p>'.do_shortcode($content).'</p>';
		$output  .= '<cite><span>'.$atts['name'].'</span>'.$atts['company'].'</cite>';
	    $output  .= '</blockquote>';
	    $output  .= '</div>';
	    $output  .= '</li>';
	    return $output; 
	}
	add_shortcode( 'testimonial', 'Ueneo_testimonial' );
}

/*-----------------------------------------------------------------------------------*/
/*	Remove Auto <p> tags from shortcodes
/*-----------------------------------------------------------------------------------*/
function Ueneo_clean_shortcodes($content){   
$array = array (
    '<p>[' => '[', 
    ']</p>' => ']', 
    ']<br />' => ']'
);
$content = strtr($content, $array);
return $content;
}
add_filter('the_content', 'Ueneo_clean_shortcodes');

/*-----------------------------------------------------------------------------------*/
/*	Pricing Table
/*-----------------------------------------------------------------------------------*/

if (! function_exists( 'Ueneo_pricing_table' ) ){
	function Ueneo_pricing_table( $atts, $content = null ) {
	    extract( shortcode_atts( array(
	    	'featured' => '',
	    	'plan' => '',
	    	'cost' => '',
	    	'currency' => '',
	    	'button_text' => '',
	    	'button_url' => '',
	    	'button_link_target' => '',


	    ), $atts )
	    );
	    if($atts['featured'] == 'yes'){
	    	$output  = '<div class="pricing-table featured"><i class="fa fa-star"></i>';
	    }
	    else{
	    	$output  = '<div class="pricing-table">';
	    }
	    $output .= '<div class="pricing-header">';
	   
	    $output  .= '<h2>'.$atts['plan'].'</h2>';
	     
	    if($atts['featured'] == 'yes'){
	    	$output  .= '<span>'. __('Recommended', 'ueneo-shortcodes').'</span>';
	    }
	    $output  .= '<p class="cost mega"><span>'.$atts['currency'].'</span>'.$atts['cost'].'</p>';


	    $output .= '</div>';
	    $output  .= '<ul>';
	    $output  .= do_shortcode($content);
	    $output  .= '</ul>';
	    $output  .= '<a target="'.$atts['button_link_target'].'" class="button colored outline large" href="'.$atts['button_url'].'">'.$atts['button_text'].'</a>';
	    $output  .= '</div>';

	    return $output; 
	}
	add_shortcode( 'pricing_table', 'Ueneo_pricing_table' );
}

if (! function_exists( 'Ueneo_feature' ) ){
	function Ueneo_feature( $atts, $content = null ) {
	    $output  = '<li>';
	    $output  .= do_shortcode($content);
	    $output  .= '</li>';
	    return $output; 
	}
	add_shortcode( 'feature', 'Ueneo_feature' );
}


/*-----------------------------------------------------------------------------------*/
/*	Icon Box Shortcode
/*-----------------------------------------------------------------------------------*/
if (! function_exists( 'Ueneo_icon_box' ) ){
	function Ueneo_icon_box( $atts, $content = null ) {
	    extract( shortcode_atts( array(
	    'icon' => '',
	    'style' => '',
	    ), $atts )
	    );

	    $output  = '<div class="iconbox '.$atts['style'].'" >';
	    $output  .= '<div class="icon"><i class="fa '.$atts['icon'].' fa-3x"></i></div>';
	    $output  .= '<div class="iconcontent">'. do_shortcode($content) .'</div>';
	    $output  .= '</div>';

  	    return $output; 
	}
	add_shortcode( 'icon_box', 'Ueneo_icon_box' );
}


/*-----------------------------------------------------------------------------------*/
/*	Counter Shortcode
/*-----------------------------------------------------------------------------------*/
if (! function_exists( 'Ueneo_counter' ) ){
	function Ueneo_counter( $atts, $content = null ) {
	    extract( shortcode_atts( array(
	    'number' => '',
	    'details' => '',

	    ), $atts )
	    );
	    
	    $output  = '<div class="counter">';
	    $output  .= '<span class="counter-count mega">'.$atts['number'].'</span>';
	    $output  .= '<span class="counter-details">'.$atts['details'].'</span>';
	    $output  .= '</div>';

  
	    return $output; 
	}
	add_shortcode( 'counter', 'Ueneo_counter' );
}

/*-----------------------------------------------------------------------------------*/
/*	CSS Animation Shortcode
/*-----------------------------------------------------------------------------------*/
if (! function_exists( 'Ueneo_css_animation' ) ){
	function Ueneo_css_animation( $atts, $content = null ) {
	    extract( shortcode_atts( array(
	    'style' => '',

	    ), $atts )
	    );
	    
	    $output  = '<div class="css-animation ' .$atts['style'] .' ">';
	    $output  .= do_shortcode($content);
	    $output  .= '</div>';

  
	    return $output; 
	}
	add_shortcode( 'css_animation', 'Ueneo_css_animation' );
}

/*-----------------------------------------------------------------------------------*/
/*	Clients Slider
/*-----------------------------------------------------------------------------------*/

if (! function_exists( 'Ueneo_clients_slider' ) ){
	function Ueneo_clients_slider( $atts, $content = null ) {
		extract( shortcode_atts( array(
			    'items' => '',
		    ), $atts )
	    );
	    $output  =  '<div class="clients" data-items="'.$atts['items'].'">';
	    $output .=  do_shortcode($content);
	    $output .=  '</div>';
	    return $output;
	}
	add_shortcode( 'clients_slider', 'Ueneo_clients_slider' ); 
}

if (! function_exists( 'Ueneo_client' ) ){
	function Ueneo_client( $atts, $content = null ) {
	    $output  = '<div class="item">';
	    $output  .= do_shortcode($content);
	    $output  .= '</div>';
	    return $output; 
	}
	add_shortcode( 'client', 'Ueneo_client' );
}


/*-----------------------------------------------------------------------------------*/
/*	Team Shortcode
/*-----------------------------------------------------------------------------------*/
if (!function_exists('Ueneo_team')) {
	function Ueneo_team($atts){
	
		global $post;
		global $UeneoTheme_Options;
		$output = '';
	  	$default = array(
		    'type'      => 'team',
		    'limit' => '100'

		);
	  	$r = shortcode_atts( $default, $atts );
	  	extract( $r );
	  	if( empty($post_type) ){
	    	$post_type = $type;
			$post_type_ob = get_post_type_object( $post_type );
		}	  
	  	if( !$post_type_ob ){
	    	return '<div class="warning"><p>'.__('No such post type found.', 'ueneo-shortcodes').'</em> found.</p></div>';
	 	}
 	  	$args = array(
		    'post_type'   => $post_type,
	    	'numberposts' => $limit,
	    	'suppress_filters' => false,
	    	'orderby'          => 'post_date',

	  	);
		$posts = get_posts( $args );
	  	$category = get_the_category();
	  	$output = '<div id="team-loading">';
		$output .= '<div class="spinner"><div class="double-bounce1"></div><div class="double-bounce2"></div></div>';
		$output .= '</div>';
	  	$output .= '<div id="team-details"></div>';

		
		if (isset($UeneoTheme_Options)){
			$hover_style = $UeneoTheme_Options->get('ut_p_t_hover_style');
		}
		if( count($posts) ){
	
			foreach( $posts as $post ): setup_postdata( $post );
				
				$role = get_post_meta( $post->ID, '_cmb_role', true );
				
				
				$twitter_link = get_post_meta( $post->ID, '_cmb_twitter_link', true ); 
				$facebook_link = get_post_meta( $post->ID, '_cmb_facebook_link', true ); 
				$dribbble_link = get_post_meta( $post->ID, '_cmb_dribbble_link', true ); 
				$github_link = get_post_meta( $post->ID, '_cmb_github_link', true ); 
				$youtube_link = get_post_meta( $post->ID, '_cmb_youtube_link', true ); 
				$vimeo_link = get_post_meta( $post->ID, '_cmb_vimeo_link', true ); 
				$instagram_link = get_post_meta( $post->ID, '_cmb_instagram_link', true );
				$pinterest_link = get_post_meta( $post->ID, '_cmb_pinterest_link', true ); 
				$wordpress_link = get_post_meta( $post->ID, '_cmb_wordpress_link', true ); 
				$google_link = get_post_meta( $post->ID, '_cmb_google_link', true );
				$flickr_link = get_post_meta( $post->ID, '_cmb_flickr_link', true );
				$linkedin_link = get_post_meta( $post->ID, '_cmb_linkedin_link', true );
				$dropbox_link = get_post_meta( $post->ID, '_cmb_dropbox_link', true ); 
				$tumblr_link = get_post_meta( $post->ID, '_cmb_tumblr_link', true ); 
				$behance_link = get_post_meta( $post->ID, '_cmb_behance_link', true ); 
			
				$output .= '<div class="c4 team-member '.$hover_style.'">';
				$output .= '<figure class="team-image">';
				
				$output .= get_the_post_thumbnail($post->ID);
				$output .= '<figcaption>';

				$output .= '<h3>'. get_the_title() . '</h3>';
				$output .= '<em>'.$role.'</em>';
				if ( has_excerpt() ) 
				{
				    $the_excerpt = get_the_excerpt();
					$output .= "<p>$the_excerpt</p>";
				} 
				else 
				{
				    $the_excerpt = Ueneo_get_special_excerpt(3072);
					$the_excerpt = preg_replace("~(?:\[/?)[^/\]]+/?\]~s", '', $the_excerpt);
					$the_excerpt = Ueneo_string_limit_words($the_excerpt, 18);
					$output .="<p>$the_excerpt</p>";
				}
				$output .= '<a class="viewdetails" href="'.get_permalink(get_the_ID()).'">View More</a>';
				$output .= '</figcaption>';
				$output .= '</figure>';
				$output .= '<ul class="social-networks">';
					if($twitter_link <> ''){
						$output .= '<li class="twitter"><a href="'.$twitter_link.'" target="_blank"><i class="fa fa-twitter fa-lg"></i></a></li>';
					}
					if($facebook_link <> ''){
						$output .= '<li class="facebook"><a href="'.$facebook_link.'" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>';
					}
					if($dribbble_link <> ''){
						$output .= '<li class="dribbble"><a href="'.$dribbble_link.'" target="_blank"><i class="fa fa-dribbble fa-lg"></i></a></li>';
					}
					if($github_link <> ''){
						$output .= '<li class="github"><a href="'.$github_link.'" target="_blank"><i class="fa fa-github fa-lg"></i></a></li>';
					}
					if($youtube_link <> ''){
						$output .= '<li class="youtube"><a href="'.$youtube_link.'" target="_blank"><i class="fa fa-youtube fa-lg"></i></a></li>';
					}
					if($vimeo_link <> ''){
						$output .= '<li class="vimeo"><a href="'.$vimeo_link.'" target="_blank"><i class="fa fa-vimeo-square fa-lg"></i></a></li>';
					}
					if($instagram_link <> ''){
						$output .= '<li class="instagram"><a href="'.$instagram_link.'" target="_blank"><i class="fa fa-instagram fa-lg"></i></a></li>';
					}
					if($pinterest_link <> ''){
						$output .= '<li class="pinterest"><a href="'.$pinterest_link.'" target="_blank"><i class="fa fa-pinterest fa-lg"></i></a></li>';
					}
					if($wordpress_link <> ''){
						$output .= '<li class="wordpress"><a href="'.$wordpress_link.'" target="_blank"><i class="fa fa-wordpress fa-lg"></i></a></li>';
					}
					if($google_link <> ''){
						$output .= '<li class="google"><a href="'.$google_link.'" target="_blank"><i class="fa fa-google-plus fa-lg"></i></a></li>';
					}
					if($flickr_link <> ''){
						$output .= '<li class="flickr"><a href="'.$flickr_link.'" target="_blank"><i class="fa fa-flickr fa-lg"></i></a></li>';
					}
					if($linkedin_link <> ''){
						$output .= '<li class="linkedin"><a href="'.$linkedin_link.'" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a></li>';
					}
					if($dropbox_link <> ''){
						$output .= '<li class="dropbox"><a href="'.$dropbox_link.'" target="_blank"><i class="fa fa-dropbox fa-lg"></i></a></li>';
					}
					if($tumblr_link <> ''){
						$output .= '<li class="tumblr"><a href="'.$tumblr_link.'" target="_blank"><i class="fa fa-tumblr fa-lg"></i></a></li>';
					}
					if($behance_link <> ''){
						$output .= '<li class="behance"><a href="'.$behance_link.'" target="_blank"><i class="fa fa-behance fa-lg"></i></a></li>';
					}
				$output .= '</ul>'; 




  				$output .= '</div>';
		    endforeach; wp_reset_postdata();
		  
		}	
		else{
	    	$output .= '<p>'.__('No posts found.','ueneo-shortcodes').'</p>';
	    }	

	 	return $output;
	}
	add_shortcode( 'team', 'Ueneo_team' );
}