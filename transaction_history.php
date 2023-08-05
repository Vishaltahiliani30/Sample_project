<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="CSS/transaction_history.css">
</head>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web_security";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT account_no, transaction_amount,account_balance, transaction_id, transaction_type FROM transaction_details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table id='customers'><tr><th>Account No</th><th>Transaction Amount</th><th>Account Balance</th><th>Transaction ID</th><th>Transaction Type</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["account_no"]. "</td><td>" . $row["transaction_amount"]. "</td><td>" . $row["account_balance"]. "</td><td>" . $row["transaction_id"]. "</td><td>" . $row["transaction_type"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
