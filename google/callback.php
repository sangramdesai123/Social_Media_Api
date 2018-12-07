<?php
	require_once('conn.php');
	if (isset($_SESSION['accessToken'])) {
		$client->setAccessToken($_SESSION['accessToken']);
	}
	else if (isset($_GET['code'])) {
    	$token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    	$_SESSION['accessToken']=$token;
	}
	else{
		header("Location:index.php");
	}
	$oauth=new Google_Service_Oauth2($client);
	$user=$oauth->userinfo->get();

	$userData['name'] =$user->name;
	$userData['id'] =$user->id;
	$userData['email'] =$user->email;
	$userData['gender'] =$user->gender;
	$userData['link'] =$user->link;
	$userData['picture'] =$user->picture;
	//save data in user session
	$_SESSION['user']=$userData;
	
	header("Location:userinfo.php");

?>