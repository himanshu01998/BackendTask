<?php

error_reporting(0);
	$a=$_POST['username'];
	$b=$_POST['password'];
	session_start();
	$_SESSION["user"]=$a;
	header('Location:Example_5_Get.php');
	
?>
