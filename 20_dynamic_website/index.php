<!-- Create a dynamic website using PHP and MySQL for this all -->
<?php
$conn = mysqli_connect('localhost', 'root', '', 'vartikdb');

if (!$conn) {
    echo "Error ";
}

if (isset($_POST['Add'])) {
    $name = $_POST['name'];
    $sql = "INSERT INTO STUDENTS (`name`) VALUES ('$name')";

    if (mysqli_query($conn, $sql)) {
        echo "Record inserted successfully";
    }
}

?>

<html lang="en">

<body>
    <h1>Student Record</h1>
    <form method="post" action="">
        <label for='name'>Student Name:</label>
        <input type='text' id='name' name='name'>
        <input type='submit' name='Add' value='Add'>
    </form>

    <table border="1">
        <tr>
            <th>Roll Number</th>
            <th>Name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php
        $sql = "SELECT * FROM STUDENTS";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>". $row['roll_number']. "</td>"; // Adjust the column name if necessary
            echo "<td>". $row['name']. "</td>";
            echo "<td><a href='edit.php?id=".$row['roll_number']."'>Edit</a></td>"; // Assuming 'edit.php' handles the editing
            echo "<td><a href='delete.php?id=".$row['roll_number']."'>Delete</a></td>"; // Assuming 'delete.php' handles the deletion
            echo "</tr>";
        }
        ?>

    </table>

    <?php
    mysqli_close($conn);
    ?>

</body>
</html>
