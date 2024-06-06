<?php
session_start();
$konek=mysqli_connect("localhost", "root", "", "coba3");

include_once 'google-client/Google_Client.php';
include_once 'google-client/contrib/Google_Oauth2Service.php';
$client_id = 'Change_To_Client_ID';
$client_secret = 'Change_To_Client_Secret'; 
$redirect_url = 'http://localhost/GoogleLogin/g-callback.php'; 

$gClient = new Google_Client();
$gClient->setClientId($client_id);
$gClient->setClientSecret($client_secret);
$gClient->setRedirectUri($redirect_url);

$google_oauthv2 = new Google_Oauth2Service($gClient);
?>

