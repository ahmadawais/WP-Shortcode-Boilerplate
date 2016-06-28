<?php
/**
 * Adsense ad shortcode
 *
 * Wrtie [adsense] in your post editor to render this shortcode.
 *
 * @package	 ABS
 * @since    1.0.0
 */

if ( ! function_exists( 'aa_adsense_shortcode' ) ) {
    // Add the action.
    add_action( 'plugins_loaded', function() {
        // Add the shortcode.
        add_shortcode( 'adsense', 'aa_adsense_shortcode' );
    });

    /**
     * Adsense shortcode.
     *
     * @return mixed
     * @since  1.0.0
     */
    function aa_adsense_shortcode() {
        // Just return the code.
        return '<script type="text/javascript"><!--
                google_ad_client = "pub-********";
                google_ad_slot = "********";
                google_ad_width = 468;
                google_ad_height = 60;
                //-->
                </script>
                <script type="text/javascript"
                src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                </script>';
    }
}
