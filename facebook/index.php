<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login With PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<h1>hello</h1>
<div class="container">
	<?php
		echo '<a class="btn  btn-primary" href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
	?>
</div>
</body>
</html>