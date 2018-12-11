<?php
	session_start();
	require_once 'Facebook/autoload.php';

	$apiid='XXXXXXXXXXXXXXXX';
	$appsecret='XXXXXXXXXXXXXXXXXXXXXXX';
	$permissions = ['email']; // Optional permissions
	$callbackurl ='http://localhost/facebookS/callback.php';

	$fb = new Facebook\Facebook([
  'app_id' => $apiid, // Replace {app-id} with your app id
  'app_secret' => $appsecret,
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$loginUrl = $helper->getLoginUrl($callbackurl, $permissions);

?>