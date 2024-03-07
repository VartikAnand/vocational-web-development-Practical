
<!-- 18 Design an "update" web form to edit the name of the customer to "Bob" with cust_no. -->
<html lang="en">

<body>

<form action="" method="post">
    <h2>Update Customer Name</h2>
    
    <label for="cust_no">Customer Number:</label>
    <input type="text" id="cust_no" name="cust_no" required>

    <label for="new_name">New Name:</label>
    <input type="text" id="new_name" name="new_name" value="Bob" required>

    <button type="submit">Update Name</button>
</form>

</body>
</html>



<?php
// Assuming you have a database connection established

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the values from the form
    $cust_no = $_POST["cust_no"];
    $new_name = $_POST["new_name"];

   
    $conn = new mysqli('localhost', 'root', '', 'vartikdb');

    if (! $conn) {
        die("Connection failed: " );
    }

    $sql = "UPDATE customer SET cust_name='$new_name' WHERE cust_no='$cust_no'";

    if ($conn->query($sql)) {
        echo "Name updated successfully";
    } else {
        echo "Error updating name: " ;
    }

    $conn->close();
}
?>
