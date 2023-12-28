
<?php // 
session_start();
include ("dbFunctions.php");

$query = "SELECT *
          FROM users
          WHERE userId = '" . $_SESSION['userID'] . "'";
              
$result = mysqli_query($link, $query) or die(mysqli_error($link));

$row = mysqli_fetch_array($result);

if (!empty($row)) {
    $username = $row['username'];
    $password = $row['password'];
    $userid = $row['userId'];
    $name = $row['name'];
    $address = $row['address'];
    $email = $row['email'];
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
        
        <h1>Delete Account for <?php echo $hotelname ?></h1>

        <!-- Form -->
        <form id="editReview" method="post" action="doEditReview.php">  

            <!-- Btns -->
            <input type="hidden" name="userid" value="<?php echo $userid ?>"/>
            <input type="submit" value="Delete" />	
        </form>
    </body>
</html>
