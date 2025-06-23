<?php
$name = $_post['name'];
$visitor_email = $_post['email'];
$problem = $_post['problem'];
$message = $_post['message'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n"
                 "problem: $problem.\n"
                 "User Message: $message .\n";

$to = 'ahmadabdullah.136r1@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("location:contact.html");
?>