<?php
session_start();
$session_email = $_SESSION['email'];
if ($_SESSION['email'] == '') {
    header('Location:sellerlogin.php');
} else {
include "DBconnection.php";
$id = $_SESSION['seller_id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Site Metas -->
        <link rel="icon" href="images/fevicon.png" type="image/gif" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="stylesheet" href="style.css">

        <title>Add Products</title>


        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

        <!-- fonts style -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet"> <!-- range slider -->

        <!-- font awesome style -->
        <link href="css/font-awesome.min.css" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet" />
        <!-- responsive style -->
        <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>
<div class="hero_area">
            <!-- header section strats -->
            <header class="header_section">
                <div class="header_bottom">
                    <div class="container-fluid">
                        <nav class="navbar navbar-expand-lg custom_nav-container ">
                            <a class="navbar-brand" href="ind.php">
                                <span>
                                    Minics
                                </span>
                            </a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class=""> </span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ">
                                    <li class="nav-item">
                                        <a class="nav-link" href="addprod.php?seller_id=<?php echo $id;?>">Add Products <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="sellerdashboard.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="logout.php">Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>
            <!-- end header section -->


    <div class="container">
    <h2 class="mt-5 mx-auto w-25">Add Products</h2>
        <form method="post" enctype="multipart/form-data">
            <div class="row mt-5">
                <div class="col">
                    <div class="mb-3">
                        <label for="prod_name" class="form-label">Product Name</label>
                        <input type="text" class="form-control" name="prod_name" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="prod_cat" class="form-label">Product Category</label><br>
                        <select name="cat" class="categories w-100 p-2">
                            <option selected>Select....</option>
                            <?php
                            $sqlcat = "SELECT * FROM `category`";
                            $querycat = mysqli_query($conn, $sqlcat);
                            while ($rowcat = mysqli_fetch_array($querycat)) {
                                $cat_name = $rowcat['category_name'];
                                $cat_table = $rowcat['category_table'];

                                echo "<option value=$cat_table>$cat_name</option>";
                            }
                            ?>
                           </select>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <div class="mb-3">
                        <label for="prod_subcat" class="form-label">Product Sub-Category</label>
                        <input type="text" class="form-control" name="prod_subcat" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="prod_price" class="form-label">Product Price</label>
                        <input type="text" class="form-control" name="prod_price" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="prod_color" class="form-label">Product Color</label>
                        <input type="text" class="form-control" name="prod_color" aria-describedby="emailHelp">
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <div class="mb-3">
                        <label for="prod_desc" class="form-label">Product Description</label>
                        <input type="text" class="form-control" name="prod_desc" aria-describedby="emailHelp">
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <div class="mb-3">
                        <label for="prod_img" class="form-label">Product Image</label>
                        <input type="file" class="form-control h-100" name="prod_img">
                    </div>
                </div>
                <div class="col">

                </div>
            </div>

            <div class="update-btn mt-4">
                <input type="submit" name="add" value="Add">
            </div>
        </form>
        <?php
        $seller_id = $_GET['seller_id'];
        if(isset($_POST['add'])){
            $product_name = mysqli_real_escape_string($conn,$_POST['prod_name']);
            $product_category = mysqli_real_escape_string($conn,$_POST['cat']);
            $product_subcategory = mysqli_real_escape_string($conn,$_POST['prod_subcat']);
            $product_price = mysqli_real_escape_string($conn,$_POST['prod_price']);
            $product_color = mysqli_real_escape_string($conn,$_POST['prod_color']);
            $product_desc = mysqli_real_escape_string($conn,$_POST['prod_desc']);
            $filepath = "images/productImages/" . $_FILES["prod_img"]["name"];

            $sql = "INSERT INTO $product_category (`product_id`, `product_name`, `product_sub_category`, `product_price`, `product_color`, `product_desc`, `product_img1`, `seller_id`) VALUES (NULL, '$product_name', '$product_subcategory', '$product_price', '$product_color', '$product_desc', '$filepath', '$seller_id');";
            echo $sql;

            $query =mysqli_query($conn, $sql);
            if($query) 
            {
                move_uploaded_file($_FILES["prod_img"]["tmp_name"], $filepath);
                header('Location:sellerdashboard.php');
            } 
            else 
            {
                echo "Error !!";
            }

        }
        ?>
    </div>
</div>
<br><br>

<!-- info section -->
<section class="info_section ">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="info_contact">
                    <h5>
                        <a href="ind.php" class="navbar-brand">
                            <span>
                                Minics
                            </span>
                        </a>
                    </h5>
                    <p>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Address
                    </p>
                    <p>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        +01 1234567890
                    </p>
                    <p>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        demo@gmail.com
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info_info">
                    <h5>
                        Information
                    </h5>
                    <p>
                        Eligendi sunt, provident, debitis nemo, facilis cupiditate velit libero dolorum aperiam enim nulla iste maxime corrupti ad illo libero minus.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info_links">
                    <h5>
                        Useful Link
                    </h5>
                    <ul>
                        <li>
                            <a href="ind.php">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="about.php">
                                About
                            </a>
                        </li>
                        <li>
                            <a href="product.php">
                                Products
                            </a>
                        </li>
                        <li>
                            <a href="why.php">
                                Why Us
                            </a>
                        </li>
                        <li>
                            <a href="testimonial.php">
                                Testimonial
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info_form ">
                    <h5>
                        Newsletter
                    </h5>
                    <form action="">
                        <input type="email" placeholder="Enter your email">
                        <button>
                            Subscribe
                        </button>
                    </form>
                    <div class="social_box">
                        <a href="">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-youtube" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end info_section -->


<!-- footer section -->
<footer class="footer_section">
    <div class="container">
        <p>
            &copy; <span id="displayYear"></span> All Rights Reserved By
            <a href="https://html.design/">Free Html Templates</a>
        </p>
    </div>
</footer>
<!-- footer section -->

<!-- jQery -->
<script src="js/jquery-3.4.1.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>


</body>

</html>

<?php
mysqli_close($conn);
}
?>