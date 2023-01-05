<?php
// Get the input string from the form and remove non-alphanumeric characters
$input = preg_replace('/[^A-Za-z0-9]/', '', $_POST['input']);

// Reverse and convert the input string to lower case
$reversed = strtolower(strrev($input));

// Compare the input and reversed strings and output the appropriate message
echo strcmp($input, $reversed) == 0
    ? "The text you entered: '$input' is a standard palindrome."
    : "The text you entered: '$input' is not a standard palindrome.";
