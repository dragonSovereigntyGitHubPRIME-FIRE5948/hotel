<!DOCTYPE html>
<?php
session_start();

include("dbFunctions.php");

$msg = "";
//
$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['RE_password'];
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];


//if (isset($_POST['extra'])) {
//    $extraArray = $_POST['extra'];
//    for ($i = 0; $i < count($extraArray); $i++) {
//        $extraAddition .= $extraArray[$i] . ",";
//    }
//}

//$passwordhash = password_hash($password, PASSWORD_DEFAULT);

$queryInsert = "INSERT INTO users (username, password, name, address, email)
                VALUES ('$username', SHA1('$password'), '$name', '$address', '$email')";

$result = mysqli_query($link, $queryInsert) or die(mysqli_error($link));

if ($result) {
    $message = "Record inserted successfully.";
} else {
    $message = "Record not inserted.";
}

mysqli_close($link);
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
        echo $username.$password.$repassword.$name.$address.$email;
        echo $message;
        ?>
    </body>
</html>
