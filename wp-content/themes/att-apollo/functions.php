<?php
/**
 * Functions.php contains all the core functions for your theme to work properly.
 * Please do not edit this file!!
 *
 * @package WordPress Theme
 * @since 1.0
 */




/**
 * Define Constants
 * since 1.0
 */
define( 'ATT_JS_DIR_URI', get_template_directory_uri().'/js' );
define( 'ATT_CSS_DIR_UIR', get_template_directory_uri().'/css' );
define( 'ATT_JS_DIR', get_template_directory().'/js' );
define( 'ATT_CSS_DIR', get_template_directory().'/css' );





/**
 * Theme Setup
 * @since 1.0
 */
if ( ! isset( $content_width ) ) $content_width = 700;
require_once ( get_template_directory() .'/functions/theme-setup.php' );
require_once ( get_template_directory() .'/functions/theme-customizer.php' );
require_once ( get_template_directory() .'/functions/att-option.php' );



/**
 * Functions
 * @since 1.0
 */
require_once( get_template_directory() .'/functions/social.php' );
require_once( get_template_directory() .'/functions/widgets/widget-areas.php' );

if ( is_admin() ) {
	// Nothing to load in the admin for this theme
} else {
	require_once( get_template_directory() .'/functions/hooks.php' );
	require_once( get_template_directory() .'/functions/scripts.php' );
	require_once( get_template_directory() .'/functions/aqua-resizer.php' );
	require_once( get_template_directory() .'/functions/menu-walker.php' );
	require_once( get_template_directory() .'/functions/image-default-sizes.php' );
	require_once( get_template_directory() .'/functions/comments-callback.php' );
	require_once( get_template_directory() .'/functions/pagination.php' );
	require_once( get_template_directory() .'/functions/excerpts.php' );
}

register_nav_menus(array('nav'=>'ナビゲーション'));
?>