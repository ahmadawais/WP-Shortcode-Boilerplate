<?php
/**
 *
 * Only login users can read the text  shortcode
 * E.g. [member]This content is hiddent from users who are not logged in[/member]
 *
 *
 * @package	 aa_basic_shortcodes
 * @since    1.0.0
 */


 function aa_login_users_only_shortcode( $atts, $content = null ) {
		 
		 if ( is_user_logged_in() && !is_feed() && !is_null( $content )  )
			return $content;
		return '';
	}
	
	add_shortcode( 'member', 'aa_login_users_only_shortcode' );

?>