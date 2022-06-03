<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$emailheader = "From:" . $name . "<" . $email . ">\r\n";
$recipient = "info@gtd.market";

mail($recipient, $subject, $message, $mailheader) or die("Error!");


echo "message send";
