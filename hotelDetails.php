<?php
session_start();
include "dbFunctions.php";

$print = "";
$hotelID = $_GET['hotelid'];

$query = "SELECT * 
        FROM hotels
        WHERE hotelId = $hotelID";

$result = mysqli_query($link, $query) or die(mysqli_error($link));

$row =mysqli_fetch_array($result);


if (!empty($row)) {
    $hotelname = $row['hotelName'];
    $hoteladdress = $row['hotelAddress'];
    $picture = $row['picture'];
    $contactno = $row['contactNo'];
    $description = $row['description'];
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
        
<!-- Carousel -->
                  <div class="container-sm">
            <div class="row justify-content-center">
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="images/<?php echo $picture; ?>" class="d-block w-100" style="border:8px solid">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="modal1-header" style="   position: absolute;
  bottom: 140px;
  left:-110px; color:red;text-shadow: ">#</h5>
                                <p>#</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="images/slides_photo2.jpg" class="d-block w-100" style="border:8px solid">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="modal1-header">Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/slides_photo3.jpg" class="d-block w-100" style="border:8px solid">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="modal-3-header">Grass-fed Beef</h5>
                                <p class="modal-3-para">Our 100% Grass Fed Ribeye Steak (also known as Scotch Fillet), 
                                                        is naturally reared in open pastures. A restaurant menu staple 
                                                        due to its incredible marbling and tenderness, the steak is suited 
                                                        to both grilling and pan-frying. Be sure to check out our Grilled ribeye 
                                                        steak with smoky eggplant and pomegranate salad recipe!</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                
                
                <!-- Details -->
                <div class="container bg-yellow">
                    <div class="row row-cols-1">

                        <!-- Name -->     
                        <div id="idHotelName"><?php echo $hotelname; ?></div>

                        <!-- Contact -->
                        <div class="classAddressContact">
                            <b>Address: </b>
                            <?php echo $hoteladdress . "<br>"; ?> 
                            <b>Contact: </b>
                            <?php echo $contactno; ?> </div>

                        <!-- Description -->
                        <div id="idDescription"><?php echo $description; ?></div>


                        <!-- Btns -->
                        <a href="reviews.php?hotelid=<?php echo $hotelID; ?>" class="btn btn-secondary">Reviews</a>
                        <!--<button onclick="location.href='reviews.php'" href type="button">Click Me!</button>-->
  </div>
            
            
            
            
</div>
         
                
        
    </body>
   
</html>
