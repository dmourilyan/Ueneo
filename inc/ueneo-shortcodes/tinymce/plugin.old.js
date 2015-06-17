(function ()
{
	// create ueneoShortcodes plugin
	tinymce.create("tinymce.plugins.ueneoShortcodes",
	{
		init: function ( ed, url )
		{
			ed.addCommand("ueneoPopup", function ( a, params )
			{
				var popup = params.identifier;
				
				// load thickbox
				tb_show("Insert ueneo Shortcode", url + "/popup.php?popup=" + popup + "&width=" + 800);
			});
		},
		createControl: function ( btn, e )
		{
			if ( btn == "ueneo_button" )
			{	
				var a = this;
				
				var btn = e.createSplitButton('ueneo_button', {
                    title: "Insert ueneo Shortcode",
					image: ueneoShortcodes.plugin_folder +"/tinymce/images/icon.png",
					icons: false
                });

                btn.onRenderMenu.add(function (c, b)
				{					
					a.addWithPopup( b, "Columns", "columns" );
					a.addWithPopup( b, "Button", "button" );
					a.addWithPopup( b, "Icon Box", "iconBox" );
					a.addWithPopup( b, "Pricing Table", "pricingTable" );
					a.addWithPopup( b, "Skill Rating Bar", "skill" );
					a.addWithPopup( b, "Counter", "counter" );
					a.addWithPopup( b, "CSS Animation", "cssAnimation" );
					a.addWithPopup( b, "Recent Posts", "recentPosts" );
					a.addWithPopup( b, "Full Width Section", "fullWidthSection" );
					a.addWithPopup( b, "Masked Image", "maskedImage" );
					a.addWithPopup( b, "Parallax Background", "parallaxBackground" );
					a.addWithPopup( b, "Testimonials Slider", "testimonialsSlider" );
					a.addWithPopup( b, "Clients Slider", "clientsSlider" );
					a.addImmediate( b, "Social Networks", "[social_networks]" );
					a.addWithPopup( b, "Flex Slider", "flexSlider" );
					a.addImmediate( b, "Team", "[team]" );
					a.addImmediate( b, "SuperSlides", "[super_slides]" );
					a.addWithPopup( b, "Portfolio", "portfolio" );
					a.addWithPopup( b, "Google Map", "googleMap" );
					a.addWithPopup( b, "Contact Details", "contactDetails" );
				});
                
                return btn;
			}
			
			return null;
		},
		addWithPopup: function ( ed, title, id ) {
			ed.add({
				title: title,
				onclick: function () {
					tinyMCE.activeEditor.execCommand("ueneoPopup", false, {
						title: title,
						identifier: id
					})
				}
			})
		},
		addImmediate: function ( ed, title, sc) {
			ed.add({
				title: title,
				onclick: function () {
					tinyMCE.activeEditor.execCommand( "mceInsertContent", false, sc )
				}
			})
		},
		getInfo: function () {
			return {
				longname: 'ueneo Shortcodes',
				author: 'Web Dingo',
				authorurl: 'http://www.webdingo.net',
				infourl: 'http://www.webdingo.net',
				version: "1.0"
			}
		}
	});
	
	// add ueneoShortcodes plugin
	tinymce.PluginManager.add("ueneoShortcodes", tinymce.plugins.ueneoShortcodes);
})();

