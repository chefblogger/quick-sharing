<?php
/*
Plugin Name: Quick Sharing
Plugin URI: http://www.chefblogger.me
Description: Schnelle und einfache Einbindung von Social Media Share Buttons. Die Administration finden sie unter <a href="options-general.php?page=quicksharing_plugin">Quick Sharing Administration</a>
Version: 1.6.3
Author: Eric-Oliver M&auml;chler
Author URI: http://www.ericmaechler.com
Requires at least: 6.0.1
Tested up to: 6.0
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
include 'conf.php';




function quicksharing_js_mastodon() {
	wp_enqueue_script( 'quicksharing_mastodon', plugins_url( '/mastodon.js', __FILE__ ));
	
}
add_action( 'wp_enqueue_scripts', 'quicksharing_js_mastodon' );



add_action( 'wp_enqueue_scripts', 'quicksharing_css_style_include' );


 
function quicksharing_css_style_include() {
	//quick sharing button css 
$quicksharing_button_style_show = get_option('quicksharing_button_style');
//ECHO "quicksharing_button_style_show: $quicksharing_button_style_show";
	
	
			if ($quicksharing_button_style_show == '' or $quicksharing_button_style_show == '1')
			{
				wp_register_style( 'quicksharing_style', plugins_url('css/quicksharing_style-1.css', __FILE__) );
			}
			elseif ($quicksharing_button_style_show == '2')
			{
				wp_register_style( 'quicksharing_style', plugins_url('css/quicksharing_style-2.css', __FILE__) );			
			}
			elseif ($quicksharing_button_style_show == '3')
			{
				wp_register_style( 'quicksharing_style', plugins_url('css/quicksharing_style-3.css', __FILE__) );			
			}
			elseif ($quicksharing_button_style_show == '4')
			{
				wp_register_style( 'quicksharing_style', plugins_url('css/quicksharing_style-4.css', __FILE__) );			
			}
			elseif ($quicksharing_button_style_show == '5')
			{
				wp_register_style( 'quicksharing_style', plugins_url('css/quicksharing_style-5.css', __FILE__) );			
			}
        elseif ($quicksharing_button_style_show == '6')
			{
				wp_register_style( 'quicksharing_style', plugins_url('css/quicksharing_style-6.css', __FILE__) );			
			}
	
			
	
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); 
	wp_enqueue_style('pinterest_js', '//assets.pinterest.com/js/pinit.js'); 
	wp_enqueue_style( 'quicksharing_style' );
}




add_filter('the_content', 'add_messages');

function add_messages( $content ) {

 //global $quicksharing_socialmedia_netzwerke;
 
//permalink
	$quicksharing_link = get_permalink();
	
	$post_id = get_the_ID();
	$quicksharing_titel0 = get_the_title( $post_id );
	$quicksharing_titel = str_replace("%20"," ",$quicksharing_titel0);

//$behindfp = get_option('behindfp');
/* ---------------------------------- Facebook ---------------------------------- */

//eigener fb button
$quicksharing_button_facebook = get_option('quicksharing_button_facebook'); 

//facebook an oder aus
$quicksharing_button_facebook_status = get_option('quicksharing_button_facebook_status'); 

$quicksharing_facebook_share_link = "https://www.facebook.com/sharer/sharer.php?u=$quicksharing_link";

if ($quicksharing_button_facebook_status == 'an') {

			if ($quicksharing_button_facebook == '')
					{
					$quicksharing_facebook = "<a class='facebookBtn smGlobalBtn' href='$quicksharing_facebook_share_link' target='_blank'></a>";
					}
					else
					{
					$quicksharing_facebook = "<a href='$quicksharing_facebook_share_link' target='_blank'><img src='$quicksharing_button_facebook'>";
					}


}





	

/* ---------------------------------- twitter ---------------------------------- */

//eigener twitter button
$quicksharing_button_twitter = get_option('quicksharing_button_twitter'); 

//twitter an oder aus
$quicksharing_button_twitter_status = get_option('quicksharing_button_twitter_status'); 

$quicksharing_twitter_share_link = "https://twitter.com/intent/tweet?source=$quicksharing_link&text=$quicksharing_titel: $quicksharing_link";

