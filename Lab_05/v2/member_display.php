<html>

<head>
    <title>Lab05 Task 2 - VIP member Registration System</title>
</head>

<body>
    <h1>Web Development - Week 05</h1>
    <h2>Task 2: VIP member Registration System</h2>
    <h3>Display All Members Page</h3>

    <?php
    require_once '../../conf/settings.php';
    // Connect to the database
    $conn = mysqli_connect($host, $user, $password, $dbname);

    // Check connection
    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    // Select the member_id, fname, and lname columns from the vipmember table
    $query = 'SELECT member_id, fname, lname FROM vipmember';
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if (!$result) {
        die('Query failed: ' . mysqli_error($conn));
    }

    // Display the results in a table
    echo '<table>';
    echo '<tr><th>Member ID</th><th>First Name</th><th>Last Name</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['member_id'] . '</td>';
        echo '<td>' . $row['fname'] . '</td>';
        echo '<td>' . $row['lname'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';

    // Close the database connection
    mysqli_close($conn);
    ?>
</body>

</html>