<?php
session_start();
$remember = $_POST['remember'];

//already logged in
if (isset($_SESSION['userID'])) {
    header("Location: login.php?error=Already logged in");
    exit();
} else {
    //empty username or password (already have 'required' but this for safety measure)
    if(isset($_POST['username']) && isset($_POST['password'])) {

        $login_username = $_POST['username'];
        $login_password = $_POST['password'];

        if (empty($login_username)) {
         header("Location: login.php?error=User Name is required");
        exit();
        } else if (empty($login_password)) {
        header("Location: login.php?error=Password is required");
        exit();

    //login
    } else {


        include "dbFunctions.php";

        
        $query = "SELECT * FROM users 
                    WHERE username='$login_username' AND 
                    password = SHA1('$login_password')";

        $result = mysqli_query($link, $query) or die(mysqli_error($link));

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $_SESSION['userID'] = $row['userId'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['name'] = $row['name'];

        header("Location: hotelList.php");
        } else {
        header("Location: login.php?error=Incorrect Username or Password");
        }
    }
}
}

if (isset($remember)){
    setCookie("rememberUsername", $login_username, time()+86400 * 30);
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

        <?php
        ?>
    </body>
</html>
