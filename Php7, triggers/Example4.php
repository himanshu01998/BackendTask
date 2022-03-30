<?php
$user = $_GET['username'] ?? 'Not passed 1';
print($user);
print("<br>");

$user = isset($_GET['username']) ? $_GET['username'] : 'Not passed 2';
print($user);
print("<br>");

$user = $_GET['username'] ?? $_POST['username'] ?? 'Not passed 3';
print($user);
?>