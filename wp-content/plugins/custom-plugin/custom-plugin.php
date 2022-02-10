<?php
/*
Plugin Name:  Andrew's Custom Plugin
Version:      1.0
Author:       Andrew Kissel
Text Domain:  gg-plugin
*/

add_action( 'wp_enqueue_scripts', function() {	
	wp_register_script( 'sweetalert', plugin_dir_url(__FILE__).'assets/js/sweetalert.min.js', array(), '1.0', true );
    wp_register_script( 'custom-js', plugin_dir_url(__FILE__).'assets/js/custom.js', array('jquery', 'sweetalert'), '0.1', true );
    wp_enqueue_script( 'sweetalert' );
    wp_enqueue_script( 'custom-js' );
});

function gg_show_video($content) {
 
    // Only do this when a single post is displayed
    if ( is_page('wistia') ) { 
    
        $content .= '<script src="https://fast.wistia.com/embed/medias/yuh3trwkkl.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_yuh3trwkkl videoFoam=true" style="height:100%;position:relative;width:100%"><div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img src="https://fast.wistia.com/embed/medias/yuh3trwkkl/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" /></div></div></div></div>';

    } 
    return $content; 
 
}
add_filter('the_content', 'gg_show_video'); 
