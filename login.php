<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('localhost','root','','web_security') or die('Unable To connect');
        $sql_employee = "SELECT * FROM login_user WHERE user_name='".$_POST["user_name"]."' and password='".$_POST["password"]."'";
        $sql_customer = "SELECT * FROM login_customer WHERE username='".$_POST["user_name"]."' and password='".$_POST["password"]."'";
        $result1 = mysqli_query($con,$sql_employee);
        $result2 = mysqli_query($con,$sql_customer);
        $row1  = mysqli_fetch_array($result1);
        $row2  = mysqli_fetch_array($result2);
        if(is_array($row1)) {
            $_SESSION["id"] = $row1['id'];
            $_SESSION["name"] = $row1['name'];
        }elseif(is_array($row2)){
            $_SESSION["id"] = $row2['id'];
            $_SESSION["username"] = $row2['username'];
            header("Location:customer.php");
        }else{
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["name"]) or isset($_SESSION["username"])) {
        header("Location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/login.css">
    <title>User Login</title>
</head>

<body>
    <div>
        <form name="frmUser" method="post" action="" autocomplete="off">
            <fieldset>
                <legend align="left">Login</legend><br>
                <label>Username:</label><br>
                <input type="text" name="user_name" placeholder="Username"><br>
                <label>Password:</label><br>
                <input type="password" name="password" placeholder="Password"><br><br>
                <input type="submit" name="submit" value="Login">
                <input type="Reset">
                <div class="message"><?php if($message!="") { echo $message; } ?></div>
            </fieldset>
        </form>
    </div>
</body>

</html>