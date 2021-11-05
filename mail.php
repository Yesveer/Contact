<?php
//get data from form

$name = $_POST['firstname'];
$email= $_POST['email'];
$message= $_POST['subject'];
$to = "yesveersingh139@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@AgroIndia.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:contact.html");
?>
