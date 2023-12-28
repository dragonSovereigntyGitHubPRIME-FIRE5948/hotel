<?php
session_start();
include "dbFunctions.php";

$hotelID = $_GET['hotelid'];

//INNER JOIN VERSION
//$query = "SELECT u.username, u.userId, r.review, r.rating, r.reviewId, r.datePosted, h.hotelId, h.hotelName
//            FROM users u, reviews r, hotels h
//            WHERE r.userId = u.userId
//            AND r.hotelId = h.hotelId
//            AND h.hotelId = $hotelId";

$query = "SELECT u.username, u.userId, r.review, r.rating, r.reviewId, r.datePosted, h.hotelId, h.hotelName
            FROM users u
            INNER JOIN reviews r
            ON r.userId = u.userId
            INNER JOIN hotels h
            ON r.hotelId = h.hotelId
            WHERE h.hotelId = $hotelID";

$result = mysqli_query($link, $query) or die(mysqli_error($link));

while ($row = mysqli_fetch_assoc($result)) {
    $arrReviews[] = $row;
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
        
        <h1>Reviews</h1>
        
        <table class="table center" style="width:80%">
            <thead class="thead-dark">
                <tr>
                    <th id="reviewTable" scope="col">Review</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Date Posted</th>
                    <th scope="col">Username</th>
                    <?php if ($_SESSION['userID'] == $userID) { ?>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    <?php } ?>
                </tr>
            </thead>

            <?php
            for ($i = 0; $i < count($arrReviews); $i++) {
                $username = $arrReviews[$i]['username'];
                $review = $arrReviews[$i]['review'];
                $rating = $arrReviews[$i]['rating'];
                $datePosted = $arrReviews[$i]['datePosted'];
                $hotelID = $arrReviews[$i]['hotelId'];
                $userID = $arrReviews[$i]['userId'];
                $reviewID = $arrReviews[$i]['reviewId'];
                ?>

                <tbody>
                    <tr class="table-light">
                        <td style="text-align:left;"><?php echo $review ?></td>
                        <td><?php echo $rating ?></td>
                        <td><?php echo $datePosted ?></td>
                        <td><?php echo $username ?></td>
                        
                    <?php if ($_SESSION['userID'] == $userID) { ?>

                                                                        <td>

                            <?php if ($_SESSION['userID'] == $userID) { ?>

                                <form method="post" action="editReview.php">
                                    <input type="hidden" name="reviewID" value="<?php echo $reviewID; ?>"/>
                                    <input class="btn btn-primary" type="submit" value="Edit"\
                                           style="width:100px;
                                           height:42px;
                                           font-size:13pt;
                                           margin-top: -10px;"/>
                                </form>

                            <?php } ?>
                                                                                                    </td>                    
                                                                                                        <?php } ?>

                    <?php if ($_SESSION['userID'] == $userID) { ?>

                                                <td>

                            <?php if ($_SESSION['userID'] == $userID) { ?>

                                <form method="post" action="deleteReview.php">
                                    <input type="hidden" name="reviewID" value="<?php echo $reviewID; ?>"/>
                                    <input class="btn btn-primary" type="submit" value="Delete"
                                           style="width:100px;
                                           height:42px;
                                           font-size:13pt;
                                           margin-top: -10px;
                                           "/>
                                </form>

                            <?php } ?>
                                                                                                                                </td>
                                                                                                                                <?php } ?>


                    </tr>
                </tbody>
            <?php } ?>
        </table>
        
        
            <a href="insertReview.php?hotelid=<?php echo $hotelID; ?>" class="btn btn-secondary">Review</a>
        
    </body>
</html>
