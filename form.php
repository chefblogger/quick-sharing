<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

 function adminFormQSS() {
	 
?>
<div class="wrap">
<h2>Quick Sharing</h2>

<hr />
<?php
  
  if (isset($_REQUEST['submit'])) {
   saveFormQSS();
  }
  /*------nonce field check end ---- */   
  elseif (isset($_REQUEST['submit_position'])) {
  if ( 
    ! isset( $_POST['nonce_position'] ) 
    || ! wp_verify_nonce( $_POST['nonce_position'], 'nonce_position_field' ) 
		) {

   				print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quickshareposition();
  			
			}
}
	 
	 
/* ########################################################################################*/	 
/*------nonce Quick Sharing Button Style---- */
if (isset($_REQUEST['submit_qsstyle'])) {
  if ( 
    ! isset( $_POST['nonce_qsstyle'] ) 
    || ! wp_verify_nonce( $_POST['nonce_qsstyle'], 'nonce_qsstyle_field' ) 
		) {

   				//print 'Sorry, your nonce did not verify.';
   				ECHO "ERROR";

			} else {
   		saveForm_quicksharebutton_style();
  			}
}
/*------nonce field check end ---- */ 
/* ########################################################################################*/
	 
	 
	 
/* ################################################################################## */
/* ==================================== facebook ==================================== */
/* ################################################################################## */
/*------nonce field check end ---- */   
  elseif (isset($_REQUEST['submit_facebook_button'])) {
  if ( 
    ! isset( $_POST['nonce_facebook0'] ) 
    || ! wp_verify_nonce( $_POST['nonce_facebook0'], 'nonce_facebook_field0' ) 
		) {

   				print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quicksharefacebook();
  			
			}
}
/*------nonce field check end ---- */  
/*------nonce field check end ---- */   
  elseif (isset($_REQUEST['submit_facebook_status'])) {
  if ( 
    ! isset( $_POST['nonce_facebook1'] ) 
    || ! wp_verify_nonce( $_POST['nonce_facebook1'], 'nonce_facebook_field1' ) 
		) {

   				print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quicksharebuttonfacebookstatus();
  			
			}
}
/*------nonce field check end ---- */  
/*------nonce field check end ---- */   
  elseif (isset($_REQUEST['quickshare_button_facebook_reset'])) {
  if ( 
    ! isset( $_POST['nonce_facebook2'] ) 
    || ! wp_verify_nonce( $_POST['nonce_facebook2'], 'nonce_facebook_field2' ) 
		) {

   				print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quicksharebuttonfacebookreset();
  			
			}
}
/*------nonce field check end ---- */ 

/* ################################################################################## */
/* ==================================== twitter ==================================== */
/* ################################################################################## */
/*------nonce field check end ---- */   
  elseif (isset($_REQUEST['submit_twitter_button'])) {
  if ( 
    ! isset( $_POST['nonce_twitter0'] ) 
    || ! wp_verify_nonce( $_POST['nonce_twitter0'], 'nonce_twitter_field0' ) 
		) {

   				print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quicksharetwitter();
  			
			}
}
/*------nonce field check end ---- */  
/*------nonce field check end ---- */   
  elseif (isset($_REQUEST['submit_twitter_status'])) {
  if ( 
    ! isset( $_POST['nonce_twitter1'] ) 
    || ! wp_verify_nonce( $_POST['nonce_twitter1'], 'nonce_twitter_field1' ) 
		) {

   				print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quicksharebuttontwitterstatus();
  			
			}
}
/*------nonce field check end ---- */  
/*------nonce field check end ---- */   
  elseif (isset($_REQUEST['quickshare_button_twitter_reset'])) {
  if ( 
    ! isset( $_POST['nonce_twitter2'] ) 
    || ! wp_verify_nonce( $_POST['nonce_twitter2'], 'nonce_twitter_field2' ) 
		) {

   				print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quicksharebuttontwitterreset();
  			
			}
}
/*------nonce field check end ---- */ 	 
	 


/* ################################################################################## */
/* ==================================== linkedin ==================================== */
/* ################################################################################## */
/*------nonce field check end ---- */   
  elseif (isset($_REQUEST['submit_linkedin_button'])) {
  if ( 
    ! isset( $_POST['nonce_linkedin0'] ) 
    || ! wp_verify_nonce( $_POST['nonce_linkedin0'], 'nonce_linkedin_field0' ) 
		) {

   				print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quicksharelinkedin();
  			
			}
}
/*------nonce field check end ---- */  
/*------nonce field check end ---- */   
  elseif (isset($_REQUEST['submit_linkedin_status'])) {
  if ( 
    ! isset( $_POST['nonce_linkedin1'] ) 
    || ! wp_verify_nonce( $_POST['nonce_linkedin1'], 'nonce_linkedin_field1' ) 
		) {

   				print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quicksharebuttonlinkedinstatus();
  			
			}
}
/*------nonce field check end ---- */  
/*------nonce field check end ---- */   
  elseif (isset($_REQUEST['quickshare_button_linkedin_reset'])) {
  if ( 
    ! isset( $_POST['nonce_linkedin2'] ) 
    || ! wp_verify_nonce( $_POST['nonce_linkedin2'], 'nonce_linkedin_field2' ) 
		) {

   				print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quicksharebuttonlinkedinreset();
  			
			}
}
/*------nonce field check end ---- */ 

/* ################################################################################## */
/* ==================================== xing ==================================== */
/* ################################################################################## */
/*------nonce field check end ---- */   
  elseif (isset($_REQUEST['submit_xing_button'])) {
  if ( 
    ! isset( $_POST['nonce_xing0'] ) 
    || ! wp_verify_nonce( $_POST['nonce_xing0'], 'nonce_xing_field0' ) 
		) {

   				print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quicksharexing();
  			
			}
}
/*------nonce field check end ---- */  
/*------nonce field check end ---- */   
  elseif (isset($_REQUEST['submit_xing_status'])) {
  if ( 
    ! isset( $_POST['nonce_xing1'] ) 
    || ! wp_verify_nonce( $_POST['nonce_xing1'], 'nonce_xing_field1' ) 
		) {

   				print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quicksharebuttonxingstatus();
  			
			}
}
/*------nonce field check end ---- */  
/*------nonce field check end ---- */   
  elseif (isset($_REQUEST['quickshare_button_xing_reset'])) {
  if ( 
    ! isset( $_POST['nonce_xing2'] ) 
    || ! wp_verify_nonce( $_POST['nonce_xing2'], 'nonce_xing_field2' ) 
		) {

   				print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quicksharebuttonxingreset();
  			
			}
}
/*------nonce field check end ---- */ 


/* ################################################################################## */
/* ==================================== reddit ==================================== */
/* ################################################################################## */
/*------nonce field check end ---- */   
  elseif (isset($_REQUEST['submit_reddit_button'])) {
  if ( 
    ! isset( $_POST['nonce_reddit0'] ) 
    || ! wp_verify_nonce( $_POST['nonce_reddit0'], 'nonce_reddit_field0' ) 
		) {

   				print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quicksharereddit();
  			
			}
}
/*------nonce field check end ---- */  
/*------nonce field check end ---- */   
  elseif (isset($_REQUEST['submit_reddit_status'])) {
  if ( 
    ! isset( $_POST['nonce_reddit1'] ) 
    || ! wp_verify_nonce( $_POST['nonce_reddit1'], 'nonce_reddit_field1' ) 
		) {

   				print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quicksharebuttonredditstatus();
  			
			}
}
/*------nonce field check end ---- */  
/*------nonce field check end ---- */   
  elseif (isset($_REQUEST['quickshare_button_reddit_reset'])) {
  if ( 
    ! isset( $_POST['nonce_reddit2'] ) 
    || ! wp_verify_nonce( $_POST['nonce_reddit2'], 'nonce_reddit_field2' ) 
		) {

   				print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quicksharebuttonredditreset();
  			
			}
}
/*------nonce field check end ---- */ 


/* ################################################################################## */
/* ==================================== whatsapp ==================================== */
/* ################################################################################## */
/*------nonce field check end ---- */   
  elseif (isset($_REQUEST['submit_whatsappp_button'])) {
  if ( 
    ! isset( $_POST['nonce_whatsappp0'] ) 
    || ! wp_verify_nonce( $_POST['nonce_whatsappp0'], 'nonce_whatsappp_field0' ) 
		) {

   				print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quicksharewhatsappp();
  			
			}
}
/*------nonce field check end ---- */  
/*------nonce field check end ---- */   
  elseif (isset($_REQUEST['submit_whatsappp_status'])) {
  if ( 
    ! isset( $_POST['nonce_whatsappp1'] ) 
    || ! wp_verify_nonce( $_POST['nonce_whatsappp1'], 'nonce_whatsappp_field1' ) 
		) {

   				print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quicksharebuttonwhatsapppstatus();
  			
			}
}
/*------nonce field check end ---- */  
/*------nonce field check end ---- */   
  elseif (isset($_REQUEST['quickshare_button_whatsappp_reset'])) {
  if ( 
    ! isset( $_POST['nonce_whatsappp2'] ) 
    || ! wp_verify_nonce( $_POST['nonce_whatsappp2'], 'nonce_whatsappp_field2' ) 
		) {

   				print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quicksharebuttonwhatsapppreset();
  			
			}
}
/*------nonce field check end ---- */ 

/* ################################################################################## */
/* ==================================== pinterest ==================================== */
/* ################################################################################## */
/*------nonce field check end ---- */   
  elseif (isset($_REQUEST['submit_pinterest_button'])) {
  if ( 
    ! isset( $_POST['nonce_pinterest0'] ) 
    || ! wp_verify_nonce( $_POST['nonce_pinterest0'], 'nonce_pinterest_field0' ) 
		) {

   				print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quicksharepinterest();
  			
			}
}
/*------nonce field check end ---- */  
/*------nonce field check end ---- */   
  elseif (isset($_REQUEST['submit_pinterest_status'])) {
  if ( 
    ! isset( $_POST['nonce_pinterest1'] ) 
    || ! wp_verify_nonce( $_POST['nonce_pinterest1'], 'nonce_pinterest_field1' ) 
		) {

   				print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quicksharebuttonpintereststatus();
  			
			}
}
/*------nonce field check end ---- */  
/*------nonce field check end ---- */   
  elseif (isset($_REQUEST['quickshare_button_pinterest_reset'])) {
  if ( 
    ! isset( $_POST['nonce_pinterest2'] ) 
    || ! wp_verify_nonce( $_POST['nonce_pinterest2'], 'nonce_pinterest_field2' ) 
		) {

   				print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quicksharebuttonpinterestreset();
  			
			}
}
/*------nonce field check end ---- */ 


/* ################################################################################## */
/* ==================================== mastodon ==================================== */
/* ################################################################################## */
/*------nonce field check end ---- */   
elseif (isset($_REQUEST['submit_mastodon_button'])) {
	if ( 
	  ! isset( $_POST['nonce_mastodon0'] ) 
	  || ! wp_verify_nonce( $_POST['nonce_mastodon0'], 'nonce_mastodon_field0' ) 
		  ) {
  
					 print 'Sorry, your nonce did not verify.';
					 exit;
  
			  } else {
			 saveForm_quicksharemastodon();
				
			  }
  }
  /*------nonce field check end ---- */  
  /*------nonce field check end ---- */   
	elseif (isset($_REQUEST['submit_mastodon_status'])) {
	if ( 
	  ! isset( $_POST['nonce_mastodon1'] ) 
	  || ! wp_verify_nonce( $_POST['nonce_mastodon1'], 'nonce_mastodon_field1' ) 
		  ) {
  
					 print 'Sorry, your nonce did not verify.';
					 exit;
  
			  } else {
			 saveForm_quicksharebuttonmastodonstatus();
				
			  }
  }
  /*------nonce field check end ---- */  
  /*------nonce field check end ---- */   
	elseif (isset($_REQUEST['quickshare_button_mastodon_reset'])) {
	if ( 
	  ! isset( $_POST['nonce_mastodon2'] ) 
	  || ! wp_verify_nonce( $_POST['nonce_mastodon2'], 'nonce_mastodon_field2' ) 
		  ) {
  
					 print 'Sorry, your nonce did not verify.';
					 exit;
  
			  } else {
			 saveForm_quicksharebuttonmastodonreset();
				
			  }
  }
  /*------nonce field check end ---- */ 

    /*------nonce field check end ---- */   
	elseif (isset($_REQUEST['submit_mastodon_api'])) {
		if ( 
		  ! isset( $_POST['nonce_mastodonapi0'] ) 
		  || ! wp_verify_nonce( $_POST['nonce_mastodonapi0'], 'nonce_mastodonapi_field0' ) 
			  ) {
	  
						 print 'Sorry, your nonce did not verify.';
						 exit;
	  
				  } else {
				 saveForm_quicksharebuttonmastodonapi();
					
				  }
	  }
	  /*------nonce field check end ---- */  
	  /*------nonce field check end ---- */   
		elseif (isset($_REQUEST['quickshare_api_mastodon_reset'])) {
		if ( 
		  ! isset( $_POST['nonce_mastodonapi2'] ) 
		  || ! wp_verify_nonce( $_POST['nonce_mastodonapi2'], 'nonce_mastodonapi_field2' ) 
			  ) {
	  
						 print 'Sorry, your nonce did not verify.';
						 exit;
	  
				  } else {
				 saveForm_quicksharebuttonmastodonapireset();
					
				  }
	  }
	  /*------nonce field check end ---- */ 
  







  
  
  
  
 showFormQSS();
 }
 

 	//reset
