<?php
// Lab03 Task 3 - Standard Palindrome
// Get the input string from the form
$input = $_POST['input'];

// Remove non-alphanumeric characters from the input string
$input = preg_replace('/[^A-Za-z0-9]/', '', $input);

// Reverse the input string
$reversed = strrev($input);

// Convert the input and reversed strings to lower case
$input = strtolower($input);
$reversed = strtolower($reversed);

// Compare the input and reversed strings
if (strcmp($input, $reversed) == 0) {
    // The strings are identical, so the input is a standard palindrome
    echo "The text you entered: '$input' is a standard palindrome.";
} else {
    // The strings are not identical, so the input is not a standard palindrome
    echo "The text you entered: '$input' not a standard palindrome.";
}
