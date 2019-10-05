<?php

class BoldThemesFramework {
	
	// vars
	
	public static $pfx = 'boldthemes_theme';
	public static $page_for_header_id;
	public static $date_format;
	public static $sidebar;
	public static $has_sidebar;
	public static $fonts;
	public static $customize_fonts;
	public static $meta_boxes = array();
	public static $crush_vars = array();
	public static $crush_vars_def = array();
	public static $left_alignment_class = 'btTextLeft';
	public static $right_alignment_class = 'btTextRight';
	
}

require_once( get_template_directory() . '/framework/actions.php' );
require_once( get_template_directory() . '/framework/filters.php' );

if ( file_exists( get_template_directory() . '/css-crush/CssCrush.php' ) ) {
	require_once( get_template_directory() . '/css-crush/CssCrush.php' );
} else {
	require_once( get_template_directory() . '/framework/BTCrushFunctions.php' );
	require_once( get_template_directory() . '/framework/BTCrushUtil.php' );
	require_once( get_template_directory() . '/framework/BTCrushColor.php' );
	require_once( get_template_directory() . '/framework/BTCrushRegex.php' );
}
require_once( get_template_directory() . '/framework/boldthemes_basic_functions.php' );
require_once( get_template_directory() . '/framework/boldthemes_functions.php' );
require_once( get_template_directory() . '/framework/customization.php' );
require_once( get_template_directory() . '/framework/editor-buttons/editor-buttons.php' );
require_once( get_template_directory() . '/framework/class-tgm-plugin-activation.php' );
require_once( get_template_directory() . '/framework/woocommerce_hooks.php' );
require_once( get_template_directory() . '/framework/woocommerce_functions.php' );

require_once( get_template_directory() . '/framework/config-meta-boxes.php' );