/*  
  if ($_REQUEST['quickshare_button_facebook_reset']) {
   update_option('quicksharing_button_facebook', "");
  }
  if ($_REQUEST['quickshare_button_twitter_reset']) {
   update_option('quicksharing_button_twitter', "");
  }
*/  
 
 function saveForm_quickshareposition() {
  if (sanitize_text_field($_POST['quicksharing_button_position']) ) {

  update_option('quicksharing_button_position', sanitize_text_field($_POST['quicksharing_button_position']) );
  }
  
 }
  
/* BUTTON DESIGN ################################################################################################## */

  function saveForm_quicksharebutton_style() {
  if (sanitize_text_field($_POST['quicksharing_button_style']) ) {

  update_option('quicksharing_button_style', sanitize_text_field($_POST['quicksharing_button_style']) );
  }
  
 }
/* ################################################################################################################ */
  
/* --------------------------------------------------------------------------------------------------------------------------------------- */ 
/* ############## FACEBOOK ##### 
/* --------------------------------------------------------------------------------------------------------------------------------------- */  
 function saveForm_quicksharefacebook() {
  if (sanitize_text_field($_POST['quicksharing_button_facebook']) ) {

  update_option('quicksharing_button_facebook', sanitize_text_field($_POST['quicksharing_button_facebook']) );
  }
  
 }

 
 function saveForm_quicksharebuttonfacebookstatus() {
  if (sanitize_text_field($_POST['quicksharing_button_facebook_status']) ) {

  update_option('quicksharing_button_facebook_status', sanitize_text_field($_POST['quicksharing_button_facebook_status']) );
  }
  
 }
 
 function saveForm_quicksharebuttonfacebookreset(){
	 
	 $resetter = '';
   update_option('quicksharing_button_facebook', sanitize_text_field($resetter) );
  }


