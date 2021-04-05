<!DOCTYPE html>
<html lang="en">
<head>
   <title>Contact Us</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./styles/contact.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">

</head>
<body>
<?php
include("./common/header.php");
?>
 <h1>Contact US</h1>
<div class="container">  
   
<form action="contact.php" method="post" > 
                                        
    <label for="email">Email</label>
    <input type="email" name="email" placeholder= " your email..."> 
    
    <label for="lname">Message</label>
    <textarea name="message" placeholder="Write something.." style="height:200px"></textarea>
    
    <button type="submit" name = "submit">Send</button>

  </form>
  </div>


 </body>


<?php

if(isset($_POST['submit'])){
    $senderEmail = $_POST['email'];
    $senderMessage = $_POST['message'];
    $recieverEmail = "Pokhrel004@gmail.com";

    mail($recieverEmail, $senderEmail,$senderMessage );

}
include("./common/footer.php");

?>