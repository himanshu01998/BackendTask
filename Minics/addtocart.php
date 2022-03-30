<?php
    include "DBconnection.php";
    $prod_id = $_GET['prod_id'];
    $cat = $_GET['category'];
    $product_qty = 1;

    $cartsql = "SELECT * FROM `cart`";
    $cartquery = mysqli_query($conn, $cartsql);
    while($row = mysqli_fetch_array($cartquery)){
        $product_id = $row['product_id'];
        $product_cat = $row['product_cat'];
        $product_qty = $row['product_qty'];

        if($prod_id == $product_id and $cat == $product_cat){
            if($product_qty == 0){
                $product_qty = 1;
            }
            else{
                $product_qty += 1;
            }
        }
        else{
            $product_qty = 1;
        }
    }

    $sql = "INSERT INTO cart (product_id, product_cat, product_qty) VALUES ($prod_id, '$cat', $product_qty)";
    echo $sql;
    $query = mysqli_query($conn, $sql);
    if($query){
        echo "Added to cart";
    }
    else{
        echo "Error";
    }
?>