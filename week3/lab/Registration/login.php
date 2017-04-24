<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign Up</title>
	<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<?php 
	session_start();
	include './autoload.php';

	$reg = new Registration();
	$util = new Util();

	if ($util->isPostRequest()) {
		$email = filter_input(INPUT_POST, 'email');
		$password = filter_input(INPUT_POST, 'password');

		$user_id = $reg->login($email,$password);

		if ($user_id > 0) {
			$_SESSION['user_id'] = $user_id;
			$util->redirect('testAdmin.php');
		}



		if ($validate->isValidEmail($email));
		$errors[] = "Email must be valid";
		if (empty($pass));
		$errors[] = "You need to fill out password";
		if ($confirmPass != pass)
		$errors[] = "Invalid password";

		if (count($errors) === 0) {
			
		}

	}

	


	include './templates/login.html.php';
	?>
	 <a href="signUp.php">Sign Up</a> <br />
	 <a href="testAdmin.php">Admin</a>
</body>
</html>