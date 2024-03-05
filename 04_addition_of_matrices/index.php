<!-- 4. Write a PHP Script for addition of two 2x2 matrices. -->

<html>
<head>
   <title>Addition of Matrices</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
        }
        table {
            margin: auto;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php

function addMatrices($matrix1, $matrix2) {
    $result = array();

    // Perform addition
    for ($i = 0; $i < 2; $i++) {
        for ($j = 0; $j < 2; $j++) {
            $result[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
        }
    }

    return $result;
}

// Example matrices
$matrix1 = array(
    array(1, 2),
    array(3, 4)
);

$matrix2 = array(
    array(5, 6),
    array(7, 8)
);

// Add matrices
$result = addMatrices($matrix1, $matrix2);

// Display result
echo "<h2>Resultant Matrix:</h2><br>";
echo "<table>";
for ($i = 0; $i < 2; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 2; $j++) {
        echo "<td>" . $result[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>

    </div>
</body>
</html>
