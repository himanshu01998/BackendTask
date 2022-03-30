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
    
    <title>Create New Entry</title>
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
        
            <div class="update-btn mt-4">
                <input type="submit" name="update" value="Create">
            </div>
        </form>
    </div>
    <?php
    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $passre = $_POST['repassword'];
        $mobile = $_POST['mobile'];

        if($pass != $passre){
            echo "<script>
            alert('Password Missmatch')
            </script>";
        }
        else{
            try {
                $sql = "INSERT INTO `student_details` (name, email, password, mobile) VALUES (:name, :email, :password, :mobile)";
                $query = $pdo -> prepare($sql);
                $query -> bindParam(':name', $name, PDO::PARAM_STR);
                $query -> bindParam(':email', $email, PDO::PARAM_STR);
                $query -> bindParam(':password', $pass, PDO::PARAM_STR);
                $query -> bindParam(':mobile', $mobile, PDO::PARAM_STR);
                $query -> execute();

                $lastInsertId=$pdo->lastInsertId();
                if($lastInsertId!="")
                {
                    header('Location:pdoselect.php');
                }
                else
                {
                    echo "Error in Inserting";
                }
            } catch (PDOException $e) {
                die("Could not connect to the database :" . $e->getMessage());
            }
        }
    }
    ?>

    </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>