<?php global $UeneoTheme_Options; ?>
<?php $UeneoTheme_blog_header = $UeneoTheme_Options->get('ut_blog_header'); ?>
	<header class="page-header" style="background:url('<?php echo $UeneoTheme_blog_header; ?>');" data-0="background-position:0px 0px;" data-300="background-position:0px 100px;">
		<div class="grid">
			<div class="c12 end">
				<h1 class="page-title"><?php _e( 'Nothing Found', 'ueneotheme' ); ?></h1>
			</div>
		</div>
	</header>
	<div class="grid">
		<?php
		$UeneoTheme_blog_layout = $UeneoTheme_Options->get('ut_blog_layout');
		$UeneoTheme_blog_class = "site-content";
		if($UeneoTheme_blog_layout == 'masonry' ){
			$UeneoTheme_blog_class = "site-content masonry-container";
		}
		?>	
		<main id="main" class="<?php echo $UeneoTheme_blog_class; ?>" role="main">
			<div class="row">
				<div class="c12 end">
					<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
						<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'ueneotheme' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
					<?php elseif ( is_search() ) : ?>
						<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'ueneotheme' ); ?></p>
					<?php else : ?>
						<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'ueneotheme' ); ?></p>
				</div>
			</div>
					<?php endif; ?>
		</main>
	

