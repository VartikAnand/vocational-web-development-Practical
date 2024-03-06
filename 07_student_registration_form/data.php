<html lang="en">
<head>

  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }
    table {
      width: 50%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    th, td {
      padding: 10px;
      border: 1px solid #ddd;
      text-align: left;
    }
  </style>
</head>
<body>

  <center>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize and display form data
        $name = $_POST["name"];
        $gender =$_POST["gender"];
        $course = $_POST["course"];
        $clubs = isset($_POST["clubs"]) ? implode(", ", $_POST["clubs"]) : "";
        // Display the form data in a table
        echo "<h2>Form Data:</h2>";
        echo "<table>";
        echo "<tr><th>Name</th><td>$name</td></tr>";
        echo "<tr><th>Gender</th><td>$gender</td></tr>";
        echo "<tr><th>Course</th><td>$course</td></tr>";
        echo "<tr><th>Clubs</th><td>$clubs</td></tr>";
        echo "</table>";
      }
    ?>
  </center>

</body>
</html>
