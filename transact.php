<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/transfer.css">
    <title>test</title>
</head>

<body>
    <div>
        <form action="action.php" method="get">
            <fieldset>
                <legend>Transfer Details</legend>
                <label for="account_no">Account No :</label>
                <input type="number" name="account_no" id="account_no" required><br>
                <label for="transaction_ammount">Transaction Ammount</label>
                <input type="number" name="transaction_ammount" id="transaction_ammount" required><br>
                <label for="transaction_type">Transaction Type</label>  
                <select name="transaction_type" id="transaction_type">
                    <option value="-1" disabled selected>Select Transaction Type</option>
                    <option value="online">online</option>
                </select><br>

                <?php $transaction_id = rand(000000000000,999999999999); ?>
                <input type="hidden" name="transaction_id" value="<?php echo $transaction_id; ?>">
                <?php
            date_default_timezone_set("Asia/Calcutta");
            $dateandtime = date("h:i:sa");
            ?>
                <input type="hidden" name="date_and_time" value="<?php echo $dateandtime; ?>">
                <input type="submit" value="Transfer">
                <?php if(isset($_GET['msg'])){?>
                    <div class="message"><?php  echo $_GET['msg']; } ?></div>
            </fieldset>
        </form>
    </div>
</body>

</html>