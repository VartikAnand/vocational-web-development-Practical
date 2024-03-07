# Aim
Design a "delete" web form to delete records with cust_no=3.
## Code
### Index.php
```PHP
<html lang="en">

<body>

<form action="" method="post">
    <h2>Delete Customer Record</h2>
    
    <label for="cust_no">Customer Number to Delete:</label>
    <input type="number" id="cust_no" name="cust_no"  >

    <button type="submit">Delete Record</button>
</form>

</body>
</html>



<?php
// Assuming you have a database connection established

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the values from the form
    $cust_no = $_POST["cust_no"];

   
    $conn = new mysqli('localhost', 'root', '', 'vartikdb');

    if (! $conn) {
        die("Connection failed: " );
    }

    $sql = "DELETE FROM customer WHERE cust_no='$cust_no'";
    if ($conn->query($sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " ;
    }

    $conn->close();
}
?>


```
## Output

![Output](1.png)