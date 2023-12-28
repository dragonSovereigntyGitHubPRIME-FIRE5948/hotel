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
               <?php include "navbar.php"; ?>

        <h1>Edit Account</h1>
                
                   <div class="row">

=            <div class="col-6 justify-content-center" style="margin-top:10px;">

           <form id="editAccount" method="post" action="doEditAccount.php">


                    <!-- C2 Row 1  -->
                    <div class="row g-3 float-center">

                        <!-- Username -->        

                        <div class="form-floating w280">
                            <input required type="text" class="form-control" name="editusername" placeholder="Please enter your username" value="<?php echo $username; ?>">
                            <label for="floatingInput">Username</label>
                        </div>

                        <!-- Name -->

                        <div class="form-floating w280">
                            <input required type="text" class="form-control" name="editname" placeholder="Please enter your name" value="<?php echo $name; ?>">
                            <label for="floatingInput">Name</label>
                        </div>
                    </div>

                    <!-- C2 Row 2  -->
                    <div class="row g-3 justify-content-start">         


                    <!-- C2 Row 3  -->
                    <div class="row g-3 justify-content-start">
                        <!--         Address -->
                        <div class="form-floating w560">
                            <input required type="text" class="form-control" name="editaddress" placeholder="Please enter your address" value="<?php echo $address; ?>">
                            <label for="floatingInput">Address</label>
                        </div>
                    </div>  

                    <!-- C2 Row 4  -->
                    <div class="row g-3 justify-content-starts">
                        <!--         E-mail -->
                        <div class="form-floating w560">
                            <input required type="email" class="form-control" name="editemail" placeholder="Please enter your e-mail" value="<?php echo $email; ?>">
                            <label for="floatingInput">E-mail</label>
                        </div>
                    </div>          

                    <!-- Btns -->
                    <input class="btn btn-primary" type="reset" value="Reset" id="btnReset"
                           style="margin-top:40px;">        
                    <input class="btn btn-primary" type="submit" value="Submit" id="btnSubmit" 
                           style="margin-right:110px; margin-top:40px; margin-left:20px;">
                    </div>
        </form>
    
                Change <a href="newPassword.php?id=<?php echo $userid ?>">Password</a> now!
                Delete <a href="deleteAccount.php?id=<?php echo $userid ?>"> now!</a>
            </div>
                    

        </div>
           
               
         
  
        
        <?php
        // put your code here
        ?>
    </body>
</html>
