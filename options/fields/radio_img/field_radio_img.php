<?php
class UeneoTheme_Options_radio_img {

    /**
     * Field Constructor.
     *
     * Required - must call the parent constructor, then assign field and value to vars, and obviously call the render field function
     *
     * @since UeneoTheme_Options 1.0.0
    */
    function __construct($field = array(), $value = '', $parent = '') {
        $this->field = $field;
		$this->value = $value;
		$this->args = $parent->args;
    }

    /**
     * Field Render Function.
     *
     * Takes the vars and outputs the HTML for the field in the settings
     *
     * @since UeneoTheme_Options 1.0.0
    */
    function render() {
        $class = (isset($this->field['class'])) ? 'class="' . $this->field['class'] . '" ' : '';
        echo '<fieldset>';
        foreach($this->field['options'] as $k => $v) {
            $selected = (checked($this->value, $k, false) != '') ? ' ueneotheme-radio-img-selected' : '';
            echo '<label class="ueneotheme-radio-img' . $selected . ' ueneotheme-radio-img-' . $this->field['id'] . '" for="' . $this->field['id'] . '_' . array_search($k,array_keys($this->field['options'])) . '" >';
            echo '<input type="radio" id="' . $this->field['id'] . '_' . array_search($k,array_keys($this->field['options'])) . '" name="' . $this->args['opt_name'] . '[' . $this->field['id'] . ']" ' . $class . ' value="' . $k . '" ' .checked($this->value, $k, false) . ' onclick="jQuery:ueneotheme_radio_img_select(\'' . $this->field['id'] . '_' . array_search($k,array_keys($this->field['options'])) . '\', \'' . $this->field['id'] . '\');" />';
            echo '<img src="' . $v['img'] . '" alt="' . $v['title'] . '" />';
            echo '<br/><span>' . $v['title'] . '</span>';
            echo '</label>';
        }
        echo (isset($this->field['desc']) && !empty($this->field['desc'])) ? '<br/><span class="description">' . $this->field['desc'] . '</span>' : '';
        echo '</fieldset>';
    }

    /**
     * Enqueue Function.
     *
     * If this field requires any scripts, or css define this function and register/enqueue the scripts/css
     *
     * @since UeneoTheme_Options 1.0.0
    */
    function enqueue() {
        wp_enqueue_script(
            'ueneotheme-opts-field-radio_img-js', 
            UeneoTheme_OPTIONS_URL . 'fields/radio_img/field_radio_img.js', 
            array('jquery'),
            time(),
            true
        );
    }
}
