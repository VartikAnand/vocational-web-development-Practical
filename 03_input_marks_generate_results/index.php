<!-- 03 Write a PHP Script to input marks, generate results and display grades -->
<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <center>
    <h2>Grade Calculator</h2>
    <form method="post" action="">
        <label for="marks">Enter Marks:</label>
        <input type="text" name="marks" id="marks" placeholder="Enter marks separated by comma" required>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Function to calculate grades
    function calculateGrade($marks) {
        $total = 0;
        $count = 0;

        // Split the marks string into an array
        $marksArray = explode(",", $marks);

        // Calculate total marks and count
        foreach ($marksArray as $mark) {
            $total += $mark;
            $count++;
        }

        // Calculate average
        $average = $total / $count;

        // Determine grade based on average
        if ($average >= 90) {
            return "A+";
        } elseif ($average >= 80) {
            return "A";
        } elseif ($average >= 70) {
            return "B";
        } elseif ($average >= 60) {
            return "C";
        } elseif ($average >= 50) {
            return "D";
        } else {
            return "F";
        }
    }

    // Process form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get marks from form
        $marks = $_POST['marks'];

        // Calculate grades
        $grade = calculateGrade($marks);

        // Display results
        echo "<h3>Results:</h3>";
        echo "<p>Marks: $marks</p>";
        echo "<p>Grade: $grade</p>";
    }
    ?>

</center>
</body>
</html>
