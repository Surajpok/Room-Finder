<?php
include("./common/header.php");
include("./database/connection.php");
$findUser = $_SESSION['user_id']; 
global $con;

$get_user = "select * from users where user_id='$findUser'";
$result = mysqli_query($con,$get_user);

if ($result && mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
    $mail = $row['email'];
    $fname = $row['first_name'];
    $lname = $row['last_name'];
    }
}

?>
<?php

if (isset($_POST['submitt'])) {

$First_name = $_POST['roomTitle'];
$Middle_name = $_POST['roomDisc'];
$location = $_POST['location'];
$Landmark = $_POST['landmark'];
$Province_no = $_POST['province'];
$Contact_no = $_POST['contact'];
$No_of_rooms = $_POST['noofroom'];


if(!isset($_POST['toilet']) ){

	$Toilet = 0;
}
else {
	$Toilet=1;
}

if(!isset($_POST['electric']) ){

	$Electricity = 0;
}
else {
	$Electricity=1;
}

if(!isset($_POST['water']) ){

	$Water = 0;
}
else {
	$Water=1;
}

$Price = $_POST['price'];
$image = $_POST['img'];

$sql = "INSERT INTO rooms (room_title,room_desc,
location,nearest_landmark,province,contact,no_of_rooms,
furnished,water,electricity,price,room_img1,user_id)
VALUES ('$First_name','$Middle_name','$location',
'$Landmark','$Province_no','$Contact_no',
'$No_of_rooms','$Toilet','$Water','$Electricity','$Price','$image','$findUser')";

if(!mysqli_query($con,$sql)){
    echo 'not inserted';
}
else{
echo'<script>confirm("Data Inserted Successfully");
setTimeout(function() { 
       window.location.href = "./my_listing.php";
   },0);</script>';    
}
}
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
    
          <h3 class="username"><?php echo $fname.' '.$lname ?></h3>
          <div class="useremail"><?php echo $mail ?></div>
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
                    <h3>Fill Your Listing Details</h3>
                </div>
                
                <form action = './submit_listing.php' method = "post" class ="detaill">
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
                        <button type="submit" name="submitt" class="btn btnsub">submit</button><br><br>   
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