<?php
session_start(); // start the session
session_destroy(); // destroy all data associated with the session
header("location:guessinggame.php"); // redirect to guessinggame.php
?>