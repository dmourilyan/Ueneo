
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_search() || is_archive() || is_home() ) { ?>
			<?php 
				global $UeneoTheme_Options; 
				$UeneoTheme_blog_layout = $UeneoTheme_Options->get('ut_blog_layout');
				if($UeneoTheme_blog_layout == 'masonry' ){
					echo '<div class="masonry-item">';
				}
				?>


			<div class="entry-summary <?php if ( !has_post_thumbnail() && ! has_post_format( array( 'quote', 'link' )) ) {
				echo "no-post-thumbnail";
			}?>">
							
				<?php 
				$format = get_post_format( $post->ID );
				switch ($format) {
					case 'link': ?>
						<div class="c12 end">	
						<?php 
						    $first_link = '';
						    $output = preg_match_all('/<a.+href=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
						    $first_link = $matches [1] [0];
							$feature_image_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
							?>
							<div class="feature-background"> 
								<a class="feature-background-link" href="<?php echo $first_link; ?>"><?php the_title(); ?></a>
								<i class="fa fa-chain fa-lg"></i>
								<div class="feature-background-content">
								<h2 class="entry-title"><?php the_title(); ?></h2>
								<?php the_content(); ?>
								</div>
								<span class="feature-background-image" style="background-image:url('<?php echo $feature_image_url; ?>');"></span> 
							</div>
						</div>	
						<?php
				  
				    break;
				    
				    case 'quote': ?>

				   		<div class="c12 end">	
							<?php $feature_image_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
							<div class="feature-background"> 
								<i class="fa fa-quote-right fa-lg"></i>
								<a class="feature-background-link" href="<?php echo get_permalink(get_the_ID()); ?>"><?php the_title(); ?></a>
								<div class="feature-background-content">
								<?php the_content(); ?>
								</div>
								<span class="feature-background-image" style="background-image:url('<?php echo $feature_image_url; ?>');"></span> 
							</div>
						</div>	


				   	<?php 
				   	break;

				   	case 'video': ?>
						<div class="c12 end">	
							<a class="recent-post-img" href="<?php echo get_permalink(get_the_ID());?>" > 
								<i class="fa fa-caret-right fa-2x"></i>
								<?php echo get_the_post_thumbnail($post->ID);?>
							</a>
						</div>	
						<?php
				   	break;

				   	case 'audio': ?>
						<div class="c12 end">	
							<a class="recent-post-img" href="<?php echo get_permalink(get_the_ID());?>" > 
								<i class="fa fa-music fa-2x"></i>
								<?php echo get_the_post_thumbnail($post->ID);?>
							</a>
						</div>	
						<?php
				   	break;


				   	default: ?>
						<div class="c12 end">	
							<a class="recent-post-img" href="<?php echo get_permalink(get_the_ID());?>" > 
								<?php echo get_the_post_thumbnail($post->ID);?>
							</a>
						</div>	
						<?php

				} ?>


				<?php if ( ! has_post_format( array( 'quote', 'link' )) ) { ?>
					<!--EXCERPT-->
					<div class="c12 end">
						<div class="entry-details">
							<?php echo get_avatar( get_the_author_meta( 'ID' ) ) ?>
							<?php echo __('By ', 'uenotheme') ?> <a class="author" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_the_author() ;?></a>
							<span class="postdate"><?php echo ' / '. get_the_date('j M Y'); ?></span>
						</div>
						<div class="entry-meta">
								<h2 class="entry-title underline"><a href="<?php echo get_permalink(get_the_ID()); ?>"><?php the_title(); ?></a></h2>
						</div>
						<?php if ( has_excerpt() ) 
							{
							    $UeneoTheme_the_excerpt = get_the_excerpt();
							    echo "<p>$UeneoTheme_the_excerpt</p>";
							} 
							else 
							{
							    $UeneoTheme_the_excerpt = UeneoTheme_get_special_excerpt(3072);
								$UeneoTheme_the_excerpt = preg_replace("~(?:\[/?)[^/\]]+/?\]~s", '', $UeneoTheme_the_excerpt);
								if(has_post_format('video')){
									$UeneoTheme_the_excerpt = preg_replace('|https?://www\.[a-z\.0-9/?\S*]+|i', '',  $UeneoTheme_the_excerpt);	
								}
								
								if($UeneoTheme_blog_layout == 'masonry' ){
									$UeneoTheme_the_excerpt = UeneoTheme_string_limit_words($UeneoTheme_the_excerpt, 25);
								}
								else{
									$UeneoTheme_the_excerpt = UeneoTheme_string_limit_words($UeneoTheme_the_excerpt, 75);
								}
								echo "<p>$UeneoTheme_the_excerpt</p>";
							}
						?>


						<a class="readmore" href="<?php echo get_permalink(get_the_ID());?>"><?php echo __('Read more', 'uenotheme'); ?></a>	
						
	
						<div class="share-wrap">
							<div class="share">
								<div class="fb-like" data-href="<?php echo get_permalink($post->ID); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
								<a href="https://twitter.com/share" class="twitter-share-button" data-text="<?php the_title(); ?>" data-url="<?php the_permalink(); ?>">Tweet</a>
								<g:plusone size="medium" annotation="bubble" href="<?php the_permalink(); ?>"></g:plusone>
							</div>
							<i class="fa fa-share-alt"></i>
						</div>

					</div>
				<?php } ?>	
				
				
				<?php 
				if($UeneoTheme_blog_layout != 'masonry' ){
					echo '<div class="c12 end"><hr></div>';
				}
				else{
					echo '</div>';
				}
				?>	
			</div>

		
		<?php 
		}

		
		else { ?>
				<div class="row">
					<div class="c12 end">
						<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'uenotheme' ) ); ?>
						<?php
						wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'uenotheme' ),
						'after' => '</div>',
						) );
						?>
					</div>
				</div>
				<div class="entry-meta">
						<div class="c12 end"><hr></div>
						<div class="c12 end">
								<?php 
								$UeneoTheme_tags_list = get_the_tag_list( '', __( ', ', 'uenotheme' ) );
								if ( $UeneoTheme_tags_list ){  
									echo '<span class="tags-links li_tag"><i class="fa fa-tag"></i>';
									printf( __( 'Tagged: %1$s', 'uenotheme' ), $UeneoTheme_tags_list ); 
									echo '</span>';
								}
								?>
								<div class="share-wrap">
									<div class="share">
										<div class="fb-like" data-href="<?php echo get_permalink($post->ID); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
										<a href="https://twitter.com/share" class="twitter-share-button" data-text="<?php the_title(); ?>" data-url="<?php the_permalink(); ?>">Tweet</a>
										<g:plusone size="medium" annotation="bubble" href="<?php the_permalink(); ?>"></g:plusone>
									</div>
									<i class="fa fa-share-alt"></i>
								</div>
						</div>
						<div class="c12 end"><hr></div>		
				</div>
					
		<?php } ?>
		     
			

</article>


