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
    // Check if the "input" key is set in the $_POST array
    if (isset($_POST['input'])) {
        $str = $_POST['input'];
        $pattern = '/^[A-Za-z ]+$/';
        if (preg_match($pattern, $str)) {
            $ans = '';
            $len = strlen($str);
            for ($i = 0; $i < $len; $i++) {
                $letter = substr($str, $i, 1);
                // Check if the letter is not a vowel
                if (!is_numeric(strpos('AEIOUaeiou', $letter))) {
                    $ans .= $letter; // Concatenate letter to answer
                }
            }
            // Output the result
            echo "<p>The word with no vowels is $ans.</p>";
        } else {
            // Input string contains characters other than letters or spaces
            echo '<p>Please enter a string containing only letters or space.</p>';
        }
    } else {
        // No input provided
        echo '<p>Please enter a string from the input form.</p>';
    } ?>
</body>

</html>