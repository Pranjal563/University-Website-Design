<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'info@easytutorialspro.com'

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
$email_body = "User Email: $visitor_email.\n".
$email_body = "Subject: $vsitor_email.\n".
$email_body = "User Message: $message.\n".;

$to = 'avinash6252@gmail.com';

$headers = "Form: $email_form \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>