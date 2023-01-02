<?php
// Lab02 Task 3 - Factorial Form
// Get the value of the "number" variable from the GET request
$number = $_GET['number'];

// Check if the input is an integer
if (is_int($number)) {
    // Check if the input is a positive integer
    if ($number > 0) {
        // Include the "mathfunctions.php" file to access the defined functions
        include 'mathfunctions.php';

        // Call the factorial function and store the result in a variable
        $result = factorial($number);

        // Output the result
        echo $result;
    } else {
        // Output an error message if the input is not a positive integer
        echo 'Error: Input must be a positive integer.';
    }
} else {
    // Output an error message if the input is not an integer
    echo 'Error: Input must be an integer.';
}
