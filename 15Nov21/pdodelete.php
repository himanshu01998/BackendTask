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
    
    <title>Delete Entry</title>
</head>

<body>
    <div class="container mt-5">
        <?php
        $id = $_GET['sid'];
        try{
            $sql = "DELETE FROM `student_details` WHERE `id` = :id";
            $query = $pdo -> prepare($sql);
            $query -> bindParam(':id', $id, PDO::PARAM_STR);
            $query -> execute();
            if($query){
                header('Location:pdoselect.php');
            }
            else{
                echo "Error in query";
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