/* ------------------------------------------------------------------------ */
  
/* --------------------------------------------------------------------------------------------------------------------------------------- */ 
/* ############## Twitter ##### 
/* --------------------------------------------------------------------------------------------------------------------------------------- */  
 function saveForm_quicksharetwitter() {
  if (sanitize_text_field($_POST['quicksharing_button_twitter']) ) {

  update_option('quicksharing_button_twitter', sanitize_text_field($_POST['quicksharing_button_twitter']) );
  }
  
 }

 
 function saveForm_quicksharebuttontwitterstatus() {
  if (sanitize_text_field($_POST['quicksharing_button_twitter_status']) ) {

  update_option('quicksharing_button_twitter_status', sanitize_text_field($_POST['quicksharing_button_twitter_status']) );
  }
  
 }
 
 function saveForm_quicksharebuttontwitterreset(){
	 
	 $resetter = '';
   update_option('quicksharing_button_twitter', sanitize_text_field($resetter) );
  }


/* ############## linkedin ##### 
/* --------------------------------------------------------------------------------------------------------------------------------------- */  
 function saveForm_quicksharelinkedin() {
  if (sanitize_text_field($_POST['quicksharing_button_linkedin']) ) {

  update_option('quicksharing_button_linkedin', sanitize_text_field($_POST['quicksharing_button_linkedin']) );
  }
  
 }

 
 function saveForm_quicksharebuttonlinkedinstatus() {
  if (sanitize_text_field($_POST['quicksharing_button_linkedin_status']) ) {

  update_option('quicksharing_button_linkedin_status', sanitize_text_field($_POST['quicksharing_button_linkedin_status']) );
  }
  
 }
 
 function saveForm_quicksharebuttonlinkedinreset(){
	 
	 $resetter = '';
   update_option('quicksharing_button_linkedin', sanitize_text_field($resetter) );
  }


/* ------------------------------------------------------------------------ */  
  
/* --------------------------------------------------------------------------------------------------------------------------------------- */ 
/* ############## xing ##### 
/* --------------------------------------------------------------------------------------------------------------------------------------- */  
 function saveForm_quicksharexing() {
  if (sanitize_text_field($_POST['quicksharing_button_xing']) ) {

  update_option('quicksharing_button_xing', sanitize_text_field($_POST['quicksharing_button_xing']) );
  }
  
 }

 
 function saveForm_quicksharebuttonxingstatus() {
  if (sanitize_text_field($_POST['quicksharing_button_xing_status']) ) {

  update_option('quicksharing_button_xing_status', sanitize_text_field($_POST['quicksharing_button_xing_status']) );
  }
  
 }
 
 function saveForm_quicksharebuttonxingreset(){
	 
	 $resetter = '';
   update_option('quicksharing_button_xing', sanitize_text_field($resetter) );
  }


