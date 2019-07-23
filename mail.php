<?php
$name = $_POST['name'];
$email = $_POST['email'];
$success = "";

$message = $_POST['message'];
$formcontent=" From: $name \n Message: $message";
$recipient = "eshanjain@gmail.com";
$subject = "BAY Summer Contact Form";
$mailheader = "From: $email \r\n";

if(mail($recipient, $subject, $formcontent, $mailheader)){
    $success = "Message sent, thanks for contacting us!";
    $name = $email = $message = '';
}
 else {
     die("Error!");
 }
// echo "Thank You for you message!" . " -" . "<a href='contact.html' style='text-decoration:none;color:#ff0099;'> Go Back</a>";
?>
