<?php

if(!empty($_POST["check"])) {
	setcookie ("username",$_POST["inp1"],time()+ 3600);
	setcookie ("password",$_POST["inp2"],time()+ 3600);
	echo "Cookies Set Successfuly";
} 
else {
	setcookie("username","");
	setcookie("password","");
	echo "Cookies Not Set";
}

echo "<br>".$_COOKIE['username'];
echo "<br>".$_COOKIE['password'];

?>