/* ------------------------------------------------------------------------ */
  
/* --------------------------------------------------------------------------------------------------------------------------------------- */ 
/* ############## reddit ##### 
/* --------------------------------------------------------------------------------------------------------------------------------------- */  
 function saveForm_quicksharereddit() {
  if (sanitize_text_field($_POST['quicksharing_button_reddit']) ) {

  update_option('quicksharing_button_reddit', sanitize_text_field($_POST['quicksharing_button_reddit']) );
  }
  
 }

 
 function saveForm_quicksharebuttonredditstatus() {
  if (sanitize_text_field($_POST['quicksharing_button_reddit_status']) ) {

  update_option('quicksharing_button_reddit_status', sanitize_text_field($_POST['quicksharing_button_reddit_status']) );
  }
  
 }
 
 function saveForm_quicksharebuttonredditreset(){
	 
	 $resetter = '';
   update_option('quicksharing_button_reddit', sanitize_text_field($resetter) );
  }


/* ------------------------------------------------------------------------ */


/* --------------------------------------------------------------------------------------------------------------------------------------- */ 
/* ############## whatsapp ##### 
/* --------------------------------------------------------------------------------------------------------------------------------------- */  
 function saveForm_quicksharewhatsappp() {
  if (sanitize_text_field($_POST['quicksharing_button_whatsappp']) ) {

  update_option('quicksharing_button_whatsappp', sanitize_text_field($_POST['quicksharing_button_whatsappp']) );
  }
  
 }

 
 function saveForm_quicksharebuttonwhatsapppstatus() {
  if (sanitize_text_field($_POST['quicksharing_button_whatsappp_status']) ) {

  update_option('quicksharing_button_whatsappp_status', sanitize_text_field($_POST['quicksharing_button_whatsappp_status']) );
  }
  
 }
 
 function saveForm_quicksharebuttonwhatsapppreset(){
	 
	 $resetter = '';
   update_option('quicksharing_button_whatsappp', sanitize_text_field($resetter) );
  }


/* ------------------------------------------------------------------------ */
  
/* --------------------------------------------------------------------------------------------------------------------------------------- */ 
/* ############## pinterest ##### 
/* --------------------------------------------------------------------------------------------------------------------------------------- */  
 function saveForm_quicksharepinterest() {
  if (sanitize_text_field($_POST['quicksharing_button_pinterest']) ) {

  update_option('quicksharing_button_pinterest', sanitize_text_field($_POST['quicksharing_button_pinterest']) );
  }
  
 }

 
 function saveForm_quicksharebuttonpintereststatus() {
  if (sanitize_text_field($_POST['quicksharing_button_pinterest_status']) ) {

  update_option('quicksharing_button_pinterest_status', sanitize_text_field($_POST['quicksharing_button_pinterest_status']) );
  }
  
 }
 
 function saveForm_quicksharebuttonpinterestreset(){
	 
	 $resetter = '';
   update_option('quicksharing_button_pinterest', sanitize_text_field($resetter) );
  }


/* ------------------------------------------------------------------------ */  
  
/* --------------------------------------------------------------------------------------------------------------------------------------- */ 
/* ############## mastodon ##### 
/* --------------------------------------------------------------------------------------------------------------------------------------- */  
function saveForm_quicksharebuttonmastodonstatus() {
	if (sanitize_text_field($_POST['quicksharing_button_mastodon_status']) ) {
  
	update_option('quicksharing_button_mastodon_status', sanitize_text_field($_POST['quicksharing_button_mastodon_status']) );
	}
	
   }



function saveForm_quicksharemastodon() {
	if (sanitize_text_field($_POST['quicksharing_button_mastodon']) ) {
  
	update_option('quicksharing_button_mastodon', sanitize_text_field($_POST['quicksharing_button_mastodon']) );
	}
	
 }

 function saveForm_quicksharebuttonmastodonreset(){
	 
	$resetter = '';
  update_option('quicksharing_button_mastodon', sanitize_text_field($resetter) );
 }

 //api key 
 function saveForm_quicksharebuttonmastodonapi() {
	if (sanitize_text_field($_POST['quicksharing_api_mastodon']) ) {
  
	update_option('quicksharing_api_mastodon', sanitize_text_field($_POST['quicksharing_api_mastodon']) );
	}
	
 }

 //reset api 
 function saveForm_quicksharebuttonmastodonapireset(){
	 
	$resetter = '';
  update_option('quicksharing_api_mastodon', sanitize_text_field($resetter) );
 }





  
  

 function saveFormQSS() {
	 
	/*------nonce field check start ---- */


 
/*    
    if ($_REQUEST['quicksharing_button_facebook']) {

  update_option('quicksharing_button_facebook', $_REQUEST['quicksharing_button_facebook']);
  }
  
  elseif($_REQUEST['quicksharing_button_facebook_status']) {

  update_option('quicksharing_button_facebook_status', $_REQUEST['quicksharing_button_facebook_status']);
  }

   if ($_REQUEST['quicksharing_button_twitter']) {

  update_option('quicksharing_button_twitter', $_REQUEST['quicksharing_button_twitter']);
  }
  
  elseif($_REQUEST['quicksharing_button_twitter_status']) {

  update_option('quicksharing_button_twitter_status', $_REQUEST['quicksharing_button_twitter_status']);
  } 
  

   if($_REQUEST['quicksharing_button_position']) {

  update_option('quicksharing_button_position', $_REQUEST['quicksharing_button_position']);
  } 
*/   
  
 }

