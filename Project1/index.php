<?php
include("./common/header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Rental House | Best Site To Find Rooms & Flats</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
<div class="main">
    <div>
        <h1 class="title">Finding Room <br> Was Never This Easy</h1>
        <p class="subtitle">Join Us Today & Find Rooms / Flats That Suits Both, Your Personality And Your Profession.
        </p>
    </div>

    <div class="form">
        <form method="post">
            <div class="formSelect">
                <label>Location: </label>
                <select class="select2" name="location">
                  <option selected value="*">Any Location</option>
                  <option value="Kathmandu">Kathmandu</option>
                  <option value="Biratnagar">Biratnagar</option>
                  <option value="Sankhuwasabha">Sankhuwasabha</option>
                </select>
            </div>

            <div class="formSelect">
                <label>Status: </label>
                <select class="select2" name="status">
                  <option selected value="*">Any Status</option>
                  <option value="For Rent">For Rent</option>
                  <option value="For Sale">For Sale</option>
                </select>
            </div>

            <div class="formSelect">
                <label>Price Range: </label>
                <select class="select2" name="price">
                  <option selected value="*">Any Range</option>
                  <option value="0 - 5k">0 - 5k</option>
                  <option value="5k - 15k">5k - 15k</option>
                  <option value="15k - Max">15k - Max</option>
                </select>
            </div>

            <div class="formSelect">
                <button type="submit" class="btn" name="button">Search listings</button>
            </div>
        </form>
    </div>
</div>

<h2>Recent Listing</h2>

<!--place for product-->
<?php
include("product.php");

?>
<?php
include("./common/footer.php");
?>
</body>
</html>