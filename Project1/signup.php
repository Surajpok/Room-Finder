<?php 
session_start();
	include("./common/header.php");
	include("./database/connection.php");
	include("./functions/functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo " ";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" href="./styles/signup.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">

</head>
<body>
	<div id="box">
		<h1>Sign Up</h1>
		<div class="form">
			<form method="post">
				<level>Username:</label><br>
				<input id="text" type="text" name="user_name" placeholder="Username" required><br><br>
				<label>Password:</label><br>
				<input id="text" type="password" name="password" placeholder="Password" required><br><br>
				<input id="button" type="submit" value="Signup"><br><br>
				<div class="backto">
				<a href="./login.php">Click To Login</a>
				<a href="./index.php">Back To Home</a>
				</div>
			</form>
		</div>
	</div>
	<?php
		include("./common/footer.php");
	?>
</body>
</html>