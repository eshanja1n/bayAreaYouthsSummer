<?php
$name = $_POST['name'];
$email = $_POST['email'];

$message = $_POST['message'];
$formcontent=" From: $name \n Message: $message";
$recipient = "eshanjain@gmail.com";
$subject = "BAY Summer Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You for you message!" . " -" . "<a href='contact.html' style='text-decoration:none;color:#ff0099;'> Go Back</a>";
?>
