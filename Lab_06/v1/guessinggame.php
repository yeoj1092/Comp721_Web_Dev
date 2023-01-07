<?php
session_start();
if (!isset($_SESSION["guesses"])) {
  $_SESSION["guesses"] = 0;
}

if (!isset($_SESSION["randnum"])) {
  $randnum = rand(0, 100);
  $_SESSION["randnum"] = $randnum;
}

$guesses = $_SESSION["guesses"];
$number = $_SESSION["randnum"];
?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Lab06 Task 2 - Guessing Game</title>
</head>

<body>
  <h1>Web Development - Week 06</h1>
  <h2> Task 2: Guessing Game</h2>

  <p>Enter a number between 0 and 100,<br>
    then press the Guess button</p>

  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="text" name="input" pattern="^0$|^[1-9]$|^[1-9][0-9]$|^100$">
    <input type="submit" name="guess" value="Guess">
  </form>

  <?php

  if (($_POST["input"] != null) && isset($_POST["guess"])) {
    $input = $_POST["input"];

    if ($input > $number) {
      echo "<br>Your guess is too high";
    }
    if ($input < $number) {
      echo "<br>Your guess is too low";
    }
    if ($input == $number) {
      echo "<br>Congratulations! you guessed the hidden message";
      //resets game when number is found
      session_destroy();
    }
    $guesses = ++$_SESSION["guesses"];
  }
  echo "<br>number of guesses: $guesses";

  ?>

  <p><a href="giveup.php">Give Up</a></p>
  <p><a href="startover.php">Start Over </a> </p>

</body>

</html>