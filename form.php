<?php
$name = $-POST['name'];
$visitor_email = $-POST['email'];
$subject = $-POST['subject'];
$message = $-POST['message'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n". 
               "User Name: $visitor_email.\n".
               "User Name: $subject.\n".
               "User Name: $message.\n";

 $to = 'saidkhan8797.com@gmail.com';
 
 $headers = "From: $email_from \r\n";

 $headers .="Reply_To: $visitor_email \r\n "; 

 mail($to,$email_subject,$email_body,$headers);
 header("Location:contact.html");
                

?>