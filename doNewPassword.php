<?php
session_start();
//same new and old passwords

//if (isset($_SESSION['userID'])) {
//    header("Location: login.php?error=Please log in to change password");
//    exit();
//} else {
    //empty password inputs (already have 'required' but this for safety measure)
    if (isset($_POST['oldpassword'], $_POST['newpassword'], $_POST['renewpassword'])) {

//get form inputs
        $oldpassword = $_POST['oldpassword'];
        $newpassword = $_POST['newpassword'];
        $renewpassword = $_POST['renewpassword'];

        if (empty($oldpassword)) {
            header("Location: newPassword.php?msg=Please enter current password");
            exit();
        } else if (empty($newpassword)) {
            header("Location: newPassword.php?msg=Please enter new password");
            exit();
        } else if (empty($renewpassword)) {
            header("Location: newPassword.php?msg=Please re-enter new password");
            exit();
        } else if ($newpassword !== $renewpassword) {
            header("Location: newPassword.php?msg=New passwords do not match");
            exit();
        } else {

            include ("dbFunctions.php");

//            get passsword
            $queryRetrieve = "SELECT password
                        FROM users
                        WHERE userId = '" . $_SESSION['userID'] . "'";
            
            $resultgetpassword = mysqli_query($link, $queryRetrieve) or die(mysqli_error($link));

            if (mysqli_num_rows($resultgetpassword) == 1) {
            $row =mysqli_fetch_array($resultgetpassword);
        } else{
            header("Location: newPassword.php?msg=You have entered the wrong current password");
            exit();
        }
        
        if ($row['password'] === sha1($oldpassword)) {
            //change
            $query = "UPDATE users
                        SET password = SHA1('$newpassword')
                        WHERE userId = '" . $_SESSION['userID'] . "'";

            $result = mysqli_query($link, $query) or die(mysqli_error($link));

        }
            if ($result) {
                header("Location: newPassword.php?msg=Password successfully updated");
                exit();
            } else {
                header("Location: newPassword.php?msg=You have entered the wrong current password");
                exit();
            }
            }
        }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    </body>
</html>
