<?php

echo "trying to send mail";
#parameters for mail function
$to = "abhishek.bhattarai1067gmail.com";
$subject = "email test from php";

$message = "testing purpose";


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: abhishek.bhattarai21067@gmail.com' . "\r\n";
$headers .= 'Cc: abhishek.bhattarai1067@gmail.com' . "\r\n";

#parameter ends here 

#mailing funtion in php
if (mail($to,$subject,$message,$headers)){
    echo "success!!";
}else {
    echo "failure!!!";
}
?>