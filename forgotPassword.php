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

        <h1>Forgot Password</h1>
        
                   <?php if (isset($_GET['error'])) { 
                       
                       if ($_GET['error'] === "ok") {?>

                Forgot password? <a href="mailto:<?php ?>" target="_blank">Click here!</a><br/>

                       <?php } else { ?>  <p class="error"><?php echo $_GET['error']; ?></p>

                       <?php }} ?>
        
        
                        <form method="post" action="doForgotPassword.php">

                 <div class="form-floating w280">
                            <input required type="text" class="form-control" name="username" placeholder="Please enter your username">
                            <label for="floatingInput">Username</label>
                        </div>

                        <!-- email -->

                        <div class="form-floating w280">
                            <input required type="email" class="form-control" name="email" placeholder="Please enter your e-mail">
                            <label for="floatingInput">E-mail</label>
                        </div>
                        
                         <input class="btn btn-primary" type="submit" value="send e-mail" id="btnSubmit" 
                           style="margin-right:110px; margin-top:40px; margin-left:20px;">
                        </form>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
