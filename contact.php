<?php

$from="renaldas.pocevicius@gmail.com";
$email="renaldas.pocevicius@gmail.com";
$subject=$_POST['Subject'];
$message=$_POST['Message'];

mail ($email, $subject, $message, "From:".$from);

Print "Your message has been sent";



?>