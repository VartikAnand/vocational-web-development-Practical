<!-- 6. Write a PHP script to demonstrate string, date and math functions. -->
<html lang="en">
<head>
   
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        code {
            background-color: #f4f4f4;
            padding: 5px;
            border: 1px solid #ccc;
            display: block;
            margin-bottom: 15px;
            font-size: 14px;
        }
    </style>
</head>
<body>

<h1>Demonstration string, date and math functions</h1>

<?php

// String functions
$string = "hI Vartik";
echo "<code>Original String: $string</code>";

// String length
$length = strlen($string);
echo "<code>String Length: $length</code>";

// Convert to uppercase
$uppercase = strtoupper($string);
echo "<code>Uppercase: $uppercase</code>";

// Substring
$substring = substr($string, 0, 5);
echo "<code>Substring: $substring</code>";

// Date functions
$date = date("Y-m-d H:i:s");
echo "<code>Current Date and Time: $date</code>";

// Get timestamp for a specific date
$timestamp = strtotime("2024-03-06");
echo "<code>Timestamp for 2024-03-06: $timestamp</code>";

// Math functions
$number1 = 3;
$number2 = 2;

// Addition
$sum = $number1 + $number2;
echo "<code>Addition: $sum</code>";

// Subtraction
$difference = $number1 - $number2;
echo "<code>Subtraction: $difference</code>";

// Multiplication
$product = $number1 * $number2;
echo "<code>Multiplication: $product</code>";

// Division
$quotient = $number1 / $number2;
echo "<code>Division: $quotient</code>";

// Power
$power = pow($number1, $number2);
echo "<code>Power: $power</code>";

?>
</body>
</html>
