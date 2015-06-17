jQuery(document).ready(function(){
	
	jQuery('.ueneotheme-opts-checkbox-hide-all').each(function(){
		if(!jQuery(this).is(':checked')){
			jQuery(this).closest('tr').nextAll('tr').hide();
		}
	});
	
	jQuery('.ueneotheme-opts-checkbox-hide-all').click(function(){
			jQuery(this).closest('tr').nextAll('tr').fadeToggle('slow');
	});
	
});
