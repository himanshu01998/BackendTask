<?php

   if( $_GET["fname"] || $_GET["lname"] ) {
      echo "Your First Name is ". $_GET['fname']. "<br>";
      echo "Your Last Name is ". $_GET['lname']. "<br>";
   }

?>
