<?php
/**
* @package OrderUS
*/
/*
Plugin Name:OrderUS
Plugin URI: http://isaleon.x10host.com/
Description: Plugin to contact us on whatsapp. In other words simple whatsapp click chat button.
Version:1.0.4
Author: Varun Kaka
Author URI:http://varunkaka.com
license:
Text Domain: OrderUS
*/
function SWP_Whatsapp_btn() {
  $info = '<a href="https://api.whatsapp.com/send?phone=610478944007&amp;text=I would like this to get customized" target="_blank" class="whatsapp">
  <img src="'.plugins_url( "OrderUS/assets/img/whatsapp.png" ).'" alt="whatsapp">
</a>';
echo $info;
}
add_action( 'wp_footer', 'SWP_Whatsapp_btn' );

// Register style sheet.
add_action( 'wp_enqueue_scripts', 'swp_register_plugin_styles' );

/**
 * Register style sheet.
 */
function swp_register_plugin_styles() {
	wp_register_style( 'whatsapp-style', plugins_url( 'OrderUS/assets/css/plugin.css' ) );
	wp_enqueue_style( 'whatsapp-style' );
}
