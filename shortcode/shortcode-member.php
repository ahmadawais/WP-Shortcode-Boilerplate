<?php
/**
 * Member shortcode
 *
 * Only login users can read the text  shortcode.
 * E.g. [member]This content is hiddent from users who are not logged in[/member].
 *
 * @package	 ABS
 * @since    1.0.0
 */

if ( ! function_exists( 'aa_member_shortcode') ) {
	// Add the action.
	add_action( 'plugins_loaded', function() {
	    // Add the shortcode.
	    add_shortcode('member', 'aa_member_shortcode');
	});

	/**
	 * Shortcode Function
	 *
	 * @param  Attributes $atts		Error message.
	 * @param  Content 	  $content 	Content.
	 * @return string
	 * @since  1.0.0
	 */
	function aa_member_shortcode( $atts, $content ) {
		// Error Default.
		$error_default = __( 'You need to be a member to read this content!', 'ABS' );

		// Save $atts.
		$_atts = shortcode_atts( array(
			'e'  => $error_default, // Error message.
	    ), $atts );

		// Error.
		$_error = $_atts['u'];

		if ( is_user_logged_in()
			&& ! is_feed()
			&& ! is_null( $content ) ) {
			// Return the content.
			return $content;
		} else {
			// Return the error.
			return $_error;
		}
	}
}
