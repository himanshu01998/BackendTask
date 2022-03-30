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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <title>Seller Login</title>
</head>

<body>
    <div class="container">
        <h2 class="mt-5 mx-auto w-25">Seller Login</h2>
        <form class="m-5 mx-auto w-50" method="post">
            <div class="mb-5 mt-5">
                <label for="email" class="form-label">Seller Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>

            <div class="update-btn mt-5">
                <input type="submit" name="login" value="Login">
                <input type="submit" name="signup" value="Signup">
            </div>
        </form>
        <?php
        if(isset($_POST['login'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM `seller` WHERE seller_email = '$email' AND seller_password = '$password';";
            $query = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($query);

            if($row > 0){
                session_start();
                $_SESSION['email'] = $email;
                header('Location:sellerdashboard.php');
            }
            else{
                echo "<script>
                alert('Login unsuccesful')
                </script>";
            }
        }
        elseif(isset($_POST['signup'])){
            header('Location:sellersignup.php');
        }
        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>

<?php
  mysqli_close($conn);
?>