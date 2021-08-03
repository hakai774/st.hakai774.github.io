<?php

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$to = "kombatesteph@mail.com";

$subject = "mail for github";
$txt = "name = ". $name . "\r\n email= " . $email . "\r\n message =" . $message; 
$headers = "from : kombatesteph@mail.com" . "\r\n". "CC:
kombatesteph@mail.com";
if($email !=NULL){
    mail($to,$subject,$txt,$headers);
}
header ("location :merci.html")
?>