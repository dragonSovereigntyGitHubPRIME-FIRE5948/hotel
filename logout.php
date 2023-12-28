<?php
session_start();
if (isset($_SESSION['userID'])) {
    session_unset();
    session_destroy();
    $_SESSION = array();
    
    header("Location: login.php");
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
        <?php
        ?>
    </body>
</html>
