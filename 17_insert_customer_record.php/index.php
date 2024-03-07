<!-- Design a web form in PHP to input values for the customer record and insert the record in the customer table as a tuple. -->
<!DOCTYPE html>
<html lang="en">

<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cust_name = $_POST["cust_name"];
    $item_purchased = $_POST["item_purchased"];
    $mob_no = $_POST["mob_no"];

    $conn = new mysqli('localhost', 'root', '', 'vartikdb');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO customer (cust_name, item_purchased, mob_no) VALUES ('$cust_name', '$item_purchased', '$mob_no')";

    if ($conn->query($sql)) {
        echo "Record inserted successfully.";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>

<h2>Customer Information Form</h2>
<form method="post" action="">
    
    <label for="cust_name">Customer Name:</label>
    <input type="text" name="cust_name" required><br>

    <label for="item_purchased">Item Purchased:</label>
    <input type="text" name="item_purchased" required><br>

    <label for="mob_no">Mobile Number:</label>
    <input type="text" name="mob_no" required><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>
