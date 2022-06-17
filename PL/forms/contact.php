<?php
//the subject
//$sub = "Your subject";
//the message
//$msg = "hi brozer";
//recipient email here
//$rec = "nicolasboufaycal@gmail.com";
//send email
//mail($rec,$sub,$msg);

//$to = "nicolasboufaycal@gmail.com";
//$subject = "in love";
//$txt = "Hello world!";
//$headers = "From: testzyntest@gmail.com" . "\r\n" .
//"CC: yousseff12haddad@gmail.com";



//mail($to,$subject,$txt,$headers);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

$mail = new PHPMailer;

$mail->isSMTP(); // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = 'testzyntest@gmail.com'; // SMTP username
$mail->Password = '!z@y#n$code'; // SMTP password
$mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587; // TCP port to connect to

// Sender info
$email=$_POST['email'];
$mail->setFrom('testzyntest@gmail.com', $email);

// Add a recipient

$mail->addAddress('testzyntest@gmail.com');

//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

// Set email format to HTML
$mail->isHTML(true);

// Mail subject
$subject=$_POST['subject'];
$mail->Subject = $subject ;

// Mail body content
$message=$_POST['message'];
$mail->Body = $message;

// Send email
if(!$mail->send()) {
    header("location: ../Views/Error.html");
}

else
    header("location: ../Views/Success.html");

?>

