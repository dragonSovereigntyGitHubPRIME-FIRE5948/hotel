<?php
session_start();

$msg = "";
$link = "";
include("dbFunctions.php");

//
$username = $_POST['username'];
$email = $_POST['email'];

$query = "SELECT username, email, userId FROM users 
        WHERE username='$username' AND email='$email'";


$result = mysqli_query($link, $query) or die(mysqli_error($link));

         if (mysqli_num_rows($result) == 1) {
             $row =mysqli_fetch_array($result);
             $userid = $row['userId'];
             
           $link = 'This is the link to change password <a href="newPassword.php?id=' . $userid . '">click here</a>' ;
            if (mail($email,"Reset password",$link)){
                           $msg = "E-mail sent";
            }
         }   else {
$msg = "Wrong username or e-mail";
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
        
                    Haven't Received> <a href="mailto:<?php $email ?>" target="_blank">Click here!</a><br/>
                    
        <?php
        
        echo $msg;
        ?>
    </body>
</html>
