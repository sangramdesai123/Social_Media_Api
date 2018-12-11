<?php
require_once 'config.php';
if (!session_id()) 
	session_start();
try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (! isset($accessToken)) {
  if ($helper->getError()) {
    header('HTTP/1.0 401 Unauthorized');
    echo "Error: " . $helper->getError() . "\n";
    echo "Error Code: " . $helper->getErrorCode() . "\n";
    echo "Error Reason: " . $helper->getErrorReason() . "\n";
    echo "Error Description: " . $helper->getErrorDescription() . "\n";
  } else {
    header('HTTP/1.0 400 Bad Request');
    echo 'Bad request';
  }
  exit;
}

// Logged in
//echo '<h3>Access Token</h3>';
//var_dump($accessToken->getValue());

try{
	$responce=$fb->get('/me?fields=id,name,email,first_name,last_name,picture,gender',$accessToken->getValue());
}
catch(Facebook\Exceptions\FacebookResponseException $e){
	echo "Graph error: ".$e->getMessage();
}
catch(Facebook\Exceptions\FacebookSDKException $e){
	echo "SDK error: ".$e->getMessage();
}
$fbUserData= $responce->getGraphUser()->asArray();
echo '<pre>';
print_r($fbUserData);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
	<h1>Login Sucessfuly !</h1>
	<h4><b>User Name </b>: <?php echo $fbUserData['name'];?></h4>
	<h4><b>User Email </b>: <?php echo $fbUserData['email'];?></h4>
	<h4><b><img src="<?php echo $fbUserData['picture']['url'];?>"></h4>
	<h4><b>User Id </b> : <?php echo $fbUserData['id'];?></h4>
</div>
</body>
</html>