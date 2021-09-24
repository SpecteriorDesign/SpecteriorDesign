<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$site_type = $_POST['site'];
$message = $_POST['message'];

$email_from = 'specteriordesign.com';

$email_subject = 'New Enquiry';

$email_body = "User Name : $name.\n".
                "User Email : $visitor_email.\n".
                "Site Name : $site_type.\n".
                "User Message : $message.\n";

$to = 'rctv617@gmail.com';

$headers = "From: $email_form \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);


header("Location: contact.html");


?>