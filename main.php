<?php
/**
 * Plugin Name: Tawea
 * Plugin URI: https://www.tawea.com/#/sdk
 * Description: Facebook Chat for your wordpress.
 * Version: 1.1
 * Author: Tawea Technologies SL
 * Author URI: https://www.tawea.com
 * License: GPL2
 */

add_action('wp_head','add_tawea');

function add_tawea() {
	echo "<script type='text/javascript'>
(function(d) {var taw = d.createElement('script'),id = 'tawea-extension';
if (d.getElementById(id)) {return;}
taw.type = 'text/javascript';taw.id=id;taw.async=true;
taw.src ='https://tawea.com/extension/js/sdk.min.js';
(document.head||document.documentElement).appendChild(taw);})(document);
</script>";
}


?>