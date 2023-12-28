<?php
session_start();
include ("dbFunctions.php");

$getreviewID = $_POST['reviewID'];

$query = "SELECT r.review, r.rating, r.reviewId, h.hotelName, u.username
          FROM reviews r, hotels h, users u
          WHERE r.reviewId = $getreviewID
          AND r.hotelId = h.hotelId AND r.userId = u.userId";

$result = mysqli_query($link, $query) or die(mysqli_error($link));

$row = mysqli_fetch_array($result);

if (!empty($row)) {
    $review = $row['review'];
    $rating = $row['rating'];
    $username = $row['username'];
    $hotelname = $row['hotelName'];
    $reviewID = $row['reviewId'];
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
        
        <h1>Edit Review for <?php echo $hotelname ?></h1>

        <!-- Form -->
        <form id="editReview" method="post" action="doEditReview.php">

            <!-- Username -->
            <div class="form-floating w280">
                <input readonly type="text" class="form-control" name="username" value="<?php echo $username ?>">
                <label for="floatingInput">Username</label>
            </div>

            <!-- Review -->
            <div class="form-floating">
                <label for="reviewForm" class="form-label">Review</label>
                <textarea required class="form-control" id="textarea_editreview" name="editReview" rows="3"><?php echo $review ?></textarea>
            </div>


            <!-- Rating -->
            <select required class="form-select form-select-sm" name="editRating" aria-label=".form-select-sm example">
                <option selected><?php echo $rating ?></option>
                <?php
                for ($i = 1; $i < 6; $i++) {
                    if ($i != $rating) {
                        ?>
                        <option value=<?php echo $i ?>><?php echo $i ?></option>
                    <?php }
                }
                ?>
            </select>     

            <!-- Btns -->
            <input type="hidden" name="reviewid" value="<?php echo $reviewID ?>"/>
            <input type="submit" value="Edit" />	
        </form>
    </body>
</html>
