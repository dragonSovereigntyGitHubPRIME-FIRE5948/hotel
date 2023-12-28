<?php
session_start();
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

        <h1>Change Password</h1>
        
                            <!-- Msg -->
              <?php if (isset($_GET['msg'])) { ?>

            <p><?php echo $_GET['msg']; ?></p>
       

        <?php } ?>
        
                   <form method="post" action="doNewPassword.php">

                             <!-- Old Password -->
                        <div class="form-floating w560">
                            <input required type="password" class="form-control" name="oldpassword" placeholder="Please enter your old password">
                            <label for="floatingInput">Current Password</label>
                        </div>
                             
                                <!-- New Password -->
                        <div class="form-floating w560">
                            <input required type="password" class="form-control" name="newpassword" placeholder="Please enter your new password">
                            <label for="floatingInput">New Password</label>
                        </div>

                        <!--         Re-enter New Password -->
                        <div class="form-floating w560">
                            <input required type="password" class="form-control" name="renewpassword" placeholder="Please re-enter your new password">
                            <label for="floatingInput">Re-enter New Password</label>
                        </div>
                        
                                     <!-- Btns -->
                    <input class="btn btn-primary" type="reset" value="Reset" id="btnReset"
                           style="margin-top:40px;">        
                    <input class="btn btn-primary" type="submit" value="Submit" id="btnSubmit" 
                           style="margin-right:110px; margin-top:40px; margin-left:20px;">
                   </form>
    </body>
</html>
