<?php
// Connect Database
require("condb.php");

// 1. Get the itemid
$itemid = isset($_GET["itemid"]) ? $_GET["itemid"] : '';
// echo $itemid;

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // 3. Prepare sql and bind parameters
    $sql = 'delete from tbproduct where itemid = ?';
    $statement = $conn->prepare($sql);
    $statement->bind_param('s', $itemid);
    $result = $statement->execute();

    // Execute sql and check for failure
    if (!$result) {
        die('Execute failed: ' . $statement->error);
    }

    // Redirect
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="deleteproduct.css">
    <title>Delete Menu</title>
</head>
<body>
    <div class="con">
        <div class="box">
            <h1>PAT'Restaurant : Delete Menu</h1>
                <?php 
                    // 2. Get the product detail
                    $sql = "select * from tbproduct where itemid = '".$itemid."'";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                ?>
            <p>Do you want to delete <b><?php echo $row["detail"];?></b></p>
            <form method="post">
                <button type="submit" class="btn btn-danger">Delete</button>
                <a href="index.php" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>

<?php
$conn->close();
?>
    
</body>
</html>