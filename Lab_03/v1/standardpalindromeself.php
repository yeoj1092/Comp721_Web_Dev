<!DOCTYPE html>
<html>

<head>
  <title>Lab03 Task 3 - Extra Challenge</title>
</head>

<body>
  <?php // Check if the form has been submitted
  if (isset($_POST['input'])) {
    // Get the user input from the form
    $input = $_POST['input'];

    // Convert the input to upper case and remove all non-alphabetic characters
    $input = preg_replace('/[^a-zA-Z]/', '', strtoupper($input));

    // Reverse the input
    $reversed = strrev($input);

    // Compare the input and reversed strings
    if (strcmp($input, $reversed) == 0) {
      // The strings are identical, so the input is a standard palindrome
      echo "The text you entered: '$input' is a standard palindrome.";
    } else {
      // The strings are not identical, so the input is not a standard palindrome
      echo "The text you entered: '$input' not a standard palindrome.";
    }
  } else {
    // Display the form
  ?>
    <h1>Web Development - Week 03</h1>
    <h2>Task 3: Extra Challenges</h2>
    <form method="POST" action="">
      <label for="input">Enter a word or phrase:</label>
      <input type="text" name="input">
      <input type="submit" value="Submit">
    </form>
  <?php
  } ?>
</body>

</html>