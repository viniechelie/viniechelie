<?php
$name = $_POST ['name'];
$visitor_email = $_POST ['email'];
$subject = $_POST ['subject'];
$message = $_POST ['message'];

$email_from = ['ifo@yourwebsite.com'];

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject_email.\n".
              "User Message: $message .\n";

$to = 'rachelgcnavarrogmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_from \r\n";


mail ($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>