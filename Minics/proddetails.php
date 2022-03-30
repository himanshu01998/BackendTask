<?php
include "DBconnection.php";
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Minics</title>


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
    <link rel="stylesheet" href="style.css">

</head>

<body class="sub_page">

    <div class="hero_area">
        <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="top_nav_container">
            <div class="contact_nav">
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call : +01 123455678990
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  Email : demo@gmail.com
                </span>
              </a>
            </div>
            <form method="POST">
            <from class="search_form">
              <input type="text" class="form-control" name="search" placeholder="Search here...">
              <button type="submit" name="searchbtn">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </from>
              <?php
                if(isset($_POST['searchbtn'])){
                  $search = $_POST['search'];
                  header("Location:search.php?value=$search");
                }
              ?>
              </form>
            <div class="user_option_box">
              <a href="sellerlogin.php" class="account-link">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>
                  My Account
                </span>
              </a>
              <a href="cart.php" class="cart-link">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <span>
                  Cart
                </span>
              </a>
            </div>
          </div>

        </div>
      </div>
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
                  <a class="nav-link" href="ind.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="product.php">Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="why.php">Why Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="testimonial.php">Testimonial</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
        <!-- end header section -->
    </div>

    <?php
    $prod_id = $_GET['prod_id'];
    $cat = $_GET['category'];
    $sql = "SELECT * FROM $cat where product_id = $prod_id";
    $query = mysqli_query($conn, $sql);
    ?>

    <div class="container p-5">
        <div class="row">
            <?php
            $row = mysqli_fetch_array($query);
            $product_img = $row['product_img1'];
            $product_name = $row['product_name'];
            $product_subcat = $row['product_sub_category'];
            $product_price = $row['product_price'];
            $product_color = $row['product_color'];
            $product_desc = $row['product_desc'];
            ?>
            <div class="col">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner text-center">
                        <div class="carousel-item active">
                            <img src="<?php echo $product_img; ?>" height="400" width="auto">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo $product_img; ?>" height="400" width="auto">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo $product_img; ?>" height="400" width="auto">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col">
                <h3><?php echo $product_name; ?></h3>
                <h6><?php echo $product_subcat; ?></h6>
                <h5>Price:  &#8377; <?php echo $product_price; ?></h5>
                <br>
                <h6>Description: <br><?php echo $product_desc; ?></h6>
                <h6>Colour: <?php echo $product_color; ?></h6>

                <div class="btn-grp  mt-5">
                    <a class='btn btn-dark mx-1 w-25' href='cart.php?prod_id=<?php echo $prod_id ?>&category=<?php echo $cat ?>'>Buy Now</a>
                    <a class='btn btn-dark text-white w-25' href="addtocart.php?prod_id=<?php echo $prod_id ?>&category=<?php echo $cat ?>">Add to Cart</a>
                </div>
            </div>

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
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>

<?php
mysqli_close($conn);
?>