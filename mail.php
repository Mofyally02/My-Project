<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];
$to = "al.tech.solution2.0@gmail.com";
$subject = "Mail From al-techsolution";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Subject =" .$subject . "\r\n Message =" . $message;
$headers = "From: client@al-techsolution.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>