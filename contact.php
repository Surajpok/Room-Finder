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
   
<form name = "myForm" action="contact.php" method="post" > 
                                        
    <label for="email">Email</label>
    <input type="email" name="email" placeholder= " your email..."> 
    
    <label for="lname">Message</label>
    <textarea name="message" placeholder="Write something.." style="height:200px"></textarea>
    
    <button type="submit" name = "submit">Send</button>

  </form>
  </div>


 </body>


<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once './PHPMailer/Exception.php';
require_once './PHPMailer/PHPMailer.php';
require_once './PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = "room finder";
  $email = $_POST['email'];
  $message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'Pokhrel004@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'Suraj@#$'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('Pokhrel004@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('Pokhrel004@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>Message : $message</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
include("./common/footer.php");

?>