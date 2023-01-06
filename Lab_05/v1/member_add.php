<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Lab05 Task 2 - VIP member Registration System</title>
    <h1>Web Development - Week 05</h1>
    <h2>Task 2: VIP member Registration System</h2>
</head>

<body>
    <?php
    //personal information
    require_once '../../conf/settings.php';

    //connection details
    $conn = @mysqli_connect($sql_host, $sql_user, $sql_pass, $sql_db);

    // Checks if connection is successful
    if (!$conn) {
        // Displays an error message
        echo '<p>Database connection failure</p>';
    } else {
        // Upon successful connection

        //checking for database
        $table_exists = mysqli_query($conn, 'SELECT * FROM vipmember;');
        if (!$table_exists) {
            //creating table in database
            $create_table =
                'CREATE TABLE vipmember (member_id int AUTO_INCREMENT PRIMARY KEY, fname VARCHAR(40), lname VARCHAR(40), gender VARCHAR(1), email VARCHAR(40), phone VARCHAR(20))';
            mysqli_query($conn, $create_table);
        }

        // Get data from the form
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        // Set up the SQL command to add the data into the table
        $insert_query = "INSERT INTO `vipmember` (`fname`, `lname`, `gender`, `email`, `phone`) VALUES ('$fname','$lname','$gender','$email','$phone');";
        $insert_results = mysqli_query($conn, $insert_query);
        // checks if the execution was successful
        if (!$insert_results) {
            echo '<p>Something is wrong with ', $insert_query, '</p>';
        } else {
            // display an operation successful message
            echo '<p>Success</p>';
            mysqli_free_result($insert_result);
        } // if successful query operation
        mysqli_free_result($create_result);

        // close the database connection
        mysqli_close($conn);
    }

    // if successful database connection
    ?>
    <p><a href='vip_member.php'>Return to Home</a></p>
</body>

</html>