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
                        <li> <a href="#" onclick="myFunction()">Submit Listings</a> </li>
                        <li> <a href="./my_listing.php">My Listings</a> </li>
                        <li> <a class="logout" href="./logout.php"><i class="flaticon-shut-down-button"></i> Logout</a> </li>
                        </ul>
                    </div>
                </div>
            
                <div class="column2">
                    <div class="wlcmmsg">
                        <h3>Fill Your Listing Details</h3>
                    </div>
                    
                    <form action = './database/submit_listingdb.php' method = "post" class ="detaill">
                        <div class="row">
                            <div class="col1 formelement">
                            <label>*Room Title:</label>
                            <input type="text" name="roomTitle" value="" placeholder="RoomTitle" class="form-control" required><br>
                            </div>
                            <div class="col1 formelement">
                            <label>Room Discription</label>
                            <input type="text" name="roomDisc" value=""placeholder="Room Discription" class="form-control"><br>
                            </div>

                            <div class="col1 formelement">
                            <label>*Location:</label><input type="text" name="location" value=""placeholder="Location" class="form-control" required><br>
                            </div>
                            <div class="col1 formelement">
                            <label>*Nearest Landmark:</label> <input type="text" name="landmark" value=""placeholder="landmark" class="form-control" required><br>
                            </div>
                            <div class="col1 formelement">
                            <label>*Province No:</label> <select name = "province" class="form-control" >
                                <option value="Day">Province</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option> 
                                </select>
                                <br>
                                </div>
                            <div class="col1 formelement">
                            <label>*Contact No:</label>  <input type="number" name="contact" value=""placeholder="Contact No" class="form-control" required><br>
                            </div>
                            <div class="col1 formelement">
                            <label>*No Of Rooms:</label>  <input type="number" name="noofroom" value=""placeholder="No of rooms" class="form-control" required><br><br>
                            </div>
                            <div class="col1 formelement">
                            <label>Facilities:</label>
                            
                            <label>Furnished</label> <input type="checkbox" id="1" name="toilet" value="1">
                            <label>Water</label> <input type="checkbox" id="2" name="water" value="1">
                            <label>Electricity</label> <input type="checkbox" id="3" name="electric" value="1"> <br>
                            </div>
                            <div class="col1 formelement">
                            <label>*Price:</label>  <input type="number" name="price" value=""placeholder="price" class="form-control" required><br>
                            </div>
                            <div class="formelement">
                            <label>Select Image</label>
                            <div class="custom-file">
                                    <input type="file" id="img" name="img" accept="image/*">
                            </div>
                            </div>
                        </div>
                            <button type="submit" class="btn btnsub">submit</button><br><br>   
                    </form>       
                </div>
            </div>
        </div>
    </div>
    
  <?php
  include("./common/footer.php");
  ?>
</body>
</html>