<?php

$account_no = $_POST['account_no'];
$amount = $_POST['transaction_ammount'];
$transaction_type = $_POST['transaction_type'];
$transaction_id = $_POST['transaction_id'];
$date_and_time = $_POST['date_and_time'];






$con = mysqli_connect('localhost','root','','web_security') or die('Unable To connect');

$sql = "SELECT COUNT(*) FROM `account_details` WHERE account_no=$account_no";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
if($row['COUNT(*)'] > 0){
    $sql = "SELECT * FROM account_details where account_no=". $account_no;
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    $balance = $row['balance'];
    if($transaction_type == "online"){
        $balance = $balance - $amount;
        $sql_update = "UPDATE account_details SET balance = $balance , transaction_id = $transaction_id  WHERE account_no = $account_no";
        $sql_insert = "INSERT INTO transaction_details (`account_no`,`transaction_amount`,`transaction_type`,`transaction_id`,`account_balance`) VALUES ($account_no,$amount,'$transaction_type',$transaction_id,$balance)";
        if(mysqli_query($con,$sql_update) && mysqli_query($con,$sql_insert)){
            header("Location:index.php");
        }else{
            echo "Error: " . $sql_update . "<br>" . mysqli_error($con);
        }
    }else{
        echo "Transaction Type Not Found";
    }  
}else{
    header("Location:transact.php?msg=$account_no is not found!");
}

?>