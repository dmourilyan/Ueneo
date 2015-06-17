

<?php global $UeneoTheme_Options; ?>
	<footer class="footer row">
		<!--<div id="scroll-top"></div>-->
		<div class="grid">
			<?php echo do_shortcode( $UeneoTheme_Options->get('ut_footer_content') ); ?>
		</div>
		<span id="scroll-top"></span>
		<div class="footer-base">
			<div class="grid">
				<div class="c12 end">
				<span>© <?php $UeneoTheme_Options->show('ut_copyright_text'); ?></span>
				<?php 
		 			 $UeneoTheme_icons_display = $UeneoTheme_Options->get('ut_footer_social_icons'); 
		 			 if($UeneoTheme_icons_display == 1){
		 			 	if (function_exists('Ueneo_social_networks')) {
		 			 		echo do_shortcode( '[social_networks]' );
		 			 	}	
		 			}
			 		?> 
			 	</div>
			</div>	
		</div>

				
	</footer>
	<script>
		var flex_slider_animation = "<?php $UeneoTheme_Options->show('ut_flex_animation'); ?>",
			flex_slider_direction = "<?php $UeneoTheme_Options->show('ut_flex_direction'); ?>",
			flex_slider_auto_play = "<?php $UeneoTheme_Options->show('ut_flex_auto_play'); ?>",
			flex_slider_slideshowspeed = "<?php $UeneoTheme_Options->show('ut_flex_play_speed'); ?>",
			flex_slider_controlnav = "<?php $UeneoTheme_Options->show('ut_flex_controll'); ?>",
			testimonials_auto_play = "<?php $UeneoTheme_Options->show('ut_testimonials_auto_play'); ?>",
			superslider_play = "<?php $UeneoTheme_Options->show('ut_super_play'); ?>",
			superslider_pagination = "<?php $UeneoTheme_Options->show('ut_super_pagi'); ?>",
			superslider_animation = "<?php $UeneoTheme_Options->show('ut_super_animation'); ?>",
			menu_style = "<?php $UeneoTheme_Options->show('ut_nav_postion'); ?>",
			portfolio_layout = "<?php $UeneoTheme_Options->show('ut_portfolio_layout'); ?>";

	</script>



	<?php if (is_front_page()) {?>
		<script>
			jQuery(document).ready(function($) {  
				$(".nav-links li a:contains('Home') , .nav-links li a:contains('home')").parent().addClass('nav-active');
				$(window).load(function () {
					if (Modernizr.history){
						history.replaceState('', document.title, window.location.pathname); 
					}
				});
			});
		</script>
	<?php }
	else { ?>
		<script>
			jQuery(document).ready(function($) {  
				if($('body').hasClass('single') || $('body').hasClass('archive') || $('body').hasClass('search') || $('body').hasClass('error404')){
					$(".nav-links li a:contains('Blog') , .nav-links li a:contains('blog')").parent().addClass('nav-active');
				}
			});
		</script>
	<?php } ?>      


<?php wp_footer(); ?>
</body>
</html>

