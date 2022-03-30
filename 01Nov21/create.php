<?php
session_start();
$session_email = $_SESSION['email'];
if ($_SESSION['email'] == '') {
    header('Location:login.php');
} else {

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
        <title>Create New Entry</title>
    </head>

    <body>
        <form method="post">
            <nav class="navbar navbar-expand-lg navbar-info bg-info">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav mx-auto">
                            <a class="nav-link mx-3" aria-current="page" href="create.php">Create New Entry</a>
                            <input type="submit" name="logout" value="Logout">
                            <?php
                            if (isset($_POST['logout'])) {
                                header('Location:logout.php');
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="container">
                <?php
                $sql5 = "SELECT name FROM student_details where email='$session_email';";
                $query5 = mysqli_query($conn, $sql5) or die("Error in Query");
                $row2 = mysqli_fetch_array($query5);
                echo "<br><h2> Hello, ", $row2['name'], "</h2>";
                ?>
                <form method="post">
                    <div class="row mt-5">
                        <div class="col">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="password" class="form-label">Re-Enter Password</label>
                                <input type="password" class="form-control" id="repassword" name="repassword" aria-describedby="emailHelp">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="mobile" class="form-label">Mobile</label>
                                <input type="text" class="form-control" name="mobile" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                
                    <div class="update-btn mt-4">
                        <input type="submit" name="update" value="Create">
                    </div>
                </form>
            </div>
            <?php
            if (isset($_POST['update'])) {
                $nname = $_POST['name'];
                $nemail = $_POST['email'];
                $npass = $_POST['password'];
                $passre = $_POST['repassword'];
                $nmobile = $_POST['mobile'];

                if($npass != $passre){
                    echo "<script>
                    alert('Password Missmatch')
                    </script>";
                }
                else{
                    $sql2 = "INSERT INTO `student_details` (`id`, `name`, `email`, `password`, `mobile`) VALUES (NULL, '$nname', '$nemail', '$npass', '$nmobile');";
                    $query2 = mysqli_query($conn, $sql2);
                    if ($query2) {
                        header('Location:dashboard.php');
                    } else {
                        echo "<script>
                        alert('Unsuccessful')
                        </script>";
                    }
                }
            }
            ?>

            </div>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>

    </html>

<?php
    mysqli_close($conn);
}
?>