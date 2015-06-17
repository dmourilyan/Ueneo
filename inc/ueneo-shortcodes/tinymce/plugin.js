(function($) {
"use strict";   
 
			
 			//Shortcodes
            tinymce.PluginManager.add( 'ueneoShortcodes', function( editor, url ) {
				
				editor.addCommand("ueneoPopup", function ( a, params )
				{
					var popup = params.identifier;
					tb_show("Insert Ueneo Shortcode", url + "/popup.php?popup=" + popup + "&width=" + 800);
				});
     
                editor.addButton( 'ueneo_button', {
                    type: 'splitbutton',
                    icon: false,
					title:  'Ueneo Shortcodes',
					onclick : function(e) {},
					menu: [
						
						{text: 'Columns',onclick:function(){
							editor.execCommand("ueneoPopup", false, {title: 'Columns',identifier: 'columns'})
						}},
						{text: 'Button',onclick:function(){
							editor.execCommand("ueneoPopup", false, {title: 'Button',identifier: 'button'})
						}},
						{text: 'Icon Box',onclick:function(){
							editor.execCommand("ueneoPopup", false, {title: 'Icon Box',identifier: 'iconBox'})
						}},
						{text: 'Pricing Table',onclick:function(){
							editor.execCommand("ueneoPopup", false, {title: 'Pricing Table',identifier: 'pricingTable'})
						}},
						{text: 'Skill Rating Bar',onclick:function(){
							editor.execCommand("ueneoPopup", false, {title: 'Skill Rating Bar',identifier: 'skill'})
						}},
						{text: 'Counter',onclick:function(){
							editor.execCommand("ueneoPopup", false, {title: 'Counter',identifier: 'counter'})
						}},
						{text: 'CSS Animation',onclick:function(){
							editor.execCommand("ueneoPopup", false, {title: 'CSS Animation',identifier: 'cssAnimation'})
						}},
						{text: 'Recent Posts',onclick:function(){
							editor.execCommand("ueneoPopup", false, {title: 'Recent Posts',identifier: 'recentPosts'})
						}},
						{text: 'Full Width Section',onclick:function(){
							editor.execCommand("ueneoPopup", false, {title: 'Full Width Section',identifier: 'fullWidthSection'})
						}},
						{text: 'Masked Image',onclick:function(){
							editor.execCommand("ueneoPopup", false, {title: 'Masked Image',identifier: 'maskedImage'})
						}},
						{text: 'Parallax Background',onclick:function(){
							editor.execCommand("ueneoPopup", false, {title: 'Parallax Background',identifier: 'parallaxBackground'})
						}},
						{text: 'Testimonials Slider',onclick:function(){
							editor.execCommand("ueneoPopup", false, {title: 'Testimonials Slider',identifier: 'testimonialsSlider'})
						}},
						{text: 'Clients Slider',onclick:function(){
							editor.execCommand("ueneoPopup", false, {title: 'Clients Slider',identifier: 'clientsSlider'})
						}},
						{text: 'Social Networks', onclick : function() {
						    tinymce.execCommand('mceInsertContent', false, '[social_networks]');
						}},
						{text: 'Team', onclick : function() {
						    tinymce.execCommand('mceInsertContent', false, '[team]');
						}},
						{text: 'Flex Slider',onclick:function(){
							editor.execCommand("ueneoPopup", false, {title: 'Flex Slider',identifier: 'flexSlider'})
						}},
						{text: 'SuperSlides', onclick : function() {
						    tinymce.execCommand('mceInsertContent', false, '[super_slides]');
						}},
						{text: 'Portfolio',onclick:function(){
							editor.execCommand("ueneoPopup", false, {title: 'Portfolio',identifier: 'portfolio'})
						}},
						{text: 'Google Map',onclick:function(){
							editor.execCommand("ueneoPopup", false, {title: 'Google Map',identifier: 'googleMap'})
						}},
						{text: 'Contact Details',onclick:function(){
							editor.execCommand("ueneoPopup", false, {title: 'Contact Details',identifier: 'contactDetails'})
						}},



					
					]
					
                
        	  });
         
          });
         

 
})(jQuery);

