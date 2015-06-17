<?php get_header(); ?>

<div id="primary">
	<?php if ( have_posts() ) : ?>
	<?php $UeneoTheme_blog_header = $UeneoTheme_Options->get('ut_blog_header'); 
		$UeneoTheme_blog_layout = $UeneoTheme_Options->get('ut_blog_layout');
		if($UeneoTheme_blog_layout == 'masonry' ){
			$UeneoTheme_header_class = "page-header masonry-header";
		}
		else{
			$UeneoTheme_header_class = "page-header";
		}
	?>
		<header class="<?php echo $UeneoTheme_header_class ?>" style="background:url('<?php echo $UeneoTheme_blog_header; ?>');" data-0="background-position:0px 0px;" data-300="background-position:0px 100px;">
			
			<div class="grid">
				<div class="c12 end">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'ueneotheme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
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
					<?php get_template_part( 'content' ); ?>
				<?php endwhile; ?>
				<?php else : ?>
					<?php get_template_part( 'no-results', 'search' ); ?>
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