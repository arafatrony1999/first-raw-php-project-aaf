<?php

$to = "arafat.rony999@gmail.com";
$subject = "Confirm email for creating AAF account";
$body = "Your code for creating an AAF account is";
$from = "From:arafat.rony999@gmail.com";


// $smtp = "smtp.gmail.com";
// $smtp_port = "587";
// ini_set($smtp,$smtp_port);


if(mail($to,$subject,$body,$from)){
    echo "Email send successfull";
}else{
    echo "Email send unsuccessfull. Check your internet connection again";
}


?>