<?php 
session_start();
$hotelID = $_GET['hotelid'];
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
    
        
    <form id="insertReview" method="post" action="doInsertReview.php?hotelid=<?php echo $hotelID; ?>">
        
        <div class="mb-3">
            <label for="reviewForm" class="form-label">Example textarea</label>
            <textarea required class="form-control" id="textareaReview" name="review" rows="3"></textarea>
        </div>
        
        
<select required class="form-select form-select-sm" name="rating" aria-label=".form-select-sm example">
  <option selected>Choose rating</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select>
        
                    <input type="submit" value="Post Item" />	
        </form>
   
    </body>
</html>
