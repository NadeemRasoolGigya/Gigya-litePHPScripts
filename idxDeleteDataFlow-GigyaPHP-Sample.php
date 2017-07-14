<?php
// Gigya PHP - idx.deleteDataflow
// Written by Nadeem Rasool
// For this to work, you must be running in SSL mode and GSRequest must have useHTTPS = True
include_once "GSSDK.php";

// Define the API-Key and Secret key (the keys can be obtained from your site setup page on Gigya's website).
$apiKey = "xxxx";  // Site API key where you have Identity
$userkey = "xxxx"; // You can find this on your Gigya Console
$secretKey = "xxxx"; // This must be the secretkey for your userkey, NOT PARTNERID secret key

$method = "idx.deleteDataflow";

// Request
$request = new GSRequest($apiKey,$secretKey,$method,null, true);
$request->setParam("userKey",$userkey); 
$request->setParam("id", "xxxx");  // This is the IdentitySync JobID you can find on the console

// Set your domain name to which the API key is residing
$request->setAPIDomain("xxx.gigya.com"); 

//Sending the request
$response = $request->send();

// Step 4 - handling the request's response.
if($response->getErrorCode()==0)

{    // SUCCESS! response status = OK
     echo $response;
     echo var_dump(json_decode($response, true));

}
else

{  // Error
     echo ("Got error: " . $response->getErrorMessage());
     error_log($response->getLog());
}

?>
