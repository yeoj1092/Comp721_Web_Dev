<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Lab05 Task 1 - Display Cars</title>
</head>

<body>
    <h1>Web Development - Week 05</h1>
    <h2>Task 1: Display Cars</h2>
    <?php
    require_once '../../conf/settings.php';

    $conn = @mysqli_connect($sql_host, $sql_user, $sql_pass, $sql_db);

    if (!$conn) {
        echo '<p>failed to connect to database</p>';
    } else {
        $query = 'SELECT car_id,make,model,price FROM cars';
        $result = mysqli_query($conn, $query);

        if (!$result) {
            echo '<p>Something is wrong with ', $query, '</p>';
        } else {
            // Display the retrieved records
            echo "<table border=\"1\">";
            echo "<tr>\n" .
                "<th scope=\"col\">ID</th>\n" .
                "<th scope=\"col\">Make</th>\n" .
                "<th scope=\"col\">Model</th>\n" .
                "<th scope=\"col\">Price</th>\n" .
                "</tr>\n";

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>', $row['car_id'], '</td>';
                echo '<td>', $row['make'], '</td>';
                echo '<td>', $row['model'], '</td>';
                echo '<td>', $row['price'], '</td>';
                echo '</tr>';
            }
            echo '</table>';

            mysqli_free_result($result);
        }
        mysqli_close($conn);
    }
    ?>
</body>

</html>