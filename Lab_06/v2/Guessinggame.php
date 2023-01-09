<?php
session_start(); // start the session

// check if session variable exists, if not create it and generate a random number
if (!isset($_SESSION['randomNumber'])) {
    $_SESSION['randomNumber'] = rand(0, 100);
    $_SESSION['guesses'] = 0;
}

// check if user has submitted a guess
if (isset($_POST['guess'])) {
    $guess = (int) $_POST['guess']; // cast user's guess to an integer

    // check if user's guess is within range (0-100) and is numeric
    if ($guess >= 0 && $guess <= 100 && is_numeric($guess)) {
        // increment number of guesses
        $_SESSION['guesses']++;

        // check if user's guess is correct
        if ($guess == $_SESSION['randomNumber']) {
            $message =
                'Congratulations! You guessed the correct number in ' .
                $_SESSION['guesses'] .
                ' guesses.';
        } else {
            // let user know if their guess is too high or too low
            $message =
                'Your guess is ' .
                ($guess < $_SESSION['randomNumber'] ? 'too low' : 'too high') .
                '.';
        }
    } else {
        // let user know their input is invalid
        $message = 'Invalid input. Please enter a number between 0 and 100.';
    }
}
?>

<html>
<head>
<title>Lab06 Task 2 - Guessing Game</title>
</head>
<body>
<h1>Web Development - Week 06</h1>
  <h2> Task 2: Guessing Game</h2>

<?php // display message if set
if (isset($message)) {
    echo '<p>' . $message . '</p>';
} ?>

<form method="post">
<label for="guess">Enter your guess:</label>
<input type="text" name="guess" id="guess" />
<input type="submit" value="Guess" />
</form>

<p>Number of guesses: <?php echo $_SESSION['guesses']; ?></p>

<p><a href="giveup.php">Give Up</a></p>
<p><a href="startover.php">Start Over</a></p>
</body>
</html>