if ($quicksharing_button_twitter_status == 'an') {

			if ($quicksharing_button_twitter == '')
					{
					$quicksharing_twitter = "<a class='twitterBtn smGlobalBtn' href='$quicksharing_twitter_share_link' target='_blank'></a>";
					}
					else
					{
					$quicksharing_twitter = "<a href='$quicksharing_twitter_share_link' target='_blank'><img src='$quicksharing_button_twitter'>";
					}


}




/* ---------------------------------- linkedin ---------------------------------- */

//eigener fb button
$quicksharing_button_linkedin = get_option('quicksharing_button_linkedin'); 

//linkedin an oder aus
$quicksharing_button_linkedin_status = get_option('quicksharing_button_linkedin_status'); 

$quicksharing_linkedin_share_link = "https://www.linkedin.com/shareArticle?mini=true&url=$quicksharing_link&title=$quicksharing_titel&summary=&source=";

if ($quicksharing_button_linkedin_status == 'an') {

			if ($quicksharing_button_linkedin == '')
					{
					$quicksharing_linkedin = "<a class='linkedinBtn smGlobalBtn' href='$quicksharing_linkedin_share_link' target='_blank'></a>";
					}
					else
					{
					$quicksharing_linkedin = "<a href='$quicksharing_linkedin_share_link' target='_blank'><img src='$quicksharing_button_linkedin'>";
					}


}


/* ---------------------------------- xing ---------------------------------- */

//eigener fb button
$quicksharing_button_xing = get_option('quicksharing_button_xing'); 

//xing an oder aus
$quicksharing_button_xing_status = get_option('quicksharing_button_xing_status'); 

$quicksharing_xing_share_link = "https://www.xing.com/spi/shares/new?url=$quicksharing_link";

if ($quicksharing_button_xing_status == 'an') {

			if ($quicksharing_button_xing == '')
					{
					$quicksharing_xing = "<a class='xingBtn smGlobalBtn' href='$quicksharing_xing_share_link' target='_blank'></a>";
					}
					else
					{
					$quicksharing_xing = "<a href='$quicksharing_xing_share_link' target='_blank'><img src='$quicksharing_button_xing'>";
					}


}


/* ---------------------------------- reddit ---------------------------------- */

//eigener fb button
$quicksharing_button_reddit = get_option('quicksharing_button_reddit'); 

//reddit an oder aus
$quicksharing_button_reddit_status = get_option('quicksharing_button_reddit_status'); 

$quicksharing_reddit_share_link = "http://reddit.com/submit?url=$quicksharing_link";

if ($quicksharing_button_reddit_status == 'an') {

			if ($quicksharing_button_reddit == '')
					{
					$quicksharing_reddit = "<a class='redditBtn smGlobalBtn' href='$quicksharing_reddit_share_link' target='_blank'></a>";
					}
					else
					{
					$quicksharing_reddit = "<a href='$quicksharing_reddit_share_link' target='_blank'><img src='$quicksharing_button_reddit'>";
					}


}

/* ---------------------------------- whatsappp ---------------------------------- */

//eigener fb button
$quicksharing_button_whatsappp = get_option('quicksharing_button_whatsappp'); 

//whatsappp an oder aus
$quicksharing_button_whatsappp_status = get_option('quicksharing_button_whatsappp_status'); 

$quicksharing_whatsappp_share_link = "whatsapp://send?text=Interessanter%20Link:%20$quicksharing_titel%20$quicksharing_link";

if ($quicksharing_button_whatsappp_status == 'an') {

			if ($quicksharing_button_whatsappp == '')
					{
					$quicksharing_whatsappp = "<a class='whatsappBtn smGlobalBtn' href='$quicksharing_whatsappp_share_link' target='_blank'></a>";
					}
					else
					{
					$quicksharing_whatsappp = "<a href='$quicksharing_whatsappp_share_link' target='_blank'><img src='$quicksharing_button_whatsappp'>";
					}


}

/* ---------------------------------- pinterest ---------------------------------- */

//eigener pinterest button
$quicksharing_button_pinterest = get_option('quicksharing_button_pinterest'); 

