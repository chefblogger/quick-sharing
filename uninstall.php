<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
// die when the file is called directly
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}
//define a vairbale and store an option name as the value.
$option_name = 'quicksharing_button_whatsappp';

$option_name0 = 'quicksharing_button_style';

$option_name1 = 'quicksharing_button_whatsappp_status';
$option_name2 = 'quicksharing_button_facebook';
$option_name3 = 'quicksharing_button_facebook_status';
$option_name4 = 'quicksharing_button_twitter';
$option_name5 = 'quicksharing_button_twitter_status';
$option_name6 = 'quicksharing_button_linkedin';
$option_name7 = 'quicksharing_button_linkedin_status';
$option_name8 = 'quicksharing_button_xing';
$option_name9 = 'quicksharing_button_xing_status';
$option_name10 = 'quicksharing_button_reddit';
$option_name11 = 'quicksharing_button_reddit_status';

$option_name12 = 'quicksharing_button_position';

$option_name13 = 'quicksharing_button_pinterest';
$option_name14 = 'quicksharing_button_pinterest_status';

$option_name15 = 'quicksharing_button_mastodon';
$option_name16 = 'quicksharing_button_mastodon_status';
$option_name17 = 'quicksharing_api_mastodon';
//call delete option and use the vairable inside the quotations
delete_option($option_name);
delete_option($option_name0);
delete_option($option_name1);
delete_option($option_name2);
delete_option($option_name3);
delete_option($option_name4);
delete_option($option_name5);
delete_option($option_name6);
delete_option($option_name7);
delete_option($option_name8);
delete_option($option_name9);
delete_option($option_name10);
delete_option($option_name11);
delete_option($option_name12);
delete_option($option_name13);
delete_option($option_name14);
delete_option($option_name15);
delete_option($option_name16);
delete_option($option_name17);

// for site options in Multisite
delete_site_option($option_name);
delete_site_option($option_name0);
delete_site_option($option_name1);
delete_site_option($option_name2);
delete_site_option($option_name3);
delete_site_option($option_name4);
delete_site_option($option_name5);
delete_site_option($option_name6);
delete_site_option($option_name7);
delete_site_option($option_name8);
delete_site_option($option_name9);
delete_site_option($option_name10);
delete_site_option($option_name11);
delete_site_option($option_name12);
delete_site_option($option_name13);
delete_site_option($option_name14);
delete_site_option($option_name15);
delete_site_option($option_name16);
delete_site_option($option_name17);

?>