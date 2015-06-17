<?php

// loads the shortcodes class, wordpress is loaded with it
require_once( 'shortcodes.class.php' );

// get popup type
$popup = trim( $_GET['popup'] );
$shortcode = new ueneo_shortcodes( $popup );

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head></head>
<body>
<div id="ueneo-popup">

	<div id="ueneo-shortcode-wrap">
		
		<div id="ueneo-sc-form-wrap">
		
			<div id="ueneo-sc-form-head">
			
				<?php echo $shortcode->popup_title; ?>
			
			</div>
			<!-- /#ueneo-sc-form-head -->
			
			<form method="post" id="ueneo-sc-form">
			
				<table id="ueneo-sc-form-table">
				
					<?php echo $shortcode->output; ?>
					
					<tbody>
						<tr class="form-row">
							<?php if( ! $shortcode->has_child ) : ?><td class="label">&nbsp;</td><?php endif; ?>
							<td class="field"><a href="#" class="button-primary ueneo-insert">Insert Shortcode</a></td>							
						</tr>
					</tbody>
				
				</table>
				<!-- /#ueneo-sc-form-table -->
				
			</form>
			<!-- /#ueneo-sc-form -->
		
		</div>
		<!-- /#ueneo-sc-form-wrap -->
		
		<div class="clear"></div>
		
	</div>
	<!-- /#ueneo-shortcode-wrap -->

</div>
<!-- /#ueneo-popup -->

</body>
</html>