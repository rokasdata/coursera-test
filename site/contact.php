
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

<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
		<title>Hello Coursera</title>
		<link rel="stylesheet" href="stylesheet/style.css" media="all" />
	</head>
	<body>
		<div id="wraper">
			<div id="content">
				<ul class="list">
					<li>
						<a href="#">home</a>
					</li>
					<li>
						<a href="#">about</a>
					</li>
					<li>
						<a href="#">contact</a>
					</li>
				</ul>
				<h2>Contacts</h2>
				<p id="feedback"><?php $feedback; ?></p>
				<form action="?" method="post">
					<ul>
						<li>
							<label for="name">Name</label>
							<input type="text" name="name" id="name"/>
						</li>
						<li>
							<label for="email">email</label>
							<input type="text" name="email" id="email"/>
						</li>
						<li>
							<label for="topic">Topic:</label>
							<select >
								<option value="Young">Young</option>
								<option value="Midlle age">Midlle-age</option>
								<option value="Old">Old</option>
							</select>

						</li>
						<li>
							<label for="message">The story about you</label>
							<textarea name="message" id="message" cols="42" rows="4"></textarea>
						</li>
						<li>
							<input id="button" type="submit" value="send">
						</li>
					</ul>
				</form>
			</div>
		</div>

	</body>	

	</html>	