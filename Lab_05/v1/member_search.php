<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Lab05 Task 2 - VIP member Registration System</title>
    <h1>Web Development - Week 05</h1>
    <h2>Task 2: VIP member Registration System</h2>
</head>

<body>
    <h1>Search Data Form</h1>
    <form method="post" action="member_search.php">
        <p> <label for="lname">Enter Last Name: </label>
            <input type="text" name="lname" id="lname" />
        </p>
        <p> <input type="submit" name="search" value="Search" /></p>
    </form>

    <?php if (isset($_POST['search'])) {
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

            // Get data from the form
            $lname = $_POST['lname'];

            //search
            $search_query = "select * from vipmember where lname = '$lname'";

            // executes the query and store result into the result pointer
            $search_result = mysqli_query($conn, $search_query);
            // checks if the execuion was successful
            if (!$search_result) {
                //failed
                echo "<p>No Last name with $lname</p>";
            } else {
                //successful
                // Display the retrieved records
                echo "<table border=\"1\">";
                echo "<tr>\n" .
                    "<th scope=\"col\">member_id</th>\n" .
                    "<th scope=\"col\">fname</th>\n" .
                    "<th scope=\"col\">lname</th>\n" .
                    "<th scope=\"col\">email</th>\n" .
                    "</tr>\n";
                while ($row = mysqli_fetch_assoc($search_result)) {
                    echo '<tr>';
                    echo '<td>', $row['member_id'], '</td>';
                    echo '<td>', ucfirst($row['fname']), '</td>';
                    echo '<td>', ucfirst($row['lname']), '</td>';
                    echo '<td>', $row['email'], '</td>';
                    echo '</tr>';
                }
                echo '</table>';

                // Frees up the memory, after using the result pointer
                mysqli_free_result($search_result);
            } // if successful query operation

            // close the database connection
            mysqli_close($conn);
        } // if successful database connection
    } ?>
    <p><a href='vip_member.php'>Return to Home</a></p>
</body>

</html>