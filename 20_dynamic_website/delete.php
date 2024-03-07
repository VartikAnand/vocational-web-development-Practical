<?php
$conn = mysqli_connect('localhost', 'root', '', 'vartikdb');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $roll_number = $_GET['id'];

    // Delete the record based on the roll_number
    $sql = "DELETE FROM STUDENTS WHERE roll_number = '$roll_number'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
header("Location: index.php");
mysqli_close($conn);
?>
