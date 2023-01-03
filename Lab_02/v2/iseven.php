<!DOCTYPE html>
<html>

<head>
    <title>Lab02 Task 2 - iseven</title>
</head>

<body>
    <h1>Web Development - Week 02</h1>
    <h2>Task 2: iseven</h2>
    <?php
    // Get the value of the "num" variable from the GET request
    $num = $_GET['num'];

    // Use a conditional operator to determine whether the variable contains an integer and whether the integer is even
    $message =
        is_int($num) && $num % 2 == 0
        ? "The number $num is even."
        : "The number $num is not even.";

    // Use an output statement to display the message
    echo $message;
    ?>
</body>

</html>