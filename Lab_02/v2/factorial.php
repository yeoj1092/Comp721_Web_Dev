<?php
// Lab02 Task 3 - Factorial Form
// Include the "mathfunctions.php" file to access the defined functions
include 'mathfunctions.php';

// Get the value of the "num" variable from the GET request
$num = $_GET['num'];

// Check if the input is a number
if (is_numeric($num)) {
    // Call the factorial function and store the result in a variable
    $result = factorial($num);

    // Output the result
    echo $result;
} else {
    // Output an error message if the input is not a number
    echo 'Error: Input must be a number.';
}
