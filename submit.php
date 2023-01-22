<?php
$first-name = $_POST['first-name'];
$last-name = $_POST['last-name'];
$email = $_POST['email'];
$organization = $_POST['organization'];
$message = $_POST['message'];

$to = "sean4298@gmail.com";
$subject = "Contact Form Submission";
$headers = "From: $email";

mail($to, $subject, $message, $headers);
?>