/*global jQuery*/
/*
 *
 * UeneoTheme_Options_radio_img function
 * Changes the radio select option, and changes class on images
 *
 */
function ueneotheme_radio_img_select(relid, labelclass) {
    jQuery(this).prev('input[type="radio"]').prop('checked');
    jQuery('.ueneotheme-radio-img-' + labelclass).removeClass('ueneotheme-radio-img-selected');
    jQuery('label[for="' + relid + '"]').addClass('ueneotheme-radio-img-selected');
}
