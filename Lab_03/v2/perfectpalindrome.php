<?php
// Lab03 Task 2 - Perfect Palindrome
// Get the input string from the form and convert it to lower case
$input = strtolower($_POST['input']);

// Reverse and convert the input string to lower case
$reversed = strtolower(strrev($input));

// Compare the input and reversed strings and output the appropriate message
echo strcmp($input, $reversed) == 0
    ? "The text you entered: '$input' is a perfect palindrome."
    : "The text you entered: '$input' The input is not a perfect palindrome.";