//pinterest an oder aus
$quicksharing_button_pinterest_status = get_option('quicksharing_button_pinterest_status'); 

$quicksharing_pinterest_share_link = "https://www.pinterest.com/pin/create/button/?url=$quicksharing_link";


if ($quicksharing_button_pinterest_status == 'an') {

			if ($quicksharing_button_pinterest == '')
					{
					$quicksharing_pinterest = "<a class='xing2Btn smGlobalBtn' href='$quicksharing_pinterest_share_link' target='_blank'></a>";
					}
					else
					{
					$quicksharing_pinterest = "<a href='$quicksharing_pinterest_share_link' target='_blank'><img src='$quicksharing_button_pinterest'>";
					}


}

/* ---------------------------------- mastodon ---------------------------------- */



//eigener mastodon button
$quicksharing_button_mastodon = get_option('quicksharing_button_mastodon'); 

//mastodon an oder aus
$quicksharing_button_mastodon_status = get_option('quicksharing_button_mastodon_status'); 

//api token
$quicksharing_api_mastodon = get_option('quicksharing_api_mastodon'); 

//$quicksharing_pinterest_share_link = "https://www.pinterest.com/pin/create/button/?url=$quicksharing_link";


if ($quicksharing_button_mastodon_status == 'an') {

			if ($quicksharing_button_mastodon == '')
					{
						$quicksharing_mastodon = "<a href='#' id='mastodon' class='mstd2Btn smGlobalBtn' onclick='doalert();'></a>";

					}
					else
					{
					$quicksharing_mastodon = "<a href='#'  id='mastodon'  onclick='doalert();'><img src='$quicksharing_button_mastodon'>";
					}


}

/*
$dom = $_SERVER['HTTP_HOST']; 
$suff = $_SERVER['REQUEST_URI'];  
$url = "https://$dom$suff"; 
//echo $url;
$quicksharing_mastodon_link = "das ist ein spannender link $url";
*/


//$quicksharing_mastodon = "<a href='#' id='mastodon' class='mstd2Btn smGlobalBtn' onclick='doalert();'></a>";

$plugin_url = plugin_dir_url( __FILE__ );

//page titel
$quicksharing_wptitel = get_the_title();

//$posturl = get_permalink( $post->ID );
	//echo "<b>posturl:</b> $posturl";

global $wp;
$posturl = home_url( add_query_arg( array(), $wp->request ) );	
?>
<script type="text/javascript">
function doalert(){
	
	//alert("tröööt");

	

	let target = prompt("Add Target-URL:", "@eric_maechler@mastodon.digitalsuccess.dev");

	if (target == null || target == "") {
		
		var text = "Link: <?php echo $posturl ?>";
		
  } else {
    
	var text = "Link: <?php echo $posturl ?> " + target;

  }


	

    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "<?php echo $plugin_url ?>/mastodon.php?tk=<?php echo $quicksharing_api_mastodon ?>", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 || this.status === 200){ 
            console.log(this.responseText); // echo from php
        }       
    };
    xmlhttp.send("msg=" + text);

}
</script>
<?php
/* ---------------------------------- BUTTON ENDE ---------------------------------- */

//buttonsanzeige zusammenstellen
$quicksharing_socialmedia_netzwerke = "<br /><br /><div id='social'>" . @ $quicksharing_facebook . @ $quicksharing_twitter . @ $quicksharing_googleplus . @ $quicksharing_linkedin . @ $quicksharing_xing . @ $quicksharing_reddit . @ $quicksharing_whatsappp . @ $quicksharing_pinterest . @ $quicksharing_mastodon ."</div><br /><br />";   

	




$quicksharing_button_position = get_option('quicksharing_button_position');

if ($quicksharing_button_position == 'oben') {

return @ $quicksharing_msg.$quicksharing_socialmedia_netzwerke.$content;

}
else

{
//$quicksharing_msg ="<b>Danke fürs teilen!</b>";

 
     
     //return $content.$quicksharing_msg.$quicksharing_socialmedia_netzwerke;
     return $content.$quicksharing_socialmedia_netzwerke;
	 }
     
          
}
?>