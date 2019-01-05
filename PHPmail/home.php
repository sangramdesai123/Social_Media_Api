<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	 <form method="post" action="verify.php">
	 <label>Name</label>
	  <input type="text" name="name"><br><br>
	  <label>Email</label>
	  <input type="text" name="email"><br><br>
	  <label>Passw</label>
	  <input type="password" name="pass"><br><br>
	  <div class="g-recaptcha" data-sitekey="6LcflIYUAAAAAD9Ypzk_GS3Blxki0e42CMDSXHDi"></div><br>
	  <input type="submit" name="register" Value="register">
	 </form>
</body>
</html>