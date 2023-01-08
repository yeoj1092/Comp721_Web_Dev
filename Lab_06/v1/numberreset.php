<?php
session_start();
$num = $_SESSION["number"];
$num = 0;
$_SESSION["number"] = $num;
header("location:number.php");
?>