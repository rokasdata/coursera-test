<?php

$from="noreply@gmail.com";
$email="renaldas.pocevicius@gmail.com";
$subject=$_POST['Subject'];
$message=$_POST['Message'];

mail ($email, $subject, $message, "From:".$from);





?>