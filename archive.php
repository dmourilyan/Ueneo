<?php get_header(); ?>

		<div id="primary">
   			<?php $UeneoTheme_blog_header = $UeneoTheme_Options->get('ut_blog_header'); 
   					$UeneoTheme_blog_layout = $UeneoTheme_Options->get('ut_blog_layout');
					if($UeneoTheme_blog_layout == 'masonry' ){
						$UeneoTheme_header_class = "page-header masonry-header";
					}
					else{
						$UeneoTheme_header_class = "page-header";
					}

   			?>
			<?php if ( have_posts() ) : ?>
				<header class="<?php echo $UeneoTheme_header_class;?>" style="background:url('<?php echo $UeneoTheme_blog_header; ?>');" data-0="background-position:0px 0px;" data-300="background-position:0px 100px;">
					
	
					<div class="grid">
						<div class="c12 end">
								<h1 class="page-title underline">
							<?php
							if ( is_category() ) :
							single_cat_title();

							elseif ( is_tag() ) :
							single_tag_title();

							elseif ( is_author() ) :

							the_post();
							printf( __( 'Author: %s', 'ueneotheme' ), '<span class="vcard">' . get_the_author() . '</span>' );
			
							rewind_posts();

							elseif ( is_day() ) :
							printf( __( 'Day: %s', 'ueneotheme' ), '<span>' . get_the_date() . '</span>' );

							elseif ( is_month() ) :
							printf( __( 'Month: %s', 'ueneotheme' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

							elseif ( is_year() ) :
							printf( __( 'Year: %s', 'ueneotheme' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

							elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'ueneotheme' );

							elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'ueneotheme');

							elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'ueneotheme' );

							elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'ueneotheme' );

							elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'ueneotheme' );

							else :
							_e( 'Archives', 'ueneotheme' );

							endif;
							?>
							</h1>
				
							<?php
							if ( is_category() ) {
								$UeneoTheme_category_description = category_description();
								if ( ! empty( $UeneoTheme_category_description ) )
									echo apply_filters( 'category_archive_meta', '<h2><em>' . $UeneoTheme_category_description . '</em></h2>' );

							} elseif ( is_tag() ) {
								$UeneoTheme_tag_description = tag_description();
								if ( ! empty( $UeneoTheme_tag_description ) )
									echo apply_filters( 'tag_archive_meta', '<h2><em>' . $UeneoTheme_tag_description . '</h2></em>' );
							}

							elseif ( is_author() ) {
								$UeneoTheme_author_description = get_the_author_meta('description');
								if( ! empty($UeneoTheme_author_description)){
									echo '<h2><em>'. $UeneoTheme_author_description .'</h2></em>' ;
								}

							}
							?>

						</div>

					</div>


		
				</header>
				<div class="grid">
					<?php
					$UeneoTheme_blog_class = "site-content";
					if($UeneoTheme_blog_layout == 'masonry' ){
						$UeneoTheme_blog_class = "site-content masonry-container";
					}
					?>	
					<main id="main" class="<?php echo $UeneoTheme_blog_class; ?>" role="main">

						<?php while ( have_posts() ) : the_post(); ?>
							<?php
								get_template_part('content', get_post_format() );
							?>
						
		

						<?php endwhile; ?>

						<?php else : ?>
							<?php get_template_part( 'no-results', 'archive' ); ?>
						<?php endif; ?>

						<?php 
						if($UeneoTheme_blog_layout != 'masonry' ){
							echo '<div class="c12 end">';
							wpex_pagination();
							echo '</div>'; 
						}
						else{
							echo '<div class="loadmore">';
							echo '<i class="fa fa-refresh"></i>';
							next_posts_link(__( 'Load More', 'ueneotheme' )); 
							echo '</div>';
						}
						?>

					</main>
				
					<?php 
					$UeneoTheme_sidebar_pos = $UeneoTheme_Options->get('ut_blog_sidebar');
					if($UeneoTheme_sidebar_pos == 2 || $UeneoTheme_sidebar_pos == 3 ){
						get_sidebar();
					}
					?>		
				</div>
			</div>

<?php get_footer(); ?>