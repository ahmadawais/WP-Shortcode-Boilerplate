<?php

/**
 * The plugin bootstrap file
 *
 *
 * @link              http://AhmadAwais.com
 * @since             1.0.0
 * @package           aa_basic_shortcodes
 *
 * @wordpress-plugin
 * Plugin Name:       AA Basic Shortcodes Plugin Boilerplate
 * Plugin URI:        http://ahmadawais.com/plugin-name-uri/
 * Description:       Coding shortcodes in a plugin with maintainable code practices.
 * Version:           1.0.0
 * Author:            Ahmad Awais
 * Author URI:        http://ahmadawais.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       aa_basic_shortcodes
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}




/**
 * 
 * Including all the different shortcode modules here
 *
 */
	require_once plugin_dir_path( __FILE__ ) . 'shortcodes/aa_aboutme.php';
	require_once plugin_dir_path( __FILE__ ) . 'shortcodes/aa_adsense.php';
	require_once plugin_dir_path( __FILE__ ) . 'shortcodes/aa_login_users_only.php';

 ?>