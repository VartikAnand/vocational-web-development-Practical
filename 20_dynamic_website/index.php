<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'vartikdb');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert operation
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add"])) {
    $name = $_POST["name"];

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO students (name) VALUES (?)");
    $stmt->bind_param("s", $name);

    if ($stmt->execute()) {
        echo "Student added successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

// Delete operation
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["delete"])) {
    $roll_number = $_GET["delete"];

    $sql = "DELETE FROM students WHERE roll_number='$roll_number'";

    if ($conn->query($sql) === TRUE) {
        echo "Student deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Edit operation
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["edit"])) {
    $roll_number = $_POST["roll_number"];
    $name = $_POST["name"];

    // Use prepared statement for update to prevent SQL injection
    $stmt = $conn->prepare("UPDATE students SET name=? WHERE roll_number=?");
    $stmt->bind_param("ss", $name, $roll_number);

    if ($stmt->execute()) {
        echo "Student updated successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

// Fetch all students for display using a new instance of mysqli
$result = (new mysqli('localhost', 'root', '', 'vartikdb'))->query("SELECT * FROM students");
$students = [];

while ($row = $result->fetch_assoc()) {
    $students[] = $row;
}

// Close the connection after fetching data
$result->close();

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
</head>
<body>
    <h2>Student Management</h2>

    <!-- Form for adding a new student -->
    <form action="" method="post">
        Name: <input type="text" name="name" required><br>
        <input type="submit" name="add" value="Add Student">
    </form>

    <h3>Student List</h3>
    
    <!-- Display the list of students -->
    <table border="1">
        <tr>
            <th>Roll Number</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        <?php foreach ($students as $student) : ?>
            <tr>
                <td><?= $student['roll_number'] ?></td>
                <td><?= $student['name'] ?></td>
                <td>
                    <a href="?delete=<?= $student['roll_number'] ?>">Delete</a> |
                    <a href="?edit=<?= $student['roll_number'] ?>">Edit</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <?php if (isset($_GET["edit"])) : ?>
        <!-- Form for editing an existing student -->
        <?php
        $edit_roll_number = $_GET["edit"];
        $edit_student = (new mysqli('localhost', 'root', '', 'vartikdb'))->query("SELECT * FROM students WHERE roll_number='$edit_roll_number'")->fetch_assoc();
        ?>
        <h3>Edit Student</h3>
        <form action="" method="post">
            Name: <input type="text" name="name" value="<?= $edit_student['name'] ?>" required><br>
            <input type="hidden" name="roll_number" value="<?= $edit_student['roll_number'] ?>">
            <input type="submit" name="edit" value="Edit Student">
        </form>
    <?php endif; ?>
</body>
</html>
