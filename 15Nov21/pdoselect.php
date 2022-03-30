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
    
    <title>See Entry</title>
</head>

<body>
    <div class="container mt-5">
        <a href="pdoinsert.php" style="text-decoration: none; float: right;">Add New Entry</a>
        <br><br>
        <?php
        try{
            $sql = "SELECT * FROM `student_details`";
            $query = $pdo -> query($sql);
            $query -> setFetchMode(PDO::FETCH_ASSOC);
            while($row = $query -> fetch()){
                $id = $row['id'];
                echo $row['name'], ", ", $row['email'], ", ", $row['password'], ", ", $row['mobile'];
                echo "<a style='text-decoration: none; box-shadow: 2px 2px 10px rgb(192, 188, 188);' class=mx-5 href=pdoedit.php?sid=$id> Edit </a>";
                echo "<a style='text-decoration: none; box-shadow: 2px 2px 10px rgb(192, 188, 188);' href=pdodelete.php?sid=$id> Delete </a>";
                echo "<br><br>";
            }
        }
        catch(PDOException $exep){
            echo $exep," occured";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>