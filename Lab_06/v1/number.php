<?php
session_start();
if (!isset($_SESSION["number"])) {
    $_SESSION["number"] = 0;
}
$num = $_SESSION["number"];
?>

<html>

<head>
    <title>Lab06 Task 1 - Number Counter</title>
</head>

<body>
    <h1>Web Development - Week 06</h1>
    <h2> Task 1: Number Counter</h2>
</body>
<?php
echo "<p>The number is $num</p>";
?>
<p><a href="numberup.php">Up</a></p>
<p><a href="numberdown.php">Down</a></p>
<p><a href="numberreset.php">Reset</a></p>

</html>