function showFormQSS() {

/* ---------------------------------- POSITON ---------------------------------- */
$quicksharing_button_position_show = get_option('quicksharing_button_position');
	
	if ($quicksharing_button_position_show == 'oben')
		{
		$quicksharing_position_oben = "<input name='quicksharing_button_position' type='radio' value='oben' checked>";
		$quicksharing_position_unten = "<input name='quicksharing_button_position' type='radio' value='unten'>";
		}
	else
		{
		$quicksharing_position_oben = "<input name='quicksharing_button_position' type='radio' value='oben'>";
		$quicksharing_position_unten = "<input name='quicksharing_button_position' type='radio' value='unten' checked>";
		}
	
	echo "<form method='post'>";
	echo "<table width='200' border='0'>";
	echo "<tr>";
	echo "<td width='20'>$quicksharing_position_oben</td>";
	echo "<td width='180'>Share Position oben</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>$quicksharing_position_unten</td>";
	echo "<td>Share Position unten</td>";
	echo "</tr>";
	echo "</table>";
	echo "<input type='submit' style='height: 25px; width: 250px' name='submit_position' value='Sichern / Save' class='button button-primary'>";
	wp_nonce_field( 'nonce_position_field', 'nonce_position' );
	echo "</form><br /><br />";
	echo "<hr>";
	
	
/* ---------------------------------- Button Design Auswahl ----------------------*/
$quicksharing_button_style_show = get_option('quicksharing_button_style');
	
$quicksharing_button_style_bild = '<img src="' . plugins_url( 'images/quick-sharing-design-auswahl.jpg', __FILE__ ) . '" width="500px" >';
	
	//Style Auswahl
echo '<h2>Button Design Auswahl</h2>';
echo '<p>Hier können Sie aus 6 verschiedenen vorkonfigurierten Button-Designs auswählen / Choose your Button Design from 6 Styles.</p>';
echo '<form method="post">';

ECHO '<select name="quicksharing_button_style">';

if ($quicksharing_button_style_show == '' or $quicksharing_button_style_show == '1')
{ echo '<option selected value="1" >Default</option>';}
else
{ echo '<option value="1" >Default</option>';}
	
if ($quicksharing_button_style_show == '2')
{ echo '<option selected value="2" >Quadrat Gross</option>';}
else
{ echo '<option value="2" >Quadrat Gross</option>';}

if ($quicksharing_button_style_show == '3')
{ echo '<option selected value="3" >Quadrat klein</option>';}
else
{ echo '<option value="3" >Quadrat klein</option>';}

if ($quicksharing_button_style_show == '4')
{ echo '<option selected value="4" >Modern</option>';}
else
{ echo '<option value="4" >Modern</option>';}

if ($quicksharing_button_style_show == '5')
{ echo '<option selected value="5" >Text</option>';}
else
{ echo '<option value="5" >Text</option>';}
    
if ($quicksharing_button_style_show == '6')
{ echo '<option selected value="6" >Rund</option>';}
else
{ echo '<option value="6" >Rund</option>';}


echo '</select>';

	echo "<br /><br />$quicksharing_button_style_bild<br />";
	

echo '<br />';
echo '<input type="submit" style="height: 25px; width: 250px" name="submit_qsstyle" value="Sichern / Save">';
  wp_nonce_field( 'nonce_qsstyle_field', 'nonce_qsstyle' );
  echo '</form>';
  echo '<br /><br />';
echo "<hr>";
/* -------------------------------------------------------------------------------*/

/* ---------------------------------- Facebook ---------------------------------- */
  $quicksharing_button_facebook_show = get_option('quicksharing_button_facebook');

  
  echo "<h2>Facebook Share Funktion</h2>";
  echo '<form method="post">';
  echo '<label for="quicksharing_button_facebook"><strong>Eigener Button / Custom Button (http://www.deinedomain.ch/facebook.jpg)</strong><br />';
  echo '<input type="text"  name="quicksharing_button_facebook" size="80" maxlength="80" value="' . $quicksharing_button_facebook_show . '">';
  echo '</label><br /><p></p>';
  echo '<input type="submit" style="height: 25px; width: 250px" name="submit_facebook_button" value="Sichern / Save">';
  wp_nonce_field( 'nonce_facebook_field0', 'nonce_facebook0' );
echo '</form><br />';
	//reset bild
  echo '<form method="post">';
  echo '<input type="submit" style="height: 25px; width: 450px" name="quickshare_button_facebook_reset" value="Zurücksetzen / Reset">';
  wp_nonce_field( 'nonce_facebook_field2', 'nonce_facebook2' );
  echo '</form><br />';
  
	$quicksharing_button_facebook_status_show = get_option('quicksharing_button_facebook_status');
	
	if ($quicksharing_button_facebook_status_show == 'an')
		{
		$quicksharing_button_facebook_an = "<input name='quicksharing_button_facebook_status' type='radio' value='an' checked>";
		$quicksharing_button_facebook_aus = "<input name='quicksharing_button_facebook_status' type='radio' value='aus'>";
		}
	else
		{
		$quicksharing_button_facebook_an = "<input name='quicksharing_button_facebook_status' type='radio' value='an'>";
		$quicksharing_button_facebook_aus = "<input name='quicksharing_button_facebook_status' type='radio' value='aus' checked>";
		}
	
	echo "<form method='post'>";
	echo "<table width='200' border='0'>";
	echo "<tr>";
	echo "<td width='20'>$quicksharing_button_facebook_aus</td>";
	echo "<td width='180'>Share Funktion aus / off</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>$quicksharing_button_facebook_an</td>";
	echo "<td>Share Funktion ein / on</td>";
	echo "</tr>";
	echo "</table>";
	echo "<input type='submit' style='height: 25px; width: 250px' name='submit_facebook_status' value='Sichern / Save'>";
	wp_nonce_field( 'nonce_facebook_field1', 'nonce_facebook1' );
	echo "</form><br /><br />";
	
/* ---------------------------------- twitter ---------------------------------- */
  $quicksharing_button_twitter_show = get_option('quicksharing_button_twitter');


  echo "<h2>Twitter Share Funktion</h2>";
  echo '<form method="post">';
  echo '<label for="quicksharing_button_twitter"><strong>Eigener Button / Custom Button (http://www.deinedomain.ch/twitter.jpg)</strong><br />';
  echo '<input type="text"  name="quicksharing_button_twitter" size="80" maxlength="80" value="' . $quicksharing_button_twitter_show . '">';
  echo '</label><br /><p></p>';
  echo '<input type="submit" style="height: 25px; width: 250px" name="submit_twitter_button" value="Sichern / Save">';
  wp_nonce_field( 'nonce_twitter_field0', 'nonce_twitter0' );
echo '</form><br />';
	//reset bild
  echo '<form method="post">';
  echo '<input type="submit" style="height: 25px; width: 450px" name="quickshare_button_twitter_reset" value="Zurücksetzen / Reset">';
  wp_nonce_field( 'nonce_twitter_field2', 'nonce_twitter2' );
  echo '</form><br />';
  
	$quicksharing_button_twitter_status_show = get_option('quicksharing_button_twitter_status');
	
	if ($quicksharing_button_twitter_status_show == 'an')
		{
		$quicksharing_button_twitter_an = "<input name='quicksharing_button_twitter_status' type='radio' value='an' checked>";
		$quicksharing_button_twitter_aus = "<input name='quicksharing_button_twitter_status' type='radio' value='aus'>";
		}
	else
		{
		$quicksharing_button_twitter_an = "<input name='quicksharing_button_twitter_status' type='radio' value='an'>";
		$quicksharing_button_twitter_aus = "<input name='quicksharing_button_twitter_status' type='radio' value='aus' checked>";
		}
	
	echo "<form method='post'>";
	echo "<table width='200' border='0'>";
	echo "<tr>";
	echo "<td width='20'>$quicksharing_button_twitter_aus</td>";
	echo "<td width='180'>Share Funktion aus / off</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>$quicksharing_button_twitter_an</td>";
	echo "<td>Share Funktion ein / on</td>";
	echo "</tr>";
	echo "</table>";
	echo "<input type='submit' style='height: 25px; width: 250px' name='submit_twitter_status' value='Sichern / Save'>";
	wp_nonce_field( 'nonce_twitter_field1', 'nonce_twitter1' );
	echo "</form><br /><br />";
	


/* ---------------------------------- linkedin ---------------------------------- */
  $quicksharing_button_linkedin_show = get_option('quicksharing_button_linkedin');

  
  echo "<h2>Linkedin Share Funktion</h2>";
  echo '<form method="post">';
  echo '<label for="quicksharing_button_linkedin"><strong>Eigener Button / Custom Button (http://www.deinedomain.ch/linkedin.jpg)</strong><br />';
  echo '<input type="text"  name="quicksharing_button_linkedin" size="80" maxlength="80" value="' . $quicksharing_button_linkedin_show . '">';
  echo '</label><br /><p></p>';
  echo '<input type="submit" style="height: 25px; width: 250px" name="submit_linkedin_button" value="Sichern / Save">';
  wp_nonce_field( 'nonce_linkedin_field0', 'nonce_linkedin0' );
echo '</form><br />';
	//reset bild
  echo '<form method="post">';
  echo '<input type="submit" style="height: 25px; width: 450px" name="quickshare_button_linkedin_reset" value="Zurücksetzen / Reset">';
  wp_nonce_field( 'nonce_linkedin_field2', 'nonce_linkedin2' );
  echo '</form><br />';
  
	$quicksharing_button_linkedin_status_show = get_option('quicksharing_button_linkedin_status');
	
	if ($quicksharing_button_linkedin_status_show == 'an')
		{
		$quicksharing_button_linkedin_an = "<input name='quicksharing_button_linkedin_status' type='radio' value='an' checked>";
		$quicksharing_button_linkedin_aus = "<input name='quicksharing_button_linkedin_status' type='radio' value='aus'>";
		}
	else
		{
		$quicksharing_button_linkedin_an = "<input name='quicksharing_button_linkedin_status' type='radio' value='an'>";
		$quicksharing_button_linkedin_aus = "<input name='quicksharing_button_linkedin_status' type='radio' value='aus' checked>";
		}
	
	echo "<form method='post'>";
	echo "<table width='200' border='0'>";
	echo "<tr>";
	echo "<td width='20'>$quicksharing_button_linkedin_aus</td>";
	echo "<td width='180'>Share Funktion aus / off</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>$quicksharing_button_linkedin_an</td>";
	echo "<td>Share Funktion ein / on</td>";
	echo "</tr>";
	echo "</table>";
	echo "<input type='submit' style='height: 25px; width: 250px' name='submit_linkedin_status' value='Sichern / Save'>";
	wp_nonce_field( 'nonce_linkedin_field1', 'nonce_linkedin1' );
	echo "</form><br /><br />";
	
/* ---------------------------------- xing ---------------------------------- */
  $quicksharing_button_xing_show = get_option('quicksharing_button_xing');

  
  echo "<h2>Xing Share Funktion</h2>";
  echo '<form method="post">';
  echo '<label for="quicksharing_button_xing"><strong>Eigener Button / Custom Button (http://www.deinedomain.ch/xing.jpg)</strong><br />';
  echo '<input type="text"  name="quicksharing_button_xing" size="80" maxlength="80" value="' . $quicksharing_button_xing_show . '">';
  echo '</label><br /><p></p>';
  echo '<input type="submit" style="height: 25px; width: 250px" name="submit_xing_button" value="Sichern / Save">';
  wp_nonce_field( 'nonce_xing_field0', 'nonce_xing0' );
echo '</form><br />';
	//reset bild
  echo '<form method="post">';
  echo '<input type="submit" style="height: 25px; width: 450px" name="quickshare_button_xing_reset" value="Zurücksetzen / Reset">';
  wp_nonce_field( 'nonce_xing_field2', 'nonce_xing2' );
  echo '</form><br />';
  
	$quicksharing_button_xing_status_show = get_option('quicksharing_button_xing_status');
	
	if ($quicksharing_button_xing_status_show == 'an')
		{
		$quicksharing_button_xing_an = "<input name='quicksharing_button_xing_status' type='radio' value='an' checked>";
		$quicksharing_button_xing_aus = "<input name='quicksharing_button_xing_status' type='radio' value='aus'>";
		}
	else
		{
		$quicksharing_button_xing_an = "<input name='quicksharing_button_xing_status' type='radio' value='an'>";
		$quicksharing_button_xing_aus = "<input name='quicksharing_button_xing_status' type='radio' value='aus' checked>";
		}
	
	echo "<form method='post'>";
	echo "<table width='200' border='0'>";
	echo "<tr>";
	echo "<td width='20'>$quicksharing_button_xing_aus</td>";
	echo "<td width='180'>Share Funktion aus / off</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>$quicksharing_button_xing_an</td>";
	echo "<td>Share Funktion ein / on</td>";
	echo "</tr>";
	echo "</table>";
	echo "<input type='submit' style='height: 25px; width: 250px' name='submit_xing_status' value='Sichern / Save'>";
	wp_nonce_field( 'nonce_xing_field1', 'nonce_xing1' );
	echo "</form><br /><br />";
	
/* ---------------------------------- reddit ---------------------------------- */
  $quicksharing_button_reddit_show = get_option('quicksharing_button_reddit');

  
  echo "<h2>Reddit Share Funktion</h2>";
  echo '<form method="post">';
  echo '<label for="quicksharing_button_reddit"><strong>Eigener Button / Custom Button (http://www.deinedomain.ch/reddit.jpg)</strong><br />';
  echo '<input type="text"  name="quicksharing_button_reddit" size="80" maxlength="80" value="' . $quicksharing_button_reddit_show . '">';
  echo '</label><br /><p></p>';
  echo '<input type="submit" style="height: 25px; width: 250px" name="submit_reddit_button" value="Sichern / Save">';
  wp_nonce_field( 'nonce_reddit_field0', 'nonce_reddit0' );
echo '</form><br />';
	//reset bild
  echo '<form method="post">';
  echo '<input type="submit" style="height: 25px; width: 450px" name="quickshare_button_reddit_reset" value="Zurücksetzen / Reset">';
  wp_nonce_field( 'nonce_reddit_field2', 'nonce_reddit2' );
  echo '</form><br />';
  
	$quicksharing_button_reddit_status_show = get_option('quicksharing_button_reddit_status');
	
	if ($quicksharing_button_reddit_status_show == 'an')
		{
		$quicksharing_button_reddit_an = "<input name='quicksharing_button_reddit_status' type='radio' value='an' checked>";
		$quicksharing_button_reddit_aus = "<input name='quicksharing_button_reddit_status' type='radio' value='aus'>";
		}
	else
		{
		$quicksharing_button_reddit_an = "<input name='quicksharing_button_reddit_status' type='radio' value='an'>";
		$quicksharing_button_reddit_aus = "<input name='quicksharing_button_reddit_status' type='radio' value='aus' checked>";
		}
	
	echo "<form method='post'>";
	echo "<table width='200' border='0'>";
	echo "<tr>";
	echo "<td width='20'>$quicksharing_button_reddit_aus</td>";
	echo "<td width='180'>Share Funktion aus / off</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>$quicksharing_button_reddit_an</td>";
	echo "<td>Share Funktion ein / on</td>";
	echo "</tr>";
	echo "</table>";
	echo "<input type='submit' style='height: 25px; width: 250px' name='submit_reddit_status' value='Sichern / Save'>";
	wp_nonce_field( 'nonce_reddit_field1', 'nonce_reddit1' );
	echo "</form><br /><br />";
	
/* ---------------------------------- whatsappp ---------------------------------- */
  $quicksharing_button_whatsappp_show = get_option('quicksharing_button_whatsappp');

  
  echo "<h2>WhatsApp Share Funktion</h2>";
  echo '<form method="post">';
  echo '<label for="quicksharing_button_whatsappp"><strong>Eigener Button / Custom Button (http://www.deinedomain.ch/whatsappp.jpg)</strong><br />';
  echo '<input type="text"  name="quicksharing_button_whatsappp" size="80" maxlength="80" value="' . $quicksharing_button_whatsappp_show . '">';
  echo '</label><br /><p></p>';
  echo '<input type="submit" style="height: 25px; width: 250px" name="submit_whatsappp_button" value="Sichern / Save">';
  wp_nonce_field( 'nonce_whatsappp_field0', 'nonce_whatsappp0' );
echo '</form><br />';
	//reset bild
  echo '<form method="post">';
  echo '<input type="submit" style="height: 25px; width: 450px" name="quickshare_button_whatsappp_reset" value="Zurücksetzen / Reset">';
  wp_nonce_field( 'nonce_whatsappp_field2', 'nonce_whatsappp2' );
  echo '</form><br />';
  
	$quicksharing_button_whatsappp_status_show = get_option('quicksharing_button_whatsappp_status');
	
	if ($quicksharing_button_whatsappp_status_show == 'an')
		{
		$quicksharing_button_whatsappp_an = "<input name='quicksharing_button_whatsappp_status' type='radio' value='an' checked>";
		$quicksharing_button_whatsappp_aus = "<input name='quicksharing_button_whatsappp_status' type='radio' value='aus'>";
		}
	else
		{
		$quicksharing_button_whatsappp_an = "<input name='quicksharing_button_whatsappp_status' type='radio' value='an'>";
		$quicksharing_button_whatsappp_aus = "<input name='quicksharing_button_whatsappp_status' type='radio' value='aus' checked>";
		}
	
	echo "<form method='post'>";
	echo "<table width='200' border='0'>";
	echo "<tr>";
	echo "<td width='20'>$quicksharing_button_whatsappp_aus</td>";
	echo "<td width='180'>Share Funktion aus / off</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>$quicksharing_button_whatsappp_an</td>";
	echo "<td>Share Funktion ein / on</td>";
	echo "</tr>";
	echo "</table>";
	echo "<input type='submit' style='height: 25px; width: 250px' name='submit_whatsappp_status' value='Sichern / Save'>";
	wp_nonce_field( 'nonce_whatsappp_field1', 'nonce_whatsappp1' );
	echo "</form><br /><br />";
	
/* ---------------------------------- pinterest ---------------------------------- */
  $quicksharing_button_pinterest_show = get_option('quicksharing_button_pinterest');

  
  echo "<h2>Pinterest Share Funktion</h2>";
  echo '<form method="post">';
  echo '<label for="quicksharing_button_pinterest"><strong>Eigener Button / Custom Button (http://www.deinedomain.ch/pinterest.jpg)</strong><br />';
  echo '<input type="text"  name="quicksharing_button_pinterest" size="80" maxlength="80" value="' . $quicksharing_button_pinterest_show . '">';
  echo '</label><br /><p></p>';
  echo '<input type="submit" style="height: 25px; width: 250px" name="submit_pinterest_button" value="Sichern / Save">';
  wp_nonce_field( 'nonce_pinterest_field0', 'nonce_pinterest0' );
echo '</form><br />';
	//reset bild
  echo '<form method="post">';
  echo '<input type="submit" style="height: 25px; width: 450px" name="quickshare_button_pinterest_reset" value="Zurücksetzen / Reset">';
  wp_nonce_field( 'nonce_pinterest_field2', 'nonce_pinterest2' );
  echo '</form><br />';
  
	$quicksharing_button_pinterest_status_show = get_option('quicksharing_button_pinterest_status');
	
	if ($quicksharing_button_pinterest_status_show == 'an')
		{
		$quicksharing_button_pinterest_an = "<input name='quicksharing_button_pinterest_status' type='radio' value='an' checked>";
		$quicksharing_button_pinterest_aus = "<input name='quicksharing_button_pinterest_status' type='radio' value='aus'>";
		}
	else
		{
		$quicksharing_button_pinterest_an = "<input name='quicksharing_button_pinterest_status' type='radio' value='an'>";
		$quicksharing_button_pinterest_aus = "<input name='quicksharing_button_pinterest_status' type='radio' value='aus' checked>";
		}
	
	echo "<form method='post'>";
	echo "<table width='200' border='0'>";
	echo "<tr>";
	echo "<td width='20'>$quicksharing_button_pinterest_aus</td>";
	echo "<td width='180'>Share Funktion aus / off</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>$quicksharing_button_pinterest_an</td>";
	echo "<td>Share Funktion ein / on</td>";
	echo "</tr>";
	echo "</table>";
	echo "<input type='submit' style='height: 25px; width: 250px' name='submit_pinterest_status' value='Sichern / Save'>";
	wp_nonce_field( 'nonce_pinterest_field1', 'nonce_pinterest1' );
	echo "</form><br /><br />";
	
	
	/* ---------------------------------- mastodon ---------------------------------- */
	$quicksharing_button_mastodon_show = get_option('quicksharing_button_mastodon');

  
	echo "<h2>mastodon Share Funktion</h2>";
	echo '<form method="post">';
	echo '<label for="quicksharing_button_mastodon"><strong>Eigener Button / Custom Button (http://www.deinedomain.ch/mastodon.jpg)</strong><br />';
	echo '<input type="text"  name="quicksharing_button_mastodon" size="80" maxlength="80" value="' . $quicksharing_button_mastodon_show . '">';
	echo '</label><br /><p></p>';
	echo '<input type="submit" style="height: 25px; width: 250px" name="submit_mastodon_button" value="Sichern / Save">';
	wp_nonce_field( 'nonce_mastodon_field0', 'nonce_mastodon0' );
  echo '</form><br />';
	  //reset bild
	echo '<form method="post">';
	echo '<input type="submit" style="height: 25px; width: 450px" name="quickshare_button_mastodon_reset" value="Zurücksetzen / Reset">';
	wp_nonce_field( 'nonce_mastodon_field2', 'nonce_mastodon2' );
	echo '</form><br />';

	//mastodon api
	$quicksharing_api_mastodon_show = get_option('quicksharing_api_mastodon');

	echo '<form method="post">';
	echo '<label for="quicksharing_api_mastodon"><strong>API Token</strong><br />';
	echo '<input type="text"  name="quicksharing_api_mastodon" size="50" maxlength="50" value="' . $quicksharing_api_mastodon_show . '">';
	echo '</label><br /><p></p>';
	echo '<input type="submit" style="height: 25px; width: 250px" name="submit_mastodon_api" value="Sichern / Save">';
	wp_nonce_field( 'nonce_mastodonapi_field0', 'nonce_mastodonapi0' );
  echo '</form><br />';
	  //reset api
	echo '<form method="post">';
	echo '<input type="submit" style="height: 25px; width: 450px" name="quickshare_api_mastodon_reset" value="Zurücksetzen / Reset">';
	wp_nonce_field( 'nonce_mastodonapi_field2', 'nonce_mastodonapi2' );
	echo '</form><br />';




	
	  $quicksharing_button_mastodon_status_show = get_option('quicksharing_button_mastodon_status');
	  
	  if ($quicksharing_button_mastodon_status_show == 'an')
		  {
		  $quicksharing_button_mastodon_an = "<input name='quicksharing_button_mastodon_status' type='radio' value='an' checked>";
		  $quicksharing_button_mastodon_aus = "<input name='quicksharing_button_mastodon_status' type='radio' value='aus'>";
		  }
	  else
		  {
		  $quicksharing_button_mastodon_an = "<input name='quicksharing_button_mastodon_status' type='radio' value='an'>";
		  $quicksharing_button_mastodon_aus = "<input name='quicksharing_button_mastodon_status' type='radio' value='aus' checked>";
		  }
	  
	  echo "<form method='post'>";
	  echo "<table width='200' border='0'>";
	  echo "<tr>";
	  echo "<td width='20'>$quicksharing_button_mastodon_aus</td>";
	  echo "<td width='180'>Share Funktion aus / off</td>";
	  echo "</tr>";
	  echo "<tr>";
	  echo "<td>$quicksharing_button_mastodon_an</td>";
	  echo "<td>Share Funktion ein / on</td>";
	  echo "</tr>";
	  echo "</table>";
	  echo "<input type='submit' style='height: 25px; width: 250px' name='submit_mastodon_status' value='Sichern / Save'>";
	  wp_nonce_field( 'nonce_mastodon_field1', 'nonce_mastodon1' );
	  echo "</form><br /><br />";
	  
	  
	
//alt: beforefp: neu quickwhatsapp
  
  ?>
  </div>
  <hr />
  
  <div class="wrap">
  
  
  <h2>Infos</h2>
  <p>Dies ist das Quick Sharing Plugin - programmiert von Eric-Oliver M&auml;chler von <a href="http://www.chefblogger.me" target="_blank">www.chefblogger.me</a></p>

  
  </div>
  <?php
 }
?>