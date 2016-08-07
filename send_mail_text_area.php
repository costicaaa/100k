<?php
$to = "localhost";
$subject = $_POST["subject"];
$message = $_POST["message"];
$headers = "From:" . $_POST["email_adress"] ."----" . $_POST["name"] ;

mail($to,$subject,$message,$headers);
header('location:mail_sent_succesfully.html')
?>