<?php
function my_script() {
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', get_bloginfo('template_url').'/js/jquery-1.4.4.min.js', false, '1.4.4');
		wp_enqueue_script('jquery');

		wp_enqueue_script('superfish', get_bloginfo('template_url').'/js/superfish.js', array('jquery'), '1.4.8');
		
		wp_enqueue_script('yui', get_bloginfo('template_url').'/js/cufon-yui.js', array('jquery'), '');
		wp_enqueue_script('replace', get_bloginfo('template_url').'/js/cufon-replace.js', array('jquery'), '');
		wp_enqueue_script('MPlus Reg', get_bloginfo('template_url').'/js/M_1c_400.font.js', array('jquery'), '');
		wp_enqueue_script('MPlus Heavy', get_bloginfo('template_url').'/js/M_1p_800.font.js', array('jquery'), '');
		wp_enqueue_script('Franchise', get_bloginfo('template_url').'/js/Franchise_700.font.js', array('jquery'), '');
		wp_enqueue_script('jqueryBackgroundPosition', get_bloginfo('template_url').'/js/jquery.backgroundPosition.js', array('jquery'), '1.21');
		wp_enqueue_script('easyTooltip', get_bloginfo('template_url').'/js/easyTooltip.js', array('jquery'), '1.0');
	}
}
add_action('init', 'my_script');
?>