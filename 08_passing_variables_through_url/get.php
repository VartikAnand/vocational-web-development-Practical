<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_GET['name'];

    echo "<h2>GET Result</h2>";
    echo "<p>Name: $name</p>";
} 
?>
