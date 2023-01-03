<!DOCTYPE html>
<html>

<head>
    <title>Lab02 Task 1 - Days of the Week</title>
</head>

<body>
    <?php
    // Declare and initialize the $days array with the days of the week in English
    $days = [
        'Sunday',
        'Monday',
        'Tuesday',
        'Wednesday',
        'Thursday',
        'Friday',
        'Saturday',
    ];

    // Display the message "The Days of the week in English are:"
    echo '<p>The Days of the week in English are:<br>';

    // Use the implode function to join the elements of the array into a string, separated by a comma
    $daysString = implode(', ', $days);

    // Use the echo function to output the string
    echo $daysString . '.';

    // Reassign the values in the $days array with the days of the week in French
    $days = [
        'Dimanche',
        'Lundi',
        'Mardi',
        'Mercredi',
        'Jeudi',
        'Vendredi',
        'Samedi',
    ];

    // Display the message "The days of the week in French are:"
    echo '<p>The days of the week in French are:<br>';

    // Use the implode function to join the elements of the array into a string, separated by a comma
    $daysString = implode(', ', $days);

    // Use the echo function to output the string
    echo $daysString . '.';
    ?>
</body>

</html>