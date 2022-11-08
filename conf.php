<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

 include 'form.php';
 function saveQSS() {
  adminFormQSS();
 }

/*
 function quicksharing_plugin() {
  add_options_page('Quick Sharing', 'Quick Sharing', 1, 'quicksharing_plugin', 'saveQSS');
 }
 add_action('admin_menu', 'quicksharing_plugin');
*/

function quicksharing_plugin() {
	add_options_page('Quick Sharing', 'Quick Sharing', 'manage_options', 'quicksharing_plugin', 'saveQSS');
}
add_action( 'admin_menu', 'quicksharing_plugin' );
 
?>