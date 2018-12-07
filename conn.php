<?php
	require_once 'googleApi/vendor/autoload.php';
	session_start();
	$client = new Google_Client();
	$client->setAuthConfig('client_credentials.json');
	
	$client->addScope([Google_Service_Oauth2::PLUS_LOGIN, Google_Service_Oauth2::USERINFO_EMAIL]);

	//ADD REDIRECTURL AS SPECIFIED IN OAUTH APP 
	$client->setRedirectUri("http://localhost/google/callback.php");
?>