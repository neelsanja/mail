<?php
//get data from form  

$name = $_POST['txtName'];
$email= $_POST['txtEmail'];
$when= $_POST['app_date'];
$startd= $_POST['strtDest'];
$endd= $_POST['endDest'];
$vehicle= $_POST['selVehicle'];
$number= $_POST['txtContactNo'];

$to = "neelsanja001@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n When =" . $when;
$headers = "From: arjunpatel2755@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
