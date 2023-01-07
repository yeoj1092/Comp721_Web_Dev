<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Lab05 Task 1 - Display Cars</title>
</head>

<body>
    <h1>Web Development - Week 05</h1>
    <h2>Task 1: Display Cars</h2>
    <?php
    require_once '../../conf/settings.php'; //please make sure the path is correct

    // Connect to the database
    $conn = mysqli_connect($host, $user, $password, $dbname);

    // Check connection
    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    // Select only the car_id, make, model, and price columns from the cars table
    $query = 'SELECT car_id, make, model, price FROM cars';
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if (!$result) {
        die('Query failed: ' . mysqli_error($conn));
    }

    // Display the data in a HTML table
    echo '<table>';
    echo '<tr>';
    echo '<th>Car ID</th>';
    echo '<th>Make</th>';
    echo '<th>Model</th>';
    echo '<th>Price</th>';
    echo '</tr>';

    // Iterate over the rows of the result and print them in the table
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['car_id'] . '</td>';
        echo '<td>' . $row['make'] . '</td>';
        echo '<td>' . $row['model'] . '</td>';
        echo '<td>' . $row['price'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';

    // Close the database connection
    mysqli_close($conn);
    ?>
</body>

</html>