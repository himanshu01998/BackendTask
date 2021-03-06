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
    <html>

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

        <title>Seller</title>


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
            <table class="table mt-5">
            <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Product Image</th>
              <th scope="col">Product Name</th>
              <th scope="col">Product Description</th>
              <th scope="col">Product Price</th>
              <th scope="col">Is Active</th>
              <th scope="col">Edit</th>
              <th scope="col">Is Active</th>
            </tr>
          </thead>
          <tbody>
            <?php

            $category = $_GET['category'];
            $_SESSION['cat'] = $category;
            $seller_id = $_SESSION['seller_id'];
            $sql = "SELECT * FROM $category WHERE seller_id = '$seller_id';";
            $query = mysqli_query($conn, $sql);
            $id = 1;

            while ($row = mysqli_fetch_array($query)) { 
              $product_id = $row['product_id'];  
              $product_img = $row['product_img1'];
              $product_name = $row['product_name'];
              $product_desc = $row['product_desc'];
              $product_price = $row['product_price'];
              $is_active = $row['is_active'];

              echo "<tr>";
              echo "<td>" . $id . "</td>";
              echo "<td><img src=".$product_img." height=150 width=auto> </td>";
              echo "<td>" . $product_name . "</td>";
              echo "<td>" . $product_desc . "</td>";
              echo "<td>&#8377; ".number_format($product_price). "</td>";
              echo "<td>" . $is_active . "</td>";
              echo "<td><a style='text-decoration: none; box-shadow: 2px 2px 10px rgb(192, 188, 188, 0.5);' href=prodedit.php?prod_id=$product_id> Edit </a></td>";
              echo "<td><a style='text-decoration: none; box-shadow: 2px 2px 10px rgb(192, 188, 188, 0.5);' href=proddelete.php?prod_id=$product_id> Change </a></td>";
              echo "</tr>";

              $id += 1;
            }

            ?>
            </tbody>
            </table>
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