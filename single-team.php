<?php get_header(); ?>

<div id="primary" class="grid">         
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="c12 end"><hr></div>
	<div class="c3"><?php the_post_thumbnail(); ?></div>
	<div class="c9 end">
			<?php $UeneoTheme_role = get_post_meta( $post->ID, '_cmb_role', true ); ?>
			<?php $UeneoTheme_icon = get_post_meta( $post->ID, '_cmb_icon', true ); ?>
			<?php echo '<a id="team-close" href="#"">Close</a>'; ?>
			<h2 class="member-name"><?php the_title(); ?></h2>
			<?php echo '<span class="role"><em>'.$UeneoTheme_role.'</em></span>'; ?>

	

	

	<?php 
		
			
		$UeneoTheme_twitter_link = get_post_meta( $post->ID, '_cmb_twitter_link', true ); 
		$UeneoTheme_facebook_link = get_post_meta( $post->ID, '_cmb_facebook_link', true ); 
		$UeneoTheme_dribbble_link = get_post_meta( $post->ID, '_cmb_dribbble_link', true ); 
		$UeneoTheme_github_link = get_post_meta( $post->ID, '_cmb_github_link', true ); 
		$UeneoTheme_youtube_link = get_post_meta( $post->ID, '_cmb_youtube_link', true ); 
		$UeneoTheme_vimeo_link = get_post_meta( $post->ID, '_cmb_vimeo_link', true ); 
		$UeneoTheme_instagram_link = get_post_meta( $post->ID, '_cmb_instagram_link', true );
		$UeneoTheme_pinterest_link = get_post_meta( $post->ID, '_cmb_pinterest_link', true ); 
		$UeneoTheme_wordpress_link = get_post_meta( $post->ID, '_cmb_wordpress_link', true ); 
		$UeneoTheme_google_link = get_post_meta( $post->ID, '_cmb_google_link', true );
		$UeneoTheme_flickr_link = get_post_meta( $post->ID, '_cmb_flickr_link', true );
		$UeneoTheme_linkedin_link = get_post_meta( $post->ID, '_cmb_linkedin_link', true );
		$UeneoTheme_dropbox_link = get_post_meta( $post->ID, '_cmb_dropbox_link', true ); 
		$UeneoTheme_tumblr_link = get_post_meta( $post->ID, '_cmb_tumblr_link', true ); 
		$UeneoTheme_behance_link = get_post_meta( $post->ID, '_cmb_behance_link', true ); 

		$UeneoTheme_output = '<ul class="social-networks member-networks">';
			if($UeneoTheme_twitter_link <> ''){
				$UeneoTheme_output .= '<li class="twitter"><a href="'.$UeneoTheme_twitter_link.'" target="_blank"><i class="fa fa-twitter fa-lg"></i></a></li>';
			}
			if($UeneoTheme_facebook_link <> ''){
				$UeneoTheme_output .= '<li class="facebook"><a href="'.$UeneoTheme_facebook_link.'" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>';
			}
			if($UeneoTheme_dribbble_link <> ''){
				$UeneoTheme_output .= '<li class="dribbble"><a href="'.$UeneoTheme_dribbble_link.'" target="_blank"><i class="fa fa-dribbble fa-lg"></i></a></li>';
			}
			if($UeneoTheme_github_link <> ''){
				$UeneoTheme_output .= '<li class="github"><a href="'.$UeneoTheme_github_link.'" target="_blank"><i class="fa fa-github fa-lg"></i></a></li>';
			}
			if($UeneoTheme_youtube_link <> ''){
				$UeneoTheme_output .= '<li class="youtube"><a href="'.$UeneoTheme_youtube_link.'" target="_blank"><i class="fa fa-youtube fa-lg"></i></a></li>';
			}
			if($UeneoTheme_vimeo_link <> ''){
				$UeneoTheme_output .= '<li class="vimeo"><a href="'.$UeneoTheme_vimeo_link.'" target="_blank"><i class="fa fa-vimeo-square fa-lg"></i></a></li>';
			}
			if($UeneoTheme_instagram_link <> ''){
				$UeneoTheme_output .= '<li class="instagram"><a href="'.$UeneoTheme_instagram_link.'" target="_blank"><i class="fa fa-instagram fa-lg"></i></a></li>';
			}
			if($UeneoTheme_pinterest_link <> ''){
				$UeneoTheme_output .= '<li class="pinterest"><a href="'.$UeneoTheme_pinterest_link.'" target="_blank"><i class="fa fa-pinterest fa-lg"></i></a></li>';
			}
			if($UeneoTheme_wordpress_link <> ''){
				$UeneoTheme_output .= '<li class="wordpress"><a href="'.$UeneoTheme_wordpress_link.'" target="_blank"><i class="fa fa-wordpress fa-lg"></i></a></li>';
			}
			if($UeneoTheme_google_link <> ''){
				$UeneoTheme_output .= '<li class="google"><a href="'.$UeneoTheme_google_link.'" target="_blank"><i class="fa fa-google-plus fa-lg"></i></a></li>';
			}
			if($UeneoTheme_flickr_link <> ''){
				$UeneoTheme_output .= '<li class="flickr"><a href="'.$UeneoTheme_flickr_link.'" target="_blank"><i class="fa fa-flickr fa-lg"></i></a></li>';
			}
			if($UeneoTheme_linkedin_link <> ''){
				$UeneoTheme_output .= '<li class="linkedin"><a href="'.$UeneoTheme_linkedin_link.'" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a></li>';
			}
			if($UeneoTheme_dropbox_link <> ''){
				$UeneoTheme_output .= '<li class="dropbox"><a href="'.$UeneoTheme_dropbox_link.'" target="_blank"><i class="fa fa-dropbox fa-lg"></i></a></li>';
			}
			if($UeneoTheme_tumblr_link <> ''){
				$UeneoTheme_output .= '<li class="tumblr"><a href="'.$UeneoTheme_tumblr_link.'" target="_blank"><i class="fa fa-tumblr fa-lg"></i></a></li>';
			}
			if($UeneoTheme_behance_link <> ''){
				$UeneoTheme_output .= '<li class="behance"><a href="'.$UeneoTheme_behance_link.'" target="_blank"><i class="fa fa-behance fa-lg"></i></a></li>';
			}
			$UeneoTheme_output .= '</ul>'; 
			$UeneoTheme_output .= '</div>'; 

			echo $UeneoTheme_output;
			
			the_content();  

		?>
		<?php endwhile; ?>
	
</div>

<?php get_footer(); ?>