<?php
session_start(); // start the session

// check if session variable exists
if (isset($_SESSION["randomNumber"])) {
    // display the random number
    echo "<p>The random number was " . $_SESSION["randomNumber"] . ".</p>";
} else {
    // let user know that there is no active game
    echo "<p>There is no active game.</p>";
}
?>