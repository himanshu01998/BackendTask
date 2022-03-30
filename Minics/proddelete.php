<?php
include "DBconnection.php";
session_start();
$prod_id = $_GET['prod_id'];
$cat = $_SESSION['cat'];

$sqlf = "SELECT * FROM $cat WHERE `product_id` = $prod_id";
$queryf = mysqli_query($conn, $sqlf);
$row = mysqli_fetch_array($queryf);
$active = $row['is_active'];

if($active == 'True'){
    $sql = "UPDATE $cat SET `is_active` = 'False' WHERE $cat.`product_id` = $prod_id";
}
else{
    $sql = "UPDATE $cat SET `is_active` = 'True' WHERE $cat.`product_id` = $prod_id";
}

$query = mysqli_query($conn, $sql);
if($query){
    header("Location:sellerproduct.php?category=$cat");
}
else{
    echo "Error !!!";
}
?>