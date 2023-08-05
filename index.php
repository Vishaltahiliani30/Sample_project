<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <title>User Login</title>
</head>

<body>  
        <?php
            if(!isset($_SESSION["name"])){
                echo "<h1>Click Here to <a href='login.php'>Login</a></h1>";
            }
        ?>
        <?php
            if(isset($_SESSION["name"])) {
        ?>
        <div class="topnav">
            <a class="active">Welcome <?php echo $_SESSION["name"]; ?></a>
            <a href="addaccount.php">Add Account</a>
            <a href="transact.php">Fund Transfer</a>
            <a href="transaction_history.php">Transaction History</a>
            <a href="logout.php" class="logout">Logout</a>
        </div>
        <?php
            }else echo "<h1>Please login first .</h1>";
        ?>
</body>

</html>