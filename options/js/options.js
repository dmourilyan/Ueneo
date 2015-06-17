/*global $, jQuery, document, tabid:true, ueneotheme_opts, confirm, relid:true*/

jQuery(document).ready(function () {

    if (jQuery('#last_tab').val() === '') {
        jQuery('.ueneotheme-opts-group-tab:first').slideDown('fast');
        jQuery('#ueneotheme-opts-group-menu li:first').addClass('active');
    } else {
        tabid = jQuery('#last_tab').val();
        jQuery('#' + tabid + '_section_group').slideDown('fast');
        jQuery('#' + tabid + '_section_group_li').addClass('active');
    }

    jQuery('input[name="' + ueneotheme_opts.opt_name + '[defaults]"]').click(function () {
        if (!confirm(ueneotheme_opts.reset_confirm)) {
            return false;
        }
    });

    jQuery('.ueneotheme-opts-group-tab-link-a').click(function () {
        relid = jQuery(this).attr('data-rel');

        jQuery('#last_tab').val(relid);

        jQuery('.ueneotheme-opts-group-tab').each(function () {
            if (jQuery(this).attr('id') === relid + '_section_group') {
                jQuery(this).delay(400).fadeIn(1200);
            } else {
                jQuery(this).fadeOut('fast');
            }
        });

        jQuery('.ueneotheme-opts-group-tab-link-li').each(function () {
            if (jQuery(this).attr('id') !== relid + '_section_group_li' && jQuery(this).hasClass('active')) {
                jQuery(this).removeClass('active');
            }
            if (jQuery(this).attr('id') === relid + '_section_group_li') {
                jQuery(this).addClass('active');
            }
        });
    });

    if (jQuery('#ueneotheme-opts-save').is(':visible')) {
        jQuery('#ueneotheme-opts-save').delay(4000).slideUp('slow');
    }

    if (jQuery('#ueneotheme-opts-imported').is(':visible')) {
        jQuery('#ueneotheme-opts-imported').delay(4000).slideUp('slow');
    }

    jQuery('#ueneotheme-opts-form-wrapper').on('change', 'input, textarea, select', function () {
        if(this.id === 'google_webfonts' && this.value === '') return;
        jQuery('#ueneotheme-opts-save-warn').slideDown('slow');
    });

    jQuery('#ueneotheme-opts-import-code-button').click(function () {
        if (jQuery('#ueneotheme-opts-import-link-wrapper').is(':visible')) {
            jQuery('#ueneotheme-opts-import-link-wrapper').fadeOut('fast');
            jQuery('#import-link-value').val('');
        }
        jQuery('#ueneotheme-opts-import-code-wrapper').fadeIn('slow');
    });

    jQuery('#ueneotheme-opts-import-link-button').click(function () {
        if (jQuery('#ueneotheme-opts-import-code-wrapper').is(':visible')) {
            jQuery('#ueneotheme-opts-import-code-wrapper').fadeOut('fast');
            jQuery('#import-code-value').val('');
        }
        jQuery('#ueneotheme-opts-import-link-wrapper').fadeIn('slow');
    });

    jQuery('#ueneotheme-opts-export-code-copy').click(function () {
        if (jQuery('#ueneotheme-opts-export-link-value').is(':visible')) {jQuery('#ueneotheme-opts-export-link-value').fadeOut('slow'); }
        jQuery('#ueneotheme-opts-export-code').toggle('fade');
    });

    jQuery('#ueneotheme-opts-export-link').click(function () {
        if (jQuery('#ueneotheme-opts-export-code').is(':visible')) {jQuery('#ueneotheme-opts-export-code').fadeOut('slow'); }
        jQuery('#ueneotheme-opts-export-link-value').toggle('fade');
    });
});
