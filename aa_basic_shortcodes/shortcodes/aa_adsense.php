<?php
/**
 *
 * Adsense ad shortcode
 * Wrtie [adsense] in your post editor to render this shortcode
 *
 * @package	 aa_basic_shortcodes
 * @since    1.0.0
 */


 function aa_adsense_shortcode() {
        return '<script type="text/javascript"><!--
                google_ad_client = "pub-********";
                google_ad_slot = "********";
                google_ad_width = 468;
                google_ad_height = 60;
                //-->
                </script>
                <script type="text/javascript"
                src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                </script>
              ';
    }
    
    add_shortcode('adsense', 'aa_adsense_shortcode');
?>