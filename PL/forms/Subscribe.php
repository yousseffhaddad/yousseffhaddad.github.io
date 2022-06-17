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
$mail->setFrom('testzyntest@gmail.com', 'ZYNCODE');

// Add a recipient
$to=$_POST['email'];
$mail->addAddress($to);

//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

// Set email format to HTML
$mail->isHTML(true);

// Mail subject
$mail->Subject = 'Welcome to our Team';

// Mail body content
$bodyContent = '<h1>How to Send Email from Localhost using PHP by CodexWorld</h1>';
$bodyContent .= '<p>This HTML email is sent from the localhost server using PHP by <b>CodexWorld</b></p>';
$mail->Body = $bodyContent;

// Send email
if(!$mail->send()) {
echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
} else {
echo 'Message has been sent.';
header("location: ../Views/index.php");
}

?>