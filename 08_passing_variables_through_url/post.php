<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];

    echo "<h2>POST Result</h2>";
    echo "<p>Name: $name</p>";
} 
?>
