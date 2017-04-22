<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	include './templates/access-required.html.php';
	include './autoload.php';


	$Registration = new Registration();
	$user = $Registration->getEmail($_SESSION['user_id']);



	

	if ($user != "") {
		echo "You are logged in as" . "<br />"; 
		echo "User ID is: " . $_SESSION['user_id'] . "<br />";
		echo "Email is: " . $user;
	}


	
	?> <br />
	<a href="models/logout.php">Log Out</a>
</body>
</html>