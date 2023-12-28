<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="height:100px;">
    <div class="container-fluid">

        <!-- Logo -->
        <a class="navbar-brand" id="logo" href="index.php">Hotel Désol e dragonné</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- NavItems -->
        <li class="nav-text">
            <a class="nav-link" href="index.php">Home</a>
        </li>  

        <li class="nav-item">
            <a class="nav-link" href="hotelList.php">Hotels</a>
        </li>  

        <li class="nav-item">
            <a class="nav-link" href="reviewsAll.php">Reviews</a>
        </li>  

        <!-- Account -->
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav" id="account">
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Account</a>
                    <ul class="dropdown-menu" id="itemdropdown_custom">

                        <?php if (isset($_SESSION['userID'])) { ?>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            <li><a class="dropdown-item" href="account.php">View Account</a></li>
                            <li><a class="dropdown-item" href="editAccount.php?id=<?php echo $_SESSION['userID'] ?>">Edit Account</a></li>
                            <li><a class="dropdown-item" href="newPassword.php?id=<?php echo $_SESSION['userID'] ?>">Change Password</a></li>
                        <?php } else { ?>
                            <li><a class="dropdown-item" href="login.php">Login</a></li>
                            <li><a class="dropdown-item" href="registration.php">Register</a></li>
                        <?php } ?>
                    </ul>
                </li>
            </ul>
        </div>
        
        <!-- Search -->
        <form class= "d-flex" method="post" action="hotelList.php">
            <input class="search-bar" type="search" placeholder="Search" name="search">
            <button class="search-button" type="submit">Search</button>
        </form>
    </div>
</nav>

<?php 
if(isset($_SESSION['userID'])){
    echo "Welcome, " .  $_SESSION['username'];
}
?>
