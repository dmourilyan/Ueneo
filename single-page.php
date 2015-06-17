<?php
/**
 * Template Name: Single Page
 * Description: A Template for displaying pages in a single page.
 *
 */
get_header();
?>
<main id="main" role="main">
<div id="<?php echo sanitize_title(get_the_title()); ?>">
	<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
	<?php endwhile;  ?>
</div>
<?php
$UeneoTheme_pageid = get_the_ID();
$UeneoTheme_args = array(
	'sort_order' => 'ASC',
	'child_of' => $UeneoTheme_pageid,
	'sort_column' => 'menu_order', 
	'hierarchical' => 1,
	'exclude' => '',
	'exclude_tree' => '',
	'number' => '',
	'offset' => 0,
	'post_type' => 'page',
	'post_status' => 'publish'
);

$UeneoTheme_pages = get_pages($UeneoTheme_args);


foreach ($UeneoTheme_pages as $UeneoTheme_page_data) {
    $UeneoTheme_content = apply_filters('the_content', $UeneoTheme_page_data->post_content);
    $UeneoTheme_title = $UeneoTheme_page_data->post_title;
    $UeneoTheme_id = sanitize_title($UeneoTheme_title);
    $UeneoTheme_slug = $UeneoTheme_page_data->post_name;
    $UeneoTheme_bgcolor = get_post_meta( $UeneoTheme_page_data->ID, '_cmb_background_colorpicker', true );
    $UeneoTheme_bgimage = get_post_meta( $UeneoTheme_page_data->ID, '_cmb_background_image', true );
    $UeneoTheme_descriptiontext = get_post_meta( $UeneoTheme_page_data->ID, '_cmb_description_text', true );
    $UeneoTheme_headingstyle = get_post_meta( $UeneoTheme_page_data->ID, '_cmb_heading_style', true );
    $UeneoTheme_headingalign = get_post_meta( $UeneoTheme_page_data->ID, '_cmb_heading_align', true );
    $UeneoTheme_headingcolor = get_post_meta( $UeneoTheme_page_data->ID, '_cmb_heading_colorpicker', true );

    $UeneoTheme_page_style = get_post_meta( $UeneoTheme_page_data->ID, '_cmb_page_style', true );
    $UeneoTheme_padding_top = get_post_meta( $UeneoTheme_page_data->ID, '_cmb_padding_top', true ) . 'px';
    $UeneoTheme_padding_bottom = get_post_meta( $UeneoTheme_page_data->ID, '_cmb_padding_bottom', true ) . 'px';
    $UeneoTheme_padding = 'padding-top:'. $UeneoTheme_padding_top . '; padding-bottom:' . $UeneoTheme_padding_bottom . ';';


    if($UeneoTheme_page_style == "standard"){
    	$UeneoTheme_page_class = "page";
    }
    else{
    	$UeneoTheme_page_class = "page half";
    }
    $UeneoTheme_parallax = ' data-bottom-top="background-position: 50% 300px" data-top-bottom="background-position: 50% -250px;"';

?>
<div id='<?php echo "$UeneoTheme_id"; ?>' class="<?php echo $UeneoTheme_page_class ?>" style='<?php if($UeneoTheme_page_style == "standard"){echo $UeneoTheme_padding;}?>background-color:<?php echo $UeneoTheme_bgcolor ?>;<?php  if (!empty($UeneoTheme_bgimage)) { echo "background-image:url($UeneoTheme_bgimage);" ; } ?>'<?php  if (!empty($UeneoTheme_bgimage)) { echo $UeneoTheme_parallax  ; } ?> >
	
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
			echo "<h1 style='color:".$UeneoTheme_headingcolor.";'>$UeneoTheme_title</h1>";
			echo "<p>$UeneoTheme_descriptiontext</p>";
			echo "</div>";
		}
		elseif ($UeneoTheme_headingstyle != "noheading") {
			echo "<h1 style='color:".$UeneoTheme_headingcolor.";' class='".$UeneoTheme_headingstyle."'>$UeneoTheme_title</h1>";
			echo "<p>$UeneoTheme_descriptiontext</p>";
			echo "</div>";
		}
		elseif ($UeneoTheme_headingstyle == "noheading" && $UeneoTheme_descriptiontext != ''){
			echo "<div class='c12 end'><p>$UeneoTheme_descriptiontext</p></div>";
		}

		?>

		
		<?php echo "$UeneoTheme_content"; ?>
	</div>
</div>

<?php } ?>

</main>
<?php get_footer(); ?>

