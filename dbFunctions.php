<?php
// $db_host = "localhost";
$db_host = "sql208.infinityfree.com";
// $db_username = "root";
$db_username = "if0_35676500";
// $db_password = "";
$db_password = "pYuHwDuOVQd";
// $db_name = "hotel_review";
$db_name = "if0_35676500_hotel_review";
$link = mysqli_connect($db_host,$db_username,$db_password,$db_name) or 
        die(mysqli_connect_error());
?>
