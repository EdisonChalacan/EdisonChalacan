<?php

$name=$_POST['name'];
$subject=$_POST['subject'];
$telephone=$_POST['telephone'];
$email=$_POST['email'];
$message=$_POST['message'];

$header = 'From: '.$mail."\r\n";
$header.= "X-Mailer: PHP/".phpversion()."\r\n";
$header = "Mine-Version:1.0 \r\n";
$header = "Content-Type: text/plain";

mail($email, $subject, $message, $header);  "
$header("Location: ./contact_message.htm");

?>






