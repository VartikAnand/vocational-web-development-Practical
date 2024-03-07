<?php
$conn = mysqli_connect('localhost', 'root', '', 'vartikdb');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $roll_number = $_GET['id'];

    if ( isset($_POST['Update'])) {
        // Update the record based on the form submission
        $newName =$_POST['name'];
        $sql = "UPDATE STUDENTS SET name = '$newName' WHERE roll_number = '$roll_number'";
        $result = mysqli_query($conn, $sql);

        if ( $result) {
            // Redirect to index.php after successful update
            header("Location: index.php");
            exit();
        } else {
            echo "Error updating record.";
        }
    }

    // Fetch the record based on the roll_number
    $sqlSelect = "SELECT * FROM STUDENTS WHERE roll_number = '$roll_number'";
    $resultSelect = mysqli_query($conn, $sqlSelect);

    if ($resultSelect && $row = mysqli_fetch_assoc($resultSelect)) {
        // Display the form with the data for editing
?>
        <html lang="en">
        <head>
            <title>Edit Student</title>
        </head>
        <body>
            <h1>Edit Student Record</h1>
            <form method="post" action="">
                <input type="hidden" name="roll_number" value="<?= $row['roll_number']; ?>">
                <label for="name">Student Name:</label>
                <input type="text" id="name" name="name" value="<?= $row['name']; ?>">
                <input type="submit" name="Update" value="Update">
            </form>
        </body>
        </html>
<?php
    } else {
        echo "Error fetching record.";
    }
}

mysqli_close($conn);
?>
