
<?php

$to ='renaldas.pocevicius@gmail.com';
$subject='this came from me';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$message =<<<EMAIL

Hi, My name is $name.

$message

From $name
My email address is $email

EMAIL;

$header = '$email';
if($_POST){

	mail( $to, $subject, $message, $headers);
	$feedback ='Thanks for Email';
}
mail( $to, $subject, $message, $headers)

?>

