<?php
include "DBconnection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Seller Signup</title>
</head>

<body>
    <div class="container">
        <h2 class="mt-5 mx-auto w-25">Seller Signup</h2>
        <form method="post">
            <div class="row mt-3">
            <div class="row mt-3">
                <div class="col">
                    <div class="mb-3">
                        <label for="seller_name" class="form-label">Seller Name</label>
                        <input type="text" class="form-control" name="seller_name" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="seller_email" class="form-label">Seller Email</label>
                        <input type="email" class="form-control" name="seller_email" aria-describedby="emailHelp">
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <div class="mb-3">
                        <label for="seller_password" class="form-label">Seller Password</label>
                        <input type="password" class="form-control" name="seller_password" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="seller_repassword" class="form-label">Re-Enter Password</label>
                        <input type="password" class="form-control" name="seller_repassword" aria-describedby="emailHelp">
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <div class="mb-3">
                        <label for="seller_gstin" class="form-label">Seller GSTIN</label>
                        <input type="text" class="form-control" name="seller_gstin" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col">
                    
                </div>
            </div>

            <div class="update-btn mt-4">
                <input type="submit" name="signup" value="Signup">
            </div>
        </form>
        <?php
        if(isset($_POST['signup'])){
            $seller_name = $_POST['seller_name'];
            $seller_email = $_POST['seller_email'];
            $seller_password = $_POST['seller_password'];
            $seller_repassword = $_POST['seller_repassword'];
            $seller_gstin = $_POST['seller_gstin'];

            if($seller_password != $seller_repassword){
                echo "<script>
                alert('Password Missmatch')
                </script>";
            }
            else{
                $sql = "INSERT INTO `seller` (`seller_id`, `seller_name`, `seller_email`, `seller_password`, `seller_gstin`) VALUES (NULL, '$seller_name', '$seller_email', '$seller_password', '$seller_gstin');";
                $query = mysqli_query($conn, $sql);
                if($query){
                    header('Location:sellerlogin.php');
                }
                else{
                    echo "<script>
                    alert('Signup Unsuccessful')
                    </script>";
                }
            }
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>