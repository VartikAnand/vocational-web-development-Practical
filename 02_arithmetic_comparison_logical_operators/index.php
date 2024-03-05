<!-- 02 Write a PHP script to demonstrate arithmetic operators, comparison operators, and
logical operators -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Operators Demo</title>
</head>

<body>
    <h2>Arithmetic, Comparison, and Logical Operators Demo</h2>

    <?php

    // Arithmetic Operators
    $a = 10;
    $b = 5;

    $addition = $a + $b;
    $subtraction = $a - $b;
    $multiplication = $a * $b;
    $division = $a / $b;
    $modulus = $a % $b;
    $exponentiation = $a ** $b;

    echo "<h3>Arithmetic Operators:</h3>";
    echo "Addition: $addition<br>";
    echo "Subtraction: $subtraction<br>";
    echo "Multiplication: $multiplication<br>";
    echo "Division: $division<br>";
    echo "Modulus: $modulus<br>";
    echo "Exponentiation: $exponentiation<br><br>";

    // Comparison Operators
    $x = 10;
    $y = 5;

    $equal = $x == $y;
    $notEqual = $x != $y;
    $greaterThan = $x > $y;
    $lessThan = $x < $y;
    $greaterThanOrEqual = $x >= $y;
    $lessThanOrEqual = $x <= $y;

    echo "<h3>Comparison Operators:</h3>";
    echo "Equal: " . ($equal ? 'true' : 'false') . "<br>";
    echo "Not Equal: " . ($notEqual ? 'true' : 'false') . "<br>";
    echo "Greater Than: " . ($greaterThan ? 'true' : 'false') . "<br>";
    echo "Less Than: " . ($lessThan ? 'true' : 'false') . "<br>";
    echo "Greater Than or Equal: " . ($greaterThanOrEqual ? 'true' : 'false') . "<br>";
    echo "Less Than or Equal: " . ($lessThanOrEqual ? 'true' : 'false') . "<br><br>";

    // Logical Operators
    $p = true;
    $q = false;

    $and = $p && $q;
    $or = $p || $q;
    $notP = !$p;
    $notQ = !$q;

    echo "<h3>Logical Operators:</h3>";
    echo "AND: " . ($and ? 'true' : 'false') . "<br>";
    echo "OR: " . ($or ? 'true' : 'false') . "<br>";
    echo "NOT P: " . ($notP ? 'true' : 'false') . "<br>";
    echo "NOT Q: " . ($notQ ? 'true' : 'false') . "<br>";
    ?>
</body>

</html>