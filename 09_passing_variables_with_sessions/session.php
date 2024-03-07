<?php
// Start the session
session_start();

// Check if the name is submitted
if (isset($_POST['name'])) {
    // Set the session variable
    $_SESSION['username'] = $_POST['name'];

} 

// Redirect back to the HTML page
header("Location: index.php");
exit();
?>
