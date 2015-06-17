<?php get_header(); ?>

<div id="primary">         
	<?php while ( have_posts() ) : the_post(); ?>
	<?php
	$UeneoTheme_post_header = get_post_meta( $post->ID, '_cmb_header_image', true );
	$UeneoTheme_main_header = $UeneoTheme_Options->get('ut_blog_header');
	$UeneoTheme_single_sub_heading = get_post_meta( $post->ID, '_cmb_single_sub_heading', true ); 
	if(empty($UeneoTheme_post_header)){
		$UeneoTheme_blog_header = $UeneoTheme_main_header;
	}
	else{
		$UeneoTheme_blog_header = $UeneoTheme_post_header;
	}
	?>
	<header class="page-header" style="background:url('<?php echo $UeneoTheme_blog_header; ?>');" data-0="background-position:0px 0px;" data-300="background-position:0px 100px;">

		<div class="grid">
			<div class="c12 end">
				<h1 class="underline"><?php the_title(); ?></h1>
				<?php if(!empty($UeneoTheme_single_sub_heading)){
					echo '<h2><em>'.$UeneoTheme_single_sub_heading.'</em></h2>';
				} ?>
				
				<div class="entry-details">
					<?php echo get_avatar( get_the_author_meta( 'ID' ) ) ?>
					<?php echo __('By ', 'uenotheme') ?> <a class="author" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_the_author() ;?></a>
					<span class="postdate"><?php echo ' / '. get_the_date('j M Y'); ?></span>
				</div>
			</div>
		</div>

	</header>

	<div class="grid">
		<main class="site-content" role="main">
			<?php get_template_part('content'); ?>

	

			<?php
				if ( comments_open() || '0' != get_comments_number() )
				comments_template( '', true );
			?>

			<?php endwhile; ?>
		</main>
		<?php 
		/*$UeneoTheme_sidebar_pos = $UeneoTheme_Options->get('ut_blog_sidebar');
		if($UeneoTheme_sidebar_pos == 2 || $UeneoTheme_sidebar_pos == 3 ){
			get_sidebar();
		}*/
		$UeneoTheme_single_sidebar_pos = $UeneoTheme_Options->get('ut_single_sidebar');
		if($UeneoTheme_single_sidebar_pos == 'left' || $UeneoTheme_single_sidebar_pos == 'right' ){
			get_sidebar();
		}
		?>
	</div>
</div>

<?php get_footer(); ?>



