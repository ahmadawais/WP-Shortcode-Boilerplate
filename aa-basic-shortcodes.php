<?php
/**
 * Plugin Name:       AA Basic Shortcodes Plugin Boilerplate
 * Plugin URI:        http://ahmadawais.com/coding-a-basic-shortcodes-plugin-boilerplate/
 * Description:       Coding shortcodes in a plugin with maintainable code practices.
 * Version:           2.0.0
 * Author:            Ahmad Awais
 * Author URI:        http://ahmadawais.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ABS
 *
 * @link              http://ahmadawais.com/coding-a-basic-shortcodes-plugin-boilerplate/
 * @package           ABS
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Define global constants.
 *
 * @since 1.0.0
 */
// Plugin version.
if ( ! defined( 'ABS_VERSION' ) ) {
	define( 'ABS_VERSION', '2.0.0' );
}

if ( ! defined( 'ABS_NAME' ) ) {
	define( 'ABS_NAME', trim( dirname( plugin_basename( __FILE__ ) ), '/' ) );
}

if ( ! defined( 'ABS_DIR' ) ) {
	define( 'ABS_DIR', WP_PLUGIN_DIR . '/' . ABS_NAME );
}

if ( ! defined( 'ABS_URL' ) ) {
	define( 'ABS_URL', WP_PLUGIN_URL . '/' . ABS_NAME );
}

/**
 * Link.
 *
 * @since 1.0.0
 */
if ( file_exists( ABS_DIR . '/shortcode/shortcode-link.php' ) ) {
	require_once( ABS_DIR . '/shortcode/shortcode-link.php' );
}

/**
 * Member.
 *
 * @since 1.0.0
 */
if ( file_exists( ABS_DIR . '/shortcode/shortcode-member.php' ) ) {
	require_once( ABS_DIR . '/shortcode/shortcode-member.php' );
}

/**
 * Adsense.
 *
 * @since 1.0.0
 */
if ( file_exists( ABS_DIR . '/shortcode/shortcode-adsense.php' ) ) {
	require_once( ABS_DIR . '/shortcode/shortcode-adsense.php' );
}
