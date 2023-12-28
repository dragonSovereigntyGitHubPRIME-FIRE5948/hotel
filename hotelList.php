<?php 
session_start();
include "dbFunctions.php";


//searc
if (isset($_POST['search'])){
    $search = $_POST['search'];
    $query = "SELECT * 
                FROM hotels
                WHERE hotelName LIKE '%$search%'";
} else {
   $query = "SELECT * FROM hotels"; 
}
        

$result = mysqli_query($link, $query) or die(mysqli_error($link));

while ($row =mysqli_fetch_assoc($result)) {
    $arrHotels[] = $row;
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

        
        <select class="form-select form-select-sm" name="sort">
            <option value="0" selected></option>
            <option value="1">Hotel name in ascending order</option>
            <option value="2">Hotel name in descending order</option>
            <option value="3">Region in ascending order</option>
            <option value="4">Region in descending order</option>
            <option value="5">Highest rating</option>
            <option value="6">Lowest ratings</option>
        </select>     

                <!-- Container, 1 row, max 2 columns gutter 4 -->
        <div class="container hotellistcontainer">

            <!-- Row -->
            <div class="row row-cols-2" style="background-color: #E4C2C1;">

                <?php
                for ($i = 0; $i < count($arrHotels); $i++) {
                    $hotelname = $arrHotels[$i]['hotelName'];
                    $hoteladdress = $arrHotels[$i]['hotelAddress'];
                    $picture = $arrHotels[$i]['picture'];
                    $hotelID = $arrHotels[$i]['hotelId'];
                    ?>

                    <!-- Column -->
                    <div class="col mx-auto">
                        
                        <!-- Card -->
                        <div class="card mx-auto" style="width: 25rem; text-align: center">
                            <img src="images/<?php echo $picture; ?>" class="card-img">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $hotelname; ?></h5>
                                <p class="card-text"><?php echo $hoteladdress; ?></p>

                                <!-- Btns -->
                                

                                     <a href="hotelDetails.php?hotelid=<?php echo $hotelID; ?>" class="btn btn-secondary">Details</a>
                                <a href="reviews.php?hotelid=<?php echo $hotelID; ?>" class="btn btn-secondary">Reviews</a>
                            </div>
                        </div>
                    </div>
                <?php } ?> 
            </div>
        </div>


    </body>
</html>