<html>

<head>
    <title>Lab05 Task 2 - VIP member Registration System</title>
</head>

<body>
    <h1>Web Development - Week 05</h1>
    <h2>Task 2: VIP member Registration System</h2>
    <h3>Search Member Page</h3>


    <!-- Form to search for members by last name -->
    <form method="post" action="member_search.php">
        Last name: <input type="text" name="lname"><br>
        <input type="submit" value="Search">
    </form>

    <?php // Check if a last name was entered
    if (isset($_POST['lname'])) {
        require_once '../../conf/settings.php';

        // Connect to the database
        $conn = mysqli_connect($host, $user, $password, $dbname);

        // Check connection
        if (!$conn) {
            die('Connection failed: ' . mysqli_connect_error());
        }

        // Get the last name from the form
        $lname = $_POST['lname'];

        // Select the member_id, fname, lname, and email columns from the vipmember table where the lname column matches the entered last name
        $query = "SELECT member_id, fname, lname, email FROM vipmember WHERE lname='$lname'";
        $result = mysqli_query($conn, $query);

        // Check if the query was successful
        if (!$result) {
            die('Query failed: ' . mysqli_error($conn));
        }

        // Display the results in a table
        echo '<table>';
        echo '<tr><th>Member ID</th><th>First Name</th><th>Last Name</th><th>Email</th></tr>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['member_id'] . '</td>';
            echo '<td>' . $row['fname'] . '</td>';
            echo '<td>' . $row['lname'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';

        // Close the database connection
        mysqli_close($conn);
    } ?>
</body>

</html>