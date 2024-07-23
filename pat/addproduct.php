<?php
// Connect Database
require("condb.php");

// Get itemid from URL
$itemid = isset($_GET["itemid"]) ? $_GET["itemid"] : '';
// echo $itemid;
if(isset($itemid)){
    // Query product detial from DB
    $sql = "select * from tbproduct where itemid = '".$itemid."'";
    $result = $conn->query($sql);
    $rowitem = $result->fetch_assoc();
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($itemid)){
        //Get the posted data
        $itemid = $_POST["itemid"];
        $name = $_POST["name"];
        $category = $_POST["category"];
        $type = $_POST["type"];
        $unitprice = $_POST["unitprice"];
        //echo $itemid." ".$name." ".$category." ".$type." ".$unitprice;

        $sql = 'insert into tbproduct (itemid, detail, tbcategory_catid, tbtype_typeid, unitprice) values (?, ?, ?, ?, ?)'; 
        $statement = $conn->prepare($sql); 
        $statement->bind_param('ssssi', $itemid, $name, $category, $type, $unitprice); 
        $result = $statement->execute(); 
        if (!$result) { 
            die('Execute failed: ' . $statement->error); 
        }

        // Redirect page to index.php
        header('Location: index.php');
        exit();
    }else{
        //Update product
        //Get the posted data
        $name = $_POST["name"];
        $category = $_POST["category"];
        $type = $_POST["type"];
        $unitprice = $_POST["unitprice"];
        echo "Update<br>";
        echo $itemid." ".$name." ".$category." ".$type." ".$unitprice;

        $sql = 'update tbproduct set detail = ?, tbcategory_catid = ?, tbtype_typeid = ?, unitprice = ? where itemid = ? '; 
        $statement = $conn->prepare($sql); 
        $statement->bind_param('sssis', $name, $category, $type, $unitprice, $itemid); 
        $result = $statement->execute(); 
        if (!$result) { 
            die('Execute failed: ' . $statement->error); 
        }

        // Redirect page to index.php
        header('Location: index.php');
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="addproduct.css">
    <title>Add Menu</title>
</head>
<body>
    <div class ="con">
        <form method="post">
            <div class="mb-3 col-9 container" >
                <h1>PAT'Restaurant: <?php echo $itemid == '' ? 'Add' : 'Edit'; ?> Menu</h1>
                <label for="itemid" class="form-label">Item ID</label>
                <input name="itemid" type="text" class="form-control" id="itemid" value="<?php echo empty($itemid) ? '' : $rowitem["itemid"]; ?>" <?php echo empty($itemid) ? '' : 'disabled'; ?>>
            </div>
            <div class="mb-3 col-9 container">
                <label for="name" class="form-label">Product Name</label>
                <input name="name" type="text" class="form-control" id="name" value="<?php echo empty($itemid) ? '' : $rowitem["detail"]; ?>">
            </div>

            <div class="mb-3 col-9 container">
                <label for="category" class="form-label">Category</label>
                <select name="category" class="form-select" id="category">
                        <option value="" >Choose...</option>
                        <?php 
                            $resultcat = $conn->query("select * from tbcategory");
                            while($row = $resultcat->fetch_assoc()){
                            echo "<option value=\"".$row["catid"]."\" ";
                            $catvalue = empty($itemid) ? '' : $rowitem["tbcategory_catid"];
                            if($row["catid"]==$catvalue){
                                echo "selected";
                            }
                            echo ">".$row["catname"]."</option>";
                        }
                        ?>
                    </select>
            </div>

            <div class="mb-3 col-9 container">
                <label for="type" class="form-label">Type</label>
                <select name="type" class="form-select" id="type">
                        <option value="">Choose...</option>
                        <?php 
                            $resulttype = $conn->query("select * from tbtype");
                            while($row = $resulttype->fetch_assoc()){
                            echo "<option value=\"".$row["typeid"]."\"";
                            $typevalue = empty($itemid) ? '' : $rowitem["tbtype_typeid"];
                            if($row["typeid"]==$typevalue){
                                echo "selected";
                            }
                            echo ">".$row["typename"]."</option>";
                        }
                        ?>
                    </select>
            </div>

            <div class="mb-3 col-9 container">
                <label for="unitprice" class="form-label">Unit Price</label>
                <input name="unitprice" type="text" class="form-control" id="unitprice" value="<?php echo empty($itemid) ? '' : $rowitem["unitprice"]; ?>">
            </div>
            <div class="btn-con">
                <button type="submit" class="btn-s">Save</button>
                <a type="submit" href="index.php" class="btn-c">Cancel</a>
            </div>
        </form>
    </div>
   

<?php
$conn->close();
?>
    
</body>
</html>