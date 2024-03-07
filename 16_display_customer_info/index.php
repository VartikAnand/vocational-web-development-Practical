<!-- 16 Write a program to read customer information from the customer table and display all this information in table format on a PHP page -->


<?php


// Create connection
$conn = new mysqli('localhost', 'root', '', 'vartikdb');

// Check connection
if (!$conn) {
    die("Connection failed: " );
}

// SQL query to select customer information
$sql = "SELECT * FROM customer";
$result = $conn->query($sql);

// Display customer information in a table
echo "<html><head><style>table, th, td {border: 1px solid black; border-collapse: collapse; padding: 8px;}</style></head><body>";
echo "<table>";
echo "<tr><th>Customer Number</th><th>Customer Name</th><th>Item Purchased</th><th>Mobile Number</th></tr>";

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["cust_no"]."</td><td>".$row["cust_name"]."</td><td>".$row["item_purchased"]."</td><td>".$row["mob_no"]."</td></tr>";
    }
} else {
    echo "<tr><td colspan='4'>No records found</td></tr>";
}

echo "</table></body></html>";

$conn->close();
?>
