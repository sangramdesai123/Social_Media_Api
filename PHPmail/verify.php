<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';


$code=substr(md5(mt_rand()),0,15);
echo "mailer code ".$code."<br>";
 if(isset($_POST['g-recaptcha-response'])&& $_POST['g-recaptcha-response']){
        var_dump($_POST);
        $secret = "6LcflIYUAAAAAEolXs9e0JsXkE2QNJwDv0ZvwoB9";
        $ip = $_SERVER['REMOTE_ADDR'];
        $captcha = $_POST['g-recaptcha-response'];
        $rsp  = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip$ip");
        var_dump($rsp);
        $arr = json_decode($rsp,TRUE);
        if($arr['success']){
            echo 'Done';
        }else{
            echo 'Spam';
        }
        
    }﻿
?>
<?php

$con = mysqli_connect("localhost","root","","test");

if (isset($_GET['link'])) {
	$link=$_GET['link'];
	$email=$_GET['email'];
	//from gmail these page will be open check link is equal to database and delet entry
	$sql="SELECT * FROM `verify` WHERE email='$email'";
	$result=mysqli_query($con,$sql);
	while($row=mysqli_fetch_assoc($result)){
		if($row['link']=$link){
			$name=$row['name'];
			$email=$row['email'];
			$pass=$row['pass'];
			echo "Sucessfl login from gmail";
			echo $name."<br>";
			echo $email."<br>";
			echo $pass."<br>";
			echo $link."<br>";
		}
	}
	$sql="INSERT INTO `log`(`name`, `email`, `pass`) VALUES ('$name','$email','$pass')";
	mysqli_query($con,$sql);
}
else{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$link=substr(md5(mt_rand()),0,15);

	//add user to database to save the link 
	$sql="INSERT INTO `verify`(`name`, `email`, `pass`, `link`) VALUES ('$name','$email','$pass','$link')";
	mysqli_query($con,$sql);


	echo "string<br>";
	echo $name."<br>";
	echo $email."<br>";
	echo $pass."<br>";
	echo $link."<br>";

	/*send the mail to user*/

	$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
	try {
	    $mail->SMTPOptions = array(
	    'ssl' => array(
	        'verify_peer' => false,
	        'verify_peer_name' => false,
	        'allow_self_signed' => true
	    )
	);
	    //Server settings
	    $mail->SMTPDebug = 3;                                 // Enable verbose debug output
	    $mail->isSMTP();                                      // Set mailer to use SMTP
	    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	    $mail->SMTPAuth = true;                               // Enable SMTP authentication
	    $mail->Username = 'sangramdesai1999@gmail.com';                 // SMTP username
	    $mail->Password = '@#sang123';                           // SMTP password
	    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	    $mail->Port = 587;                                    // TCP port to connect to

	    //Recipients
	    $mail->setFrom('sangramdesai1999@gmail.com', 'Sangram');
	    $mail->addAddress($email, $name);     // Add a recipient
	   

	    //Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = 'Activation captcha Code For sangram.com';
	    $mail->Body    = "Your Activation Code is http://localhost/cap/verify.php?link=".$link."&email=".$email;
	    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	    $mail->send();
	    echo 'Message has been sent';
	} catch (Exception $e) {
	    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	}

	/*send the mail to user*/
}


?>