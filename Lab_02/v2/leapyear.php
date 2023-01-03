<?php
// Lab02 Task 4 - Leap Year
// Get the value of the "year" variable from the GET request
$year = $_GET['year'];

// Check if the input is a number
if (is_numeric($year)) {
    // Check if the input is a leap year
    if (is_leapyear($year)) {
        // Output a message if the year is a leap year
        echo "The year you entered $year is a leap year.";
    } else {
        // Output a message if the year is a standard year
        echo "The year you entered $year is a standard year.";
    }
} else {
    // Output an error message if the input is not a number
    echo 'Error: Input must be a number.';
}

// Define the is_leapyear function
function is_leapyear($year)
{
    // Check if the year is divisible by 4, 100, and 400
    if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
        // Return true if the year is divisible by 4 and (not divisible by 100 or divisible by 400)
        return true;
    } else {
        // Return false if the year is not divisible by 4 and (not divisible by 100 or divisible by 400)
        return false;
    }
}
