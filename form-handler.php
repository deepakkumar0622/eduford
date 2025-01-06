<?php

$name = $_POST['name'];
$visitors_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from = 'abc@';

$email_subject = 'New form submission';

$email_body = "User Name: $name .\n".
                "User Email:$visitors_email.\n".
                    "Subject:$subject.\n".
                        "User Message:$message.\n";
$to ='deepakramu456@gmail.com';

$headers = "from: $email_from \r\n";
$headers.= "Reply-To:$visitors_email\r\n";

mail($to ,$email_subject ,$email_body,$headers);

header("Location: contact.html");

?>
