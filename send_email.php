<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

//Store POST variables
$name       = $_POST['name'];
$email      = $_POST['email'];
$number     = $_POST['number'];
$address    = $_POST['address'];
$company    = $_POST['company'];
$message    = $_POST['message'];

//PHPMailer Object
$mail = new PHPMailer(true); //Argument true in constructor enables exceptions

//Enable SMTP debugging.
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "KCMOMovers@gmail.com";                 
$mail->Password = "Wters33!";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to
$mail->Port = 587;     

//From email address and name
$mail->From = "KCMOMovers@gmail.com";
$mail->FromName = "KCMO Movers";

//To address and name
$mail->addAddress("mkohlberg95@gmail.com"); //Recipient name is optional

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = $name." - KCMO Movers Contact Us";

$mail->Body = 
$name
."<br>".
$email
."<br>".
$number
."<br>".
$address
."<br>".
$company
."<br><br>".
$message;

$mail->AltBody = 
$name
."\n".
$email
."\n".
$number
."\n".
$address
."\n".
$company
."\n\n".
$message;

try {
    $mail->send();
    echo "Message has been sent successfully";
    //Exit script
    echo "<script>window.location = '/index.html#send_message_container';</script>";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
    echo "<a href='/index.html'>Back to Form</a>";
}