<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <form class="m-5 mx-auto w-50" method="post">
            <div class="mb-5 mt-5">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>

            <input class="form-check-input" type="checkbox" name="check">
            <label class="form-check-label mx-3" for="flexCheckDefault">
            Remember Me
            </label>
            <br> <br>

            <button type="submit" name="login" class="btn btn-success">Login</button>
            <button type="submit" name="signup" class="btn btn-success">Signup</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    
</body>
</html>

<?php

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if(!empty($_POST["check"])) {
        setcookie ("username",$email);
        setcookie ("password",$pass);
    } 
    else {
        setcookie("username","");
        setcookie("password","");
    }

    include "DBconnection.php";
    $sql = "SELECT email, password FROM `student_details` WHERE email = '$email' and password = '$pass'";

    $query = mysqli_query($conn, $sql) or die("Error in Query");
    $row = mysqli_num_rows($query);

    if($row > 0){
        session_start();
        $_SESSION['email'] = $email;
        header('Location:dashboard.php');
    }
    else{
        echo "<script>
        alert('Login unsuccesful')
    </script>";
    }
}

else if(isset($_POST['signup'])){
    header('Location:signup.php');
}

mysqli_close($conn);

?>