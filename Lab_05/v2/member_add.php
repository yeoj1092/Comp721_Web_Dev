<?php
require_once '../../conf/settings.php';
// Connect to the database
$conn = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Create the vipmember table if it does not exist
$query = "CREATE TABLE IF NOT EXISTS vipmember (
  member_id INT AUTO_INCREMENT PRIMARY KEY,
  fname VARCHAR(40) NOT NULL,
  lname VARCHAR(40) NOT NULL,
  gender VARCHAR(1) NOT NULL,
  email VARCHAR(40) NOT NULL,
  phone VARCHAR(20) NOT NULL
)";
$result = mysqli_query($conn, $query);

// Check if the query was successful
if (!$result) {
    die('Query failed: ' . mysqli_error($conn));
}

// Get the form data
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Insert the data into the vipmember table
$query = "INSERT INTO vipmember (fname, lname, gender, email, phone) VALUES ('$fname', '$lname', '$gender', '$email', '$phone')";
$result = mysqli_query($conn, $query);

// Check if the query was successful
if (!$result) {
    die('Query failed: ' . mysqli_error($conn));
}

// Close the database connection
mysqli_close($conn);

// Redirect to the display page
header('Location: member_display.php');
exit();
