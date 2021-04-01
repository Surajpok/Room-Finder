<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="./common/header.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <header>
    <nav>
        <a href="./index.php"><img src="./images/logo.png" class="logo"> </a>
        <ul class="navLeft">
            <li><a href =index.php>HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            
        </ul>
        <ul class="navRight">
            <li><a href="./profile.php">MY PROFILE</a></li>
            <li><a href="./login.php">LOGIN</a></li>
            <li><a href="./signup.php">SIGN UP</a></li>
        </ul>
    </nav>
</header>
</body>
</html>