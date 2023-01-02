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

    // Use a function to display the values in the array
    function displayDays($days)
    {
        // Use a foreach loop to display the values in the $days array, separated by a comma
        foreach ($days as $index => $day) {
            if ($index == count($days) - 1) {
                // If the current value is the last value in the array, add a period instead of a comma
                echo $day . '.';
            } else {
                // If the current value is not the last value in the array, add a comma
                echo $day . ', ';
            }
        }
    }

    // Display the message "The Days of the week in English are:"
    echo '<p>The Days of the week in English are:<br>';
    displayDays($days);

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
    displayDays($days);
    ?>
</body>

</html>