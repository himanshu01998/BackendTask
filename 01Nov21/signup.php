<?php
include "DBconnection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" media="all" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Sign Up</title>
    </head>

    <body>
        <form method="post">
            <div class="container">
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

                    <div class="signup-btn mt-4">
                        <input type="submit" name="signup" value="Signup">
                    </div>
                </form>
            </div>
            <?php
            if (isset($_POST['signup'])) {
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
                    $query2 = mysqli_query($conn, $sql2) ;
                    if($query2){
                        header('Location:login.php');
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
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
    </html>

<?php
mysqli_close($conn);
?>