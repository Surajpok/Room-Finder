<?php
include("./common/header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/profile.css">
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

          <div class="wlcmmsg">
            <h3>Welcome Back, Suraj Pokhrel</h3>
          </div>

          <form method="post"action = '#'>
            <div class="row">

              <div class="col1 formelement">
                <label>First Name</label>
                <input type="text" class="form-control" placeholder="First Name">
              </div>
              <div class="col1 formelement">
                <label>Last Name</label>
                <input type="text" class="form-control" placeholder="Last Name">
              </div>
              <div class="col1 formelement">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="Your Username">
              </div>
              <div class="col1 formelement">
                <label>Email Address</label>
                <input type="email" class="form-control" placeholder="Yourmail@gmail.com">
              </div>
              <div class="col1 formelement">
                <label>Phone Number</label>
                <input type="text" class="form-control" placeholder="+977 **********">
              </div>
              <div class="col1 formelement">
                <label>Address One</label>
                <input type="text" class="form-control" placeholder="Address Line One">
              </div>
              <div class="col1 formelement">
                <label>Address Two</label>
                <input type="text" class="form-control" placeholder="Address Line Two">
              </div>
            </div>
            <button type="submit" name="submit" class="btn btnsub">Save Changes</button>
          </form>
          <hr>

          <div class="wlcmmsg">
            <h3>Security</h3>
          </div>

          <form method="post">
            <div class="row">
              <div class="col1 formelement">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password" value="">
              </div>
              <div class="col1 formelement">
                <label>Repeat Password</label>
                <input type="password" class="form-control" placeholder="Repeat Password" value="">
              </div>
              <div class="formelement">
                <label>Upload Your ID</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="propertyThumbnail">
                  <label class="custom-file-label" for="propertyThumbnail">Choose file</label>
                </div>
              </div>
            </div>
            <button type="submit" name="submit" class="btn btnsub">Save Changes</button>

          </form>

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