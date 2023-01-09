<?php
session_start(); // start the session
if (!isset($_SESSION["number"])) { // check if session variable exists
    $_SESSION["number"] = 0; // create the session variable
}
$num = $_SESSION["number"]; // copy the value to a variable
?>
<html>

<head>
    <title>Lab06 Task 1 - Number Counter</title>
</head>

<body>
    <h1>Web Development - Week 06</h1>
    <h2> Task 1: Number Counter</h2>
    <?php
    echo "<p>The number is $num</p>"; // displays the number
    ?>
    <!--links to updating page -->
    <p><a href="numberup.php">Up</a></p>
    <p><a href="numberdown.php">Down</a></p>
    <p><a href="numberreset.php">Reset</a></p>
</body>

</html>