<!--file data.php -->
<?php
// get name and password passed from client
$name = $_POST['name'];
$pwd = $_POST['pwd'];

//database details
require_once("../../conf/settings.php");

$conn = @mysqli_connect(
	$sql_host,
	$sql_user,
	$sql_pass,
	$sql_db
);

if (!$conn) {
	//DATABASE NOT CONNECTED
	echo "ERROR: Database not connected";
} else {
	// DATABASE CONNECTED

	//query checks username
	$check_username_query = "SELECT email FROM lab7 WHERE username = '$name';";
	$check_username_results = mysqli_query($conn, $check_username_query);

	//username not match in database
	if (!mysqli_num_rows($check_username_results)) {
		//error output
		echo "Username does not match in database.";
	} else {

		//query check for database
		$check_query = "SELECT email FROM lab7 WHERE username = '$name' AND password = '$pwd';";
		$check_results = mysqli_query($conn, $check_query);

		//if username and password match in database
		if ($row = mysqli_fetch_assoc($check_results)) {
			//$username = $row["username"];
			//$password = $row["password"];
			$email = $row["email"];
			echo "Email: $email";
		} else {
			//password not match in database.
			if ($pwd != $password) {
				//error output
				echo "Password is incorrect";
			}
		}
	}
}
// sleep for 10 seconds to slow server response down
sleep(1);
// write back the password concatenated to end of the name

?>