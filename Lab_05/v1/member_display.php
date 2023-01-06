<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Lab05 Task 2 - VIP member Registration System</title>
    <h1>Web Development - Week 05</h1>
    <h2> Task 2: VIP member Registration System</h2>
</head>

<body>
    <h1>Display Data</h1>
    <?php
    // sql info or use include 'file.inc'
    require_once '../../conf/settings.php';

    // The @ operator suppresses the display of any error messages
    // mysqli_connect returns false if connection failed, otherwise a connection value
    $conn = @mysqli_connect($sql_host, $sql_user, $sql_pass, $sql_db);

    // Checks if connection is successful
    if (!$conn) {
        // Displays an error message
        echo '<p>Database connection failure</p>';
    } else {
        // Upon successful connection

        // Set up the SQL command to add the data into the table
        $display_query = 'SELECT * FROM vipmember';
        $result = mysqli_query($conn, $display_query);

        // checks if the execuion was successful
        if (!$result) {
            echo '<p>Something is wrong with ', $query, '</p>';
        } else {
            // Display the retrieved records
            echo "<table border=\"1\">";
            echo "<tr>\n" .
                "<th scope=\"col\">member_id</th>\n" .
                "<th scope=\"col\">fname</th>\n" .
                "<th scope=\"col\">lname</th>\n" .
                "</tr>\n";

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>', ucfirst($row['member_id']), '</td>';
                echo '<td>', ucfirst($row['fname']), '</td>';
                echo '<td>', ucfirst($row['lname']), '</td>';
                echo '</tr>';
            }
            echo '</table>';

            echo "<p><a href='vip_member.php'>Return to Home</a>";
            // Frees up the memory, after using the result pointer
            mysqli_free_result($result);
        } // if successful query operation

        // close the database connection
        mysqli_close($conn);
    }

    // if successful database connection
    ?>
</body>

</html>