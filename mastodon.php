<?php 

function jwt_request($token, $post) {


    header('Content-Type: application/json'); // Specify the type of data
    $ch = curl_init('https://mastodon.digitalsuccess.dev/api/v1/statuses'); // Initialise cURL
    $post = json_encode($post); // Encode the data array into a JSON string
    $authorization = "Authorization: Bearer ".$token; // Prepare the authorisation token
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization )); // Inject the token into the header
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, 1); // Specify the request method as POST
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post); // Set the posted fields
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // This will follow any redirects
    $result = curl_exec($ch); // Execute the cURL statement
    curl_close($ch); // Close the cURL connection
    return json_decode($result); // Return the received data

 }

 //$token = "7o_i5V0BA2OwKBedC9aq_eW-JGzimbkZeGoZIBWIgmA"; // Get your token from a cookie or database
 //$msg ="ich bin ein tröööööt";
 $msg = $_REQUEST['msg'];
 $token = $_REQUEST['tk'];
 
 $post = array('status'=> $msg); // Array of data with a trigger
 $request = jwt_request($token,$post); // Send or retrieve data

 echo "stat: $result";
 ?>