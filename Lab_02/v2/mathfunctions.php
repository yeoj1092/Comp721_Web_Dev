<?php
// Lab02 Task 3 - Factorial Form
// Define the factorial function
function factorial($n)
{
    // Check if the input is 0
    if ($n == 0) {
        // Return 1 for 0 factorial
        return 1;
    } elseif (is_int($n) && $n >= 0) {
        // Initialize the result to 1
        $result = 1;

        // Loop through the integers from 1 to $n
        for ($i = 1; $i <= $n; $i++) {
            // Multiply the result by the current integer
            $result *= $i;
        }

        // Return the result
        return $result;
    } else {
        // Return an error message if the input is not a positive integer
        return 'Error: Input must be a positive integer.';
    }
}
