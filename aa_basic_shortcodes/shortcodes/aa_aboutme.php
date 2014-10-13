<?php
/**
 *
 * About me shortcode
 * Wrtie [aa_me] in your post editor to render this shortcode
 *
 * @package	 aa_basic_shortcodes
 * @since    1.0.0
 */


 function aa_me_shortcode($atts) {
		return ' <a href="/about/">About me</a> ';
	}
	
	add_shortcode('aa_me','aa_me_shortcode');

?>