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
        <title>Delete</title>
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
                <div class="delete mt-5">
                    <h1>Are you sure you want to delete the records</h1>
                    <h3>Once deleted your data cannot be retrieve, Select Delete if you want to delete or select Cancel if you don't want to delete.</h3>
                    <div class="btn-del">
                        <input class="mx-4" type="submit" name="delete" value="Delete">
                        <input type="submit" name="cancel" value="Cancel">
                    </div>
                </div>
            </div>

        </form>

        <?php
        $sid = $_GET['sid'];
        if (isset($_POST['delete'])) {
            $sql = "DELETE FROM student_details WHERE id = $sid;";
            $query = mysqli_query($conn, $sql) or die("Error in Query");
            header('Location:dashboard.php');
        } else if (isset($_POST['cancel'])) {
            header('Location:dashboard.php');
        }

        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>

    </html>

<?php
    mysqli_close($conn);
}
?>