<!-- Write a PHP script to connect the MySQL server from your website -->

<?php

// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'vartikdb');

// Check connection
if (!$conn) {
    die("Connection failed: ");
}

echo "Connected successfully";

?>
