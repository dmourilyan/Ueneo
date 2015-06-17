
// start the popup specefic scripts
// safe to use $
jQuery(document).ready(function($) {
    var zoos = {
    	loadVals: function()
    	{
    		var shortcode = $('#_ueneo_shortcode').text(),
    			uShortcode = shortcode;
    		
    		// fill in the gaps eg {{param}}
    		$('.ueneo-input').each(function() {
    			var input = $(this),
    				id = input.attr('id'),
    				id = id.replace('ueneo_', ''),		// gets rid of the ueneo_ prefix
    				re = new RegExp("{{"+id+"}}","g");
    				
    			uShortcode = uShortcode.replace(re, input.val());
    		});
    		
    		// adds the filled-in shortcode as hidden input
    		$('#_ueneo_ushortcode').remove();
    		$('#ueneo-sc-form-table').prepend('<div id="_ueneo_ushortcode" class="hidden">' + uShortcode + '</div>');
    	},
    	cLoadVals: function()
    	{
    		var shortcode = $('#_ueneo_cshortcode').text(),
    			pShortcode = '';
    			shortcodes = '';
    		
    		// fill in the gaps eg {{param}}
    		$('.child-clone-row').each(function() {
    			var row = $(this),
    				rShortcode = shortcode;
    			
    			$('.ueneo-cinput', this).each(function() {
    				var input = $(this),
    					id = input.attr('id'),
    					id = id.replace('ueneo_', '')		// gets rid of the ueneo_ prefix
    					re = new RegExp("{{"+id+"}}","g");
    					
    				rShortcode = rShortcode.replace(re, input.val());
    			});
    	
    			shortcodes = shortcodes + rShortcode + "\n";
    		});
    		
    		// adds the filled-in shortcode as hidden input
    		$('#_ueneo_cshortcodes').remove();
    		$('.child-clone-rows').prepend('<div id="_ueneo_cshortcodes" class="hidden">' + shortcodes + '</div>');
    		
    		// add to parent shortcode
    		this.loadVals();
    		pShortcode = $('#_ueneo_ushortcode').text().replace('{{child_shortcode}}', shortcodes);
    		
    		// add updated parent shortcode
    		$('#_ueneo_ushortcode').remove();
    		$('#ueneo-sc-form-table').prepend('<div id="_ueneo_ushortcode" class="hidden">' + pShortcode + '</div>');
    	},
    	children: function()
    	{
    		// assign the cloning plugin
    		$('.child-clone-rows').appendo({
    			subSelect: '> div.child-clone-row:last-child',
    			allowDelete: false,
    			focusFirst: false
    		});
    		
    		// remove button
    		$('.child-clone-row-remove').live('click', function() {
    			var	btn = $(this),
    				row = btn.parent();
    			
    			if( $('.child-clone-row').size() > 1 )
    			{
    				row.remove();
    			}
    			else
    			{
    				alert('You need a minimum of one row');
    			}
    			
    			return false;
    		});
    		
    		// assign jUI sortable
    		$( ".child-clone-rows" ).sortable({
				placeholder: "sortable-placeholder",
				items: '.child-clone-row'
				
			});
    	},
    	resizeTB: function()
    	{
			var	ajaxCont = $('#TB_ajaxContent'),
				tbWindow = $('#TB_window'),
				ueneoPopup = $('#ueneo-popup');

            tbWindow.css({
                height: ueneoPopup.outerHeight() + 50,
                width: ueneoPopup.outerWidth(),
                marginLeft: -(ueneoPopup.outerWidth()/2)
            });

			ajaxCont.css({
				paddingTop: 0,
				paddingLeft: 0,
				paddingRight: 0,
				height: (tbWindow.outerHeight()-47),
				overflow: 'auto', // IMPORTANT
				width: ueneoPopup.outerWidth()
			});
			
			$('#ueneo-popup').addClass('no_preview');
    	},
    	load: function()
    	{
    		var	zoos = this,
    			popup = $('#ueneo-popup'),
    			form = $('#ueneo-sc-form', popup),
    			shortcode = $('#_ueneo_shortcode', form).text(),
    			popupType = $('#_ueneo_popup', form).text(),
    			uShortcode = '';
    		
    		// resize TB
    		zoos.resizeTB();
    		$(window).resize(function() { zoos.resizeTB() });
    		
    		// initialise
    		zoos.loadVals();
    		zoos.children();
    		zoos.cLoadVals();
    		
    		// update on children value change
    		$('.ueneo-cinput', form).live('change', function() {
    			zoos.cLoadVals();
    		});
    		
    		// update on value change
    		$('.ueneo-input', form).change(function() {
    			zoos.loadVals();
    		});
    		
    		// when insert is clicked
    		$('.ueneo-insert', form).click(function() {    		 			

                if(parent.tinymce){                
                    parent.tinymce.activeEditor.execCommand('mceInsertContent',false,$('#_ueneo_ushortcode', form).html());
                    tb_remove();
                }
    		});

            // Sliders
            // --------------------------------------------------------------------------
            
            $( "#slider_ueneo_start" ).slider({
            step: 1,
            min: -1000,
            max: 1000,
            range:'min',
                slide: function( event, ui ) { 
                    $( "#ueneo_start" ).val(ui.value);
                    zoos.loadVals();
                }
            });
            $( "#slider_ueneo_end" ).slider({
            step: 1,
            min: -1000,
            max: 1000,
            range:'min',
                slide: function( event, ui ) { 
                    $( "#ueneo_end" ).val(ui.value);
                    zoos.loadVals();

                }
            });

            $( "#slider_ueneo_fromTop, #slider_ueneo_fromLeft" ).slider({
                step: 1,
                min: -1000,
                max: 1000,
                range:'min',
                slide: refreshFromStyle,
                change: refreshFromStyle
            });

            $( "#slider_ueneo_fromOpacity" ).slider({
                step: 0.1,
                min: 0,
                max: 1,
                range:'min',
                slide: refreshFromStyle,
                change: refreshFromStyle
            });

            $( "#slider_ueneo_toTop, #slider_ueneo_toLeft" ).slider({
                step: 1,
                min: -1000,
                max: 1000,
                range:'min',
                slide: refreshtoStyle,
                change: refreshtoStyle
            });
                      
            $( "#slider_ueneo_toOpacity" ).slider({
                step: 0.1,
                min: 0,
                max: 1,
                range:'min',
                slide: refreshtoStyle,
                change: refreshtoStyle
            });

            $( "#slider_ueneo_fromRed, #slider_ueneo_fromGreen, #slider_ueneo_fromBlue" ).slider({
                step: 1,
                min: 0,
                max: 255,
                value:0,
                range:'min',
                slide: refreshfromColor,
                change: refreshfromColor
            });
            $( "#slider_ueneo_toRed, #slider_ueneo_toGreen, #slider_ueneo_toBlue" ).slider({
                step: 1,
                min: 0,
                max: 255,
                value:255,
                range:'min',
                slide: refreshtoColor,
                change: refreshtoColor
            });
    

            function refreshFromStyle() {
                var fromOpacity = '', fromTop = '', fromLeft = '';
                
                if($( "#slider_ueneo_fromOpacity" ).slider( "value" ) != '' ) {
                  fromOpacity = 'opacity: ' + $( "#slider_ueneo_fromOpacity" ).slider( "value" ) + ' ; ';
                }
                if($( "#slider_ueneo_fromTop" ).slider( "value" ) != '') {
                  fromTop = 'top: ' + $( "#slider_ueneo_fromTop" ).slider( "value" ) + 'px; ';
                }
                if($( "#slider_ueneo_fromLeft" ).slider( "value" ) != '') {
                  fromLeft = 'left: ' + $( "#slider_ueneo_fromLeft" ).slider( "value" ) + 'px; ';
                }
                
                $( "#ueneo_fromStyle" ).val(fromOpacity + fromTop + fromLeft);
                
                zoos.loadVals();
            }

            function refreshtoStyle() {
                var toOpacity = '', toTop = '', toLeft = '';
                
                if($( "#slider_ueneo_toOpacity" ).slider( "value" ) != '' ) {
                  toOpacity = 'opacity: ' + $( "#slider_ueneo_toOpacity" ).slider( "value" ) + ' ; ';
                }
                if($( "#slider_ueneo_toTop" ).slider( "value" ) != '') {
                  toTop = 'top: ' + $( "#slider_ueneo_toTop" ).slider( "value" ) + 'px; ';
                }
                if($( "#slider_ueneo_toLeft" ).slider( "value" ) != '') {
                  toLeft = 'left: ' + $( "#slider_ueneo_toLeft" ).slider( "value" ) + 'px; ';
                }
           
                $( "#ueneo_toStyle" ).val(toOpacity + toTop + toLeft);
                
                zoos.loadVals();
            }

            function refreshfromColor() {
                //var toOpacity = '', toTop = '', toLeft = '';
                var fromRed = $( "#slider_ueneo_fromRed" ).slider( "value" ),
                fromGreen = $( "#slider_ueneo_fromGreen" ).slider( "value" ),
                fromBlue = $( "#slider_ueneo_fromBlue" ).slider( "value" );

           
                $( "#ueneo_fromColor" ).val('rgb('+ fromRed + ',' + fromGreen + ',' + fromBlue + ')');
                $( "#swatch_ueneo_fromColor" ).css('background-color', $( "#ueneo_fromColor" ).val()) ;
              
                zoos.loadVals();
            } 
             function refreshtoColor() {

                var toRed = $( "#slider_ueneo_toRed" ).slider( "value" ),
                toGreen = $( "#slider_ueneo_toGreen" ).slider( "value" ),
                toBlue = $( "#slider_ueneo_toBlue" ).slider( "value" );

           
                $( "#ueneo_toColor" ).val('rgb('+ toRed + ',' + toGreen + ',' + toBlue + ')');
                $( "#swatch_ueneo_toColor" ).css('background-color', $( "#ueneo_toColor" ).val()) ;
              
                zoos.loadVals();
            }                 

    	    
            // --------------------------------------------------------------------------
        }
	}
    
    // run
    $('#ueneo-popup').livequery( function() { zoos.load(); } );

});