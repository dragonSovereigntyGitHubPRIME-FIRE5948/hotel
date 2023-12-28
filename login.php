<?php
session_start();
$cookieUsername = "";

if (isset($_COOKIE['rememberUsername'])){
    $cookieUsername = $_COOKIE['rememberUsername'];
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

        <h1>Login Page</h1>
        
                    <!-- Error -->
              <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>
            
        <div class="row">
            
                      <div class="col-6 d-flex justify-content-end">

                <img class="formIMG" src="images/MBS.jpg">

            </div>
            
        <div class="col-6 justify-content-center" style="margin-top:10px;">
        <!-- Login Form -->
        <form class="loginform" method="post" action="doLogin.php">
            
            
            <!-- Username -->           
            <div class="form-floating w280">
                <input required type="text" class="form-control" name="username" placeholder="Please enter your username" value="<?php echo $cookieUsername; ?>">
                <label for="floatingInput">Username</label>
            </div>

            <!-- Remember Me -->
            <div class="form-switch">
                <input class="form-check-input" type="checkbox" id="switchRemember" name="remember">
                <label class="form-check-label" for="switchRemember">Remember username</label>
            </div>

            <!-- Password -->
            <div class="form-floating w280">
                <input required type="password" class="form-control" name="password" placeholder="Please enter your password">
                <label for="floatingInput">Password</label>
            </div>
            
            <!-- Submit -->
            <input class="btn btn-primary" type="reset" value="Reset" id="btnReset"
                   style="margin-top:40px;">        
            <input class="btn btn-primary" type="submit" value="Submit" id="btnSubmit" 
                   style="margin-right:110px; margin-top:40px; margin-left:20px;">
        </form>
                Forgot password? <a href="forgotPassword.php" target="_blank">Click here!</a><br/>
            Not a member yet? <a href="registration.php">Register</a> now!
        </div>
               </div>
     
       
        
        <?php
        ?>
    </body>
</html>
