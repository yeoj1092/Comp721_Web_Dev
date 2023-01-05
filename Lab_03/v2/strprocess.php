<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Lab03 Task 1 - String Functions</title>
</head>

<body>
    <h1>Web Development - Week 03</h1>
    <h2>Task 1: String Functions</h2>
    <?php
    // Check if the input is empty
    if (!empty($_POST['input'])) {
        $str = $_POST['input']; // Store the input in a variable

        // Check if the input only contains letters or spaces
        $pattern = "/^[A-Za-z ]+$/";
        if (preg_match($pattern, $str)) {
            $ans = ""; // Initialize an empty string to store the result
            $len = strlen($str); // Get the length of the input string
            // Iterate through each letter in the string
            for ($i = 0; $i < $len; $i++) {
                $letter = substr($str, $i, 1); // Get the current letter
                // Check if the letter is not a vowel
                if (!is_numeric(strpos("AEIOUaeiou", $letter))) {
                    // Concatenate the letter to the result string
                    $ans = $ans . $letter;
                }
            }
            // Output the result string
            echo "<p>The word with no vowels is ", $ans, ".</p>";
        } else {
            // Output an error message if the input contains characters other than letters or spaces
            echo "<p>Please enter a string containing only letters or space.</p>";
        }
    } else {
        // Output an error message if the input is empty
        echo "<p>Please enter string from the input form.</p>";
    } ?>
</body>

</html>