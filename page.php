<?php get_header(); ?>
<main id="main" role="main">
<?php while ( have_posts() ) : the_post(); ?>
	<?php
		global $post;
   	
   	$UeneoTheme_bgcolor = get_post_meta( $post->ID, '_cmb_background_colorpicker', true );
    $UeneoTheme_bgimage = get_post_meta( $post->ID, '_cmb_background_image', true );
    $UeneoTheme_descriptiontext = get_post_meta( $post->ID, '_cmb_description_text', true );
    $UeneoTheme_headingstyle = get_post_meta( $post->ID, '_cmb_heading_style', true );
    $UeneoTheme_headingalign = get_post_meta( $post->ID, '_cmb_heading_align', true );
    $UeneoTheme_headingcolor = get_post_meta( $post->ID, '_cmb_heading_colorpicker', true );

    $UeneoTheme_page_style = get_post_meta( $post->ID, '_cmb_page_style', true );
    $UeneoTheme_padding_top = get_post_meta( $post->ID, '_cmb_padding_top', true ) . 'px';
    $UeneoTheme_padding_bottom = get_post_meta( $post->ID, '_cmb_padding_bottom', true ) . 'px';
    $UeneoTheme_padding = 'padding-top:'. $UeneoTheme_padding_top . '; padding-bottom:' . $UeneoTheme_padding_bottom . ';';


    if($UeneoTheme_page_style == "standard"){
    	$UeneoTheme_page_class = "page";
    }
    else{
    	$UeneoTheme_page_class = "page half";
    }
    $UeneoTheme_parallax = 'data-bottom-top="background-position: 50% 300px" data-top-bottom="background-position: 50% -250px;"';

?>
<div class="<?php echo $UeneoTheme_page_class ?>" style='<?php if($UeneoTheme_page_style == "standard"){echo $UeneoTheme_padding;}?>background-color:<?php echo $UeneoTheme_bgcolor ?>;<?php  if (!empty($UeneoTheme_bgimage)) { echo "background-image:url($UeneoTheme_bgimage);" ; } ?>'<?php  if (!empty($UeneoTheme_bgimage)) { echo $UeneoTheme_parallax  ; } ?> >
	
<?php 
	if($UeneoTheme_page_style == "halfwidthright"){
		echo "<div class='half-width-page right' style='".$UeneoTheme_padding."'>";
		echo "<div class='half-width-base' style='background-color:" . $UeneoTheme_bgcolor .";'></div>";
	}
	elseif($UeneoTheme_page_style == "halfwidthleft"){
		echo "<div class='half-width-page left' style='".$UeneoTheme_padding."'>";
		echo "<div class='half-width-base' style='background-color:" . $UeneoTheme_bgcolor .";'></div>";
	}
	else {
		echo "<div class='grid'>";
	}
?>		
		<?php if($UeneoTheme_headingalign == "left" && $UeneoTheme_headingstyle != "noheading"){
			echo "<div class='c12 end alignleft pageheading'>";
		} 
		elseif ($UeneoTheme_headingalign == "center" && $UeneoTheme_headingstyle != "noheading") {
			echo "<div class='c10 s1 aligncenter pageheading'>";
		}
		elseif ($UeneoTheme_headingalign == "right" && $UeneoTheme_headingstyle != "noheading" ) {
			echo "<div class='c12 end alignright pageheading'>";
		}
		elseif ($UeneoTheme_headingstyle != "noheading"){
			echo "<div class='c12 end pageheading'>";
		}


		if ($UeneoTheme_headingstyle == "standard") {
			echo "<h1 style='color:".$UeneoTheme_headingcolor.";'>" . get_the_title() . "</h1>";
			echo "<p>$UeneoTheme_descriptiontext</p>";
			echo "</div>";
		}
		elseif ($UeneoTheme_headingstyle != "noheading") {
			echo "<h1 style='color:".$UeneoTheme_headingcolor.";' class='".$UeneoTheme_headingstyle."'>" . get_the_title() . "</h1>";
			echo "<p>$UeneoTheme_descriptiontext</p>";
			echo "</div>";
		}
		elseif ($UeneoTheme_headingstyle == "noheading" && $UeneoTheme_descriptiontext != ''){
			echo "<div class='c12 end'><p>$UeneoTheme_descriptiontext</p></div>";
		}

		?>
				
				<?php the_content(); ?>
		</div>
	</div>

<?php endwhile;  ?>
</main>	

<?php get_footer(); ?>

