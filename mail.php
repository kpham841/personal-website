<?php
//NOT ABLE TO USE ON GITHUB PAGES - DOESN'T AllOW POST REQUESTS :(
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];

// Email to send the form to
$to = "khiempham841@gmail.com";

// Subject line
$subject = "Mail From Personal Website";

$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
//header("Location:thankyou.html");
?>