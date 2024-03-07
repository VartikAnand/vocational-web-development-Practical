<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Sanitize input
    $name = $_GET['name'];
    $age = $_GET['age'];

    echo "<h2>GET Result</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Age: $age</p>";
} else {
    echo "<p>No data received.</p>";
}
?>
