<?php

// Function to simulate a division operation
function divide($numerator, $denominator) {
    if ($denominator == 0) {
        // Throw an exception if attempting to divide by zero
        throw new Exception("Cannot divide by zero");
    }

    return $numerator / $denominator;
}

try {
    // Attempt to perform a division
    $result = divide(10, 2);

    // Display the result if successful
    echo "Result of division: $result";
} catch (Exception $e) {
    // Catch and handle the exception
    echo "Error: " . $e->getMessage();
} finally {
    // Code in the finally block will be executed regardless of whether an exception occurred or not
    echo "<br>Finally block executed.";
}
?>
