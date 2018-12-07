<?php
	require_once('conn.php');
	$aurl= $client->createAuthUrl();
	header("Location:".$aurl);

?>