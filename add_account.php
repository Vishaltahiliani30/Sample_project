<?php 

$f_name = $_POST['FirstName'];
$l_name = $_POST['LastName'];
$email = $_POST['Email'];
$phone = $_POST['mobile'];
$dob = $_POST['dob'];
$amount = $_POST['balance'];
$account_no = $_POST['account_number'];
$password = $_POST['password'];
$username = $f_name.$l_name;

$con = mysqli_connect('localhost','root','','web_security') or die('Unable To connect');
$sql_account_detail = "INSERT INTO account_details (`first_name`, `last_name`, `email`, `phone`, `dateofbirth`,`account_no`,`balance`) VALUES ('$f_name', '$l_name', '$email', $phone, '$dob', $account_no ,$amount)";
$sql_login_customer = "INSERT INTO login_customer (`username`, `password`,`email`, `account_no`,`balance`) VALUES ('$username', '$password', '$email', $account_no , $amount)";
if(mysqli_query($con,$sql_account_detail) && mysqli_query($con,$sql_login_customer)){
    header("Location:addaccount.php?msg=Account Created Successfully");
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
?>