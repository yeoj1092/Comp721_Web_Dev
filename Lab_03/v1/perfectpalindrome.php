<?php
// Lab03 Task 2 - Perfect Palindrome
// Get the input string from the form
$input = $_POST['input'];

// Reverse the input string
$reversed = strrev($input);

// Convert the input and reversed strings to lower case
$input = strtolower($input);
$reversed = strtolower($reversed);

// Compare the input and reversed strings
if (strcmp($input, $reversed) == 0) {
    // The strings are identical, so the input is a perfect palindrome
    echo "The text you entered: '$input' is a perfect palindrome.";
} else {
    // The strings are not identical, so the input is not a perfect palindrome
    echo "The text you entered: '$input' not a perfect palindrome.";
}
