<!DOCTYPE html>
<html>

<head>
  <title>Lab03 Task 3 - Extra Challenge</title>
</head>

<body>
  <?php
  // Check if the form has been submitted
  if (isset($_POST['input'])) {
    // Get the input string from the form and remove non-alphanumeric characters
    $input = preg_replace('/[^A-Za-z0-9]/', '', $_POST['input']);

    // Reverse and convert the input string to lower case
    $reversed = strtolower(strrev($input));

    // Compare the input and reversed strings and output the appropriate message
    echo strcmp($input, $reversed) == 0
      ? "The text you entered: '$input' is a standard palindrome."
      : "The text you entered: '$input' is not a standard palindrome.";
  } else {
    // The form has not been submitted, so display the form
  ?>
    <h1>Web Development - Week 03</h1>
    <h2>Task 3: Extra Challenges</h2>
    <form action="<?php echo htmlspecialchars(
                    $_SERVER['PHP_SELF']
                  ); ?>" method="post">
      <label for="input">Enter a word or phrase:</label><br>
      <input type="text" id="input" name="input"><br>
      <input type="submit" value="Submit">
    </form>
  <?php
  }
  ?>
</body>

</html>