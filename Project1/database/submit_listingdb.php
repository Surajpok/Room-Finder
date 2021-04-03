<?php
// //connection to database
// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "";
// $dbname = "project_db";

// $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
// if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
// {

// 	die("failed to connect!");
// 	echo"not connected";
// }


include("./connection.php");
$findUser = $_SESSION['user_id']; 

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
    echo'Data Inserted Successfully';
    header("Location: ../my_listing.php");
}
?>