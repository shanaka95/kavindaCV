<?php
//require 'PHPMailerAutoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';
//echo 22;

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
//$mail->SMTPDebug = 3;                               // Enable verbose debug output
//echo 2;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.zoho.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'kavindalakmal01@zohomail.com';                 // SMTP username
$mail->Password = 'kavindalakmal58';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'kavindalakmal01@zohomail.com';
$mail->FromName = 'My Resume Contact';
$mail->addAddress('kavindalakmal01@gmail.com');     // Add a recipient               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters  // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Resume Contact';
//echo 2;
//echo $_REQUEST['name'];

$a=     $_REQUEST['name']. "<br>" . $_REQUEST['email']. "<br>" . $_REQUEST['title']. "<br>" . $_REQUEST['message']. "<br>" ;

$mail->Body = $a;
//echo 1;
//$mail->send();
if(!$mail->send()) {
    echo 'Message could not be sent.';
}
else{

echo "Send Successfully";
}
?>
