<!DOCTYPE html>
<?php
if (!isset($_SESSION["randnum"])) {
  $randnum = rand(1, 100);
  $_SESSION["randnum"] = $randnum;
}

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
  <?php
  echo "<p style='color:blue;'>The hidden number was: $number</p>";
  ?>
  <a href="startover.php">Start Over</a>

</body>

</html>