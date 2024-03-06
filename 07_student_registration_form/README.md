# Aim
7. Create a student registration form using a text box, check box, radio button, select, and submit button. And display user-inserted value on the new PHP page
## Code

### index.html

```html
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Registration Form</title>
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

  <form action="data.php" method="post">
    <table>
      <tr>
        <th><label for="name">Name:</label></th>
        <td><input type="text" name="name" id="name" required></td>
      </tr>
      <tr>
        <th><label>Gender:</label></th>
        <td>
          <input type="radio" name="gender" value="male" id="male" required>
          <label for="male">Male</label>
          <input type="radio" name="gender" value="female" id="female" required>
          <label for="female">Female</label>
        </td>
      </tr>
      <tr>
        <th><label for="course">Select Course:</label></th>
        <td>
          <select name="course" id="course" required>
            <option value="math">Math</option>
            <option value="science">Science</option>
            <option value="history">History</option>
          </select>
        </td>
      </tr>
      <tr>
        <th><label>Choose Clubs:</label></th>
        <td>
          <input type="checkbox" name="clubs[]" value="sports" id="sports">
          <label for="sports">Sports</label>
          <input type="checkbox" name="clubs[]" value="music" id="music">
          <label for="music">Music</label>
          <input type="checkbox" name="clubs[]" value="art" id="art">
          <label for="art">Art</label>
        </td>
      </tr>
    </table>
    
    <input type="submit" value="Submit">
  </form>

</body>
</html>


```


### data.php

```html
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Data</title>
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

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Sanitize and display form data
      $name = htmlspecialchars($_POST["name"]);
      $gender = htmlspecialchars($_POST["gender"]);
      $course = htmlspecialchars($_POST["course"]);
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

</body>
</html>

```

## Output

### index.html
![Output](1.png)

### data.php
![Output](2.png)