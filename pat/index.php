<?php
    require("condb.php");
    // Get parameter's value from URL
    $catvalue = isset($_GET["category"])? $_GET["category"] : '';
    $typevalue = isset($_GET["type"])? $_GET["type"] : '';

    if($catvalue != "" || $typevalue != ""){
        if($catvalue != "" &&  $typevalue == ""){
            $sql = "SELECT * FROM tbproduct where tbcategory_catid = '".$catvalue."'";
        }elseif($catvalue == "" &&  $typevalue != ""){
            $sql = "SELECT * FROM tbproduct where tbtype_typeid = '".$typevalue."'";
        }else{
            $sql = "SELECT * FROM tbproduct where tbcategory_catid = '".$catvalue."' and tbtype_typeid = '".$typevalue."'";
        }
    }else{
        $sql = "select * from tbproduct ";
    }
    // echo $sql;
    $result = $conn->query($sql);
    $no = $result->num_rows;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Restaurant</title>
</head>
<body class="con">
    <h1 class="title">PAT'Restaurant Menu <i class="fa-solid fa-utensils" id="res-icon"></i></h1>
    <br>
    <a class="btn btn-primary float-end" href="addproduct.php" role="button">Add Menu</a>
        <form class="row row-cols-lg-auto g-3 align-items-center" method="get" action="">
            <div class="col-3">
                <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                <select name="category" class="form-select" id="category">
                    <option value="" >Choose...</option>
                    <?php 
                        $resultcat = $conn->query("select * from tbcategory");
                        while($row = $resultcat->fetch_assoc()){
                        echo "<option value=\"".$row["catid"]."\" ";
                        if($row["catid"]==$catvalue){
                            echo "selected";
                        }
                        echo ">".$row["catname"]."</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-3">
                <label class="visually-hidden" for="type">Preference</label>
                <select name="type" class="form-select" id="type">
                    <option value="">Choose...</option>
                    <?php 
                        $resulttype = $conn->query("select * from tbtype");
                        while($row = $resulttype->fetch_assoc()){
                        echo "<option value=\"".$row["typeid"]."\"";
                        if($row["typeid"]==$typevalue){
                            echo "selected";
                        }
                        echo ">".$row["typename"]."</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-3">
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </form>
    <p>&nbsp;&nbsp;We have <?php echo $no;?> products.</p>

    <!-- <ol>
    <?php 
        //while($row = $result->fetch_assoc()){
        //    echo "<li>".$row["detail"]." ".$row["unitprice"]." Baht"."</li>";
        //}
    ?>    
    </ol> -->

    <div class="container-fluid">
        <table class="table table-sm border-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">รายการ</th>
                    <th scope="col">ราคา</th>
                    <th scope="col">หน่วย</th>
                <th></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $count = 1;
                    while($row = $result->fetch_assoc()){
                
                ?>
                <tr>
                <th scope="row"><?php echo $count;?></th>
                <td><?php echo $row["detail"];?></td>
                <td><?php echo $row["unitprice"];?></td>
                <td>Baht</td>
                <td><a class="btn btn-outline-success" href="addproduct.php?itemid=<?php echo $row["itemid"];?>" role="button"><i class="bi bi-pencil-square"></i></a>
                <a class="btn btn-outline-danger" href="deleteproduct.php?itemid=<?php echo $row["itemid"];?>" role="button"><i class="bi bi-trash3"></i></a></td>
                </tr>
                <?php
                    $count = $count +
                    1;
                }
                ?>

            </tbody>
        </table>
    </div>

<?php $conn->close(); ?>
</body>
</html>