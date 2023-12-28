<?php
session_start();
include ("dbFunctions.php");


$editusername = $_POST['editusername'];
$editname = $_POST['editname'];
$editaddress = $_POST['editaddress'];
$editemail = $_POST['editemail'];

$msg = "";

$query = "UPDATE users 
                SET username='$editusername', name='$editname', address='$editaddress', email='$editemail'
                WHERE userId = '" . $_SESSION['userID'] . "'";

$result = mysqli_query($link, $query) or die(mysqli_error($link));

if ($result) {
    $msg = "record successfully updated";
} else {
    $msg = "record not updated";
}
?>

<!DOCTYPE html>
<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="styles/style.css" rel="stylesheet" type="text/css"/>
        <link href="styles/navbar.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <!-- Navbar -->
        <?php include "navbar.php"; ?>
    </body>
</html>
