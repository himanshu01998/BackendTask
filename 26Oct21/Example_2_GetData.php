<?php

session_start();
echo "Hello User ".$_SESSION['user'];
echo "<br>Your Age  ".$_SESSION['age'];

?>