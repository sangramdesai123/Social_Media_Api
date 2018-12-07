<?php
	session_start();
	print_r($_SESSION['user']); 
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
	<h4><b>User Name </b>: <?php echo $_SESSION['user']['name'];?></h4>
	<h4><b>User Email </b>: <?php echo $_SESSION['user']['email'];?></h4>
	<h4><b>Google Link</b>:<?php echo $_SESSION['user']['link'];?></h4>
	<h4><b>User Id </b> : <?php echo $_SESSION['user']['id'];?></h4>
</div>
</body>
</html>
