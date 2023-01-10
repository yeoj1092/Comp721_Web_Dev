<!-- file data.php -->
<?php
// Get name and password passed from client
$name = $_POST['name'];
$pwd = $_POST['pwd'];

// Include database settings
require_once("../../conf/settings.php");

// Connect to database
$conn = @mysqli_connect(
	$sql_host,
	$sql_user,
	$sql_pass,
	$sql_db
);

// Check for connection errors
if (!$conn) {
	// DATABASE NOT CONNECTED
	echo "ERROR: Database not connected";
} else {
	// DATABASE CONNECTED

	// Check if name is in database
	$check_username_query = "SELECT email FROM lab7 WHERE username = '$name';";
	$check_username_results = mysqli_query($conn, $check_username_query);

	// Check for query errors or no matching rows
	if (!$check_username_results || !mysqli_num_rows($check_username_results)) {
		// Error: name not found in database
		echo "Error: Name not found in database.";
	} else {
		// Name is in database, check password

		// Check if name and password match in database
		$check_query = "SELECT email FROM lab7 WHERE username = '$name' AND password = '$pwd';";
        	$check_results = mysqli_query($conn, $check_query);

		// Check for query errors or no matching rows
		if ($row = mysqli_fetch_assoc($check_results)) {
			// Name and password match, return email address
			$email = $row["email"];
			echo "Email: $email";
		} else {
			// Password is incorrect
			echo "Error: Incorrect password";
		}
	}
}

// Close database connection
mysqli_close($conn);
?>