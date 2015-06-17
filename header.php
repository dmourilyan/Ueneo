<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>

<!--[if lt IE 7]>      <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="ie9"> <![endif]-->

<?php global $UeneoTheme_Options; ?>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta http-equiv="X-UA-Compatible" content="IE=100" >
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php $UeneoTheme_Options->show('ut_favicon'); ?>" type="image/x-icon" />

<?php wp_head() ?>

</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>
	<div id="fb-root"></div>
	<nav id="primary-nav">
		<?php $UeneoTheme_navStyle = $UeneoTheme_Options->get('ut_nav_style'); ?>
	    <div class="mainnav mainnavhide<?php if($UeneoTheme_navStyle == 'standard'){ echo ' standard'; }?>" >
		   

		        <div class="mainLogo"><a href="<?php echo get_home_url(); ?>"><img id="mainLogo" alt="" src="<?php $UeneoTheme_Options->show('1'); ?>" data-at2x="<?php $UeneoTheme_Options->show('retina_logo'); ?>"/></a></div>
				<span id="menubutton"></span>
				
				<?php 
		        if (function_exists('Ueneo_social_networks')) {
	 			 		echo '<span class="toggle-networks"><i class="fa fa-share-alt"></i></span>';
	 			 		echo do_shortcode( '[social_networks]' );
	 			}
				if($UeneoTheme_navStyle == 'offcanvas'){
						echo "<div class='side-menu'>";
					}
				?>
				
					<?php
                       wp_nav_menu(
                            array(
                                'theme_location'  => 'primary',
                                'walker'=> new UeneoTheme_page_walker,
                                'container' => false,
                                'items_wrap' => '<ul class="nav-links">%3$s</ul>',
                                'fallback_cb' => 'UeneoTheme_default_menu_cb'
                            )
                        );

						?>
				<?php if($UeneoTheme_navStyle == 'offcanvas'){
						echo "</div> <span class='side-menu-btn' ></span>";
				} ?>
				
		</div>
	</nav>


	


