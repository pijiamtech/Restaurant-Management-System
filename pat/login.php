<?php

    require("condb.php");
    {
        @$username=$_POST['un'];
        @$password=$_POST['pw'];
        $query="select * from login where un='$username' and pw='$password'";
        $result=mysqli_query($conn,$query);
        $count=mysqli_num_rows($result);
        if($count>0)
        {
            header('location:index.php');
        }
        else
        {
            echo "<script>";
                echo "alert(\" Username หรือ Password ไม่ถูกต้อง\");"; 
                echo "window.history.back()";
            echo "</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
</head>
<body>
    <div class="con"> 
        <form method="post">
            <div class="box">
                <div class="container">
                        <div class="top">
                            <span>Welcome to the Restaurant's Internal System.</span>
                            <header>Login</header>
                        </div>

                        <div class="input-field">
                            <input type="text" class="input" placeholder="Username" id="" name="un">
                            <i class='bx bx-user' ></i>
                        </div>

                        <div class="input-field">
                            <input type="Password" class="input" placeholder="Password" id="" name="pw">
                            <i class='bx bx-lock-alt'></i>
                        </div>

                        <div class="input-field">
                            <input type="submit" class="submit" value="Login" id="" name="save">             
                        </div>        
                </div>
            </div>  
        </form>
    </div>
</body>
</html>
