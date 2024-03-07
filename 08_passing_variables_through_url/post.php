<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age =$_POST['age'];

    echo "<h2>POST Result</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Age: $age</p>";
} else {
    echo "<p>No data received.</p>";
}
?>
