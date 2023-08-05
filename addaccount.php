<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/add_acc.css">
    <title>Add Account</title>
</head>

<body>
    <div>

        <form action="add_account.php" method="get">
            <fieldset>
                <legend>Account Details</legend>
                <label for="FirstName">First Name : </label>
                <input type="text" name="FirstName" id="FirstName" placeholder="First Name" required><br>
                <label for="LastName">Last Name : </label>
                <input type="text" name="LastName" id="LastName" placeholder="Last Name" required><br>
                <label for="Email">Email : </label>
                <input type="email" name="Email" id="Email" placeholder="Email" required><br>
                <label for="mobile">Mobile No. : </label>
                <input type="tel" name="mobile" id="mobile" placeholder="Mobile No." required><br>
                <label for="dob">Date of Birth : </label>
                <input type="date" name="dob" id="dateofbirth" required><br>
                <label for="balance">Balance : </label>
                <input type="number" name="balance" id="balance" placeholder="Balance" required><br>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password" placeholder="Password" required><br>
                <?php
        $account_no = rand(1111111111,9999999999);
        ?>
                <input type="hidden" name="account_number" value="<?php echo $account_no; ?>">
                <input type="submit" value="Submit">
                 <?php if(isset($_GET['msg'])){?>
                    <div class="message"><?php  echo $_GET['msg']; } ?></div>
            </fieldset>
        </form>
    </div>
</body>

</html>