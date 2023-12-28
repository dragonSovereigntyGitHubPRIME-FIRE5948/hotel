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

        <h1>Registration Page</h1>

        <!-- Grid (1 row, 2 columns), (2nd column 4 rows) -->

        <!-- Row  -->
        <div class="row">
            <!-- Column 1  -->
            <div class="col-6 d-flex justify-content-end">

                <img class="formIMG" src="images/MBS.jpg">

            </div>

            <!-- Column 2  -->
            <div class="col-6 justify-content-center" style="margin-top:10px;">

                <form class="registrationform" method="post" action="doRegistration.php">


                    <!-- C2 Row 1  -->
                    <div class="row g-3 float-center">

                        <!-- Username -->        

                        <div class="form-floating w280">
                            <input required type="text" class="form-control" name="username" placeholder="Please enter your username">
                            <label for="floatingInput">Username</label>
                        </div>

                        <!-- Name -->

                        <div class="form-floating w280">
                            <input required type="text" class="form-control" name="name" placeholder="Please enter your name">
                            <label for="floatingInput">Name</label>
                        </div>
                    </div>

                    <!-- C2 Row 2  -->
                    <div class="row g-3 justify-content-start">

                        <!-- Password -->
                        <div class="form-floating w280">
                            <input required type="password" class="form-control" name="password" placeholder="Please enter your password">
                            <label for="floatingInput">Password</label>
                        </div>

                        <!--         Re-enter Password -->
                        <div class="form-floating w280">
                            <input required type="password" class="form-control" name="repassword" placeholder="Please re-enter your password">
                            <label for="floatingInput">Re-enter Password</label>
                        </div>
                    </div>          


                    <!-- C2 Row 3  -->
                    <div class="row g-3 justify-content-start">
                        <!--         Address -->
                        <div class="form-floating w560">
                            <input required type="text" class="form-control" name="address" placeholder="Please enter your address">
                            <label for="floatingInput">Address</label>
                        </div>
                    </div>  

                    <!-- C2 Row 4  -->
                    <div class="row g-3 justify-content-starts">
                        <!--         E-mail -->
                        <div class="form-floating w560">
                            <input required type="email" class="form-control" name="email" placeholder="Please enter your e-mail">
                            <label for="floatingInput">E-mail</label>
                        </div>
                    </div>          

                    <!-- Btns -->
                    <input class="btn btn-primary" type="reset" value="Reset" id="btnReset"
                           style="margin-top:40px;">        
                    <input class="btn btn-primary" type="submit" value="Submit" id="btnSubmit" 
                           style="margin-right:110px; margin-top:40px; margin-left:20px;">
                </form>                
            </div>

        </div>

        <?php
        ?>
    </body>
</html>
