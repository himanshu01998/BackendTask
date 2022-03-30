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
    <title>Dashboard</title>
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



      <?php

      $sql = "SELECT * FROM `student_details`;";
      $query = mysqli_query($conn, $sql) or die("Error in Query");

      ?>

      <div class="container">
        <?php
        $sql5 = "SELECT name FROM student_details where email='$session_email';";
        $query5 = mysqli_query($conn, $sql5) or die("Error in Query");
        $row2 = mysqli_fetch_array($query5);
        echo "<br><h2> Hello, ", $row2['name'], "</h2>";
        ?>
        <table class="table mt-5">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Password</th>
              <th scope="col">Mobile</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php

            while ($row = mysqli_fetch_array($query)) {
              $id = $row['id'];
              $name = $row['name'];
              $email = $row['email'];
              $pass = $row['password'];
              $mobile = $row['mobile'];

              echo "<tr>";
              echo "<td>" . $id . "</td>";
              echo "<td>" . $name . "</td>";
              echo "<td>" . $email . "</td>";
              echo "<td>" . $pass . "</td>";
              echo "<td>" . $mobile . "</td>";
              echo "<td><a style='text-decoration: none; box-shadow: 2px 2px 10px rgb(192, 188, 188);' href=edit.php?sid=$id> Edit </a></td>";
              echo "<td><a style='text-decoration: none; box-shadow: 2px 2px 10px rgb(192, 188, 188);' href=delete.php?sid=$id> Delete </a></td>";
              echo "</tr>";
            }

            ?>
          </tbody>
        </table>
      </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>

  </html>

<?php
  mysqli_close($conn);
}
?>