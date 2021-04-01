<?php
include("./common/header.php");
include("./functions/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/profile.css">
    <link rel="stylesheet" href="./styles/my_listing.css">
    <title>My Profile</title>
</head>
<body>
<!-- Profile Page Start -->
  
    <div class="container">
      <div class="media">
        <img src="./images/profile.jpg" class="img" alt="agent">
        <div class="media-body">
          <h3 class="username">Suraj Pokhrel</h3>
          <div class="useremail">Pokhrel004@gmail.com</div>
        </div>
        <a href="./submit_listing.php" class="btn">Submit Listing +</a>
      </div>
    </div>
  <!-- Profile Page End -->

  <div class="section">
    <div class="containerr">
      <div class="row">
        <div class="column1">
          <div class="sidebar">
            <ul class="usernav">
              <li> <a class="active" href="profile.php">Edit Profile</a> </li>
              <li> <a href="./submit_listing.php">Submit Listings</a> </li>
              <li> <a href="./my_listing.php">My Listings</a> </li>
              <li> <a class="logout" href="./logout.php"><i class="flaticon-shut-down-button"></i> Logout</a> </li>
            </ul>
          </div>
        </div>

        <div class="column2">
        <?php
        getMyPro();
        ?>
        </div>
      </div>
    </div>
  </div>
  <?php
  include("./common/footer.php");
  ?>
  <script>
  function myFunction() {
  const text="<h1>hello</h1>";
    document.querySelector(".column2").innerHTML=text;
  }
  </script>
</body>
</html>