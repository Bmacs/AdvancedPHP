<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php 
	include './autoload.php';

	$msg = new Message();
	$msg->addMessage('test', "This is a test 1");
	$msg->addMessage('test2', "This is a test 2");

	$msg->removeMessage('test');

	var_dump($msg->getAllMessages());

	$errMsg = new ErrorMessage();
	$errMsg->addMessage('testErr', "This is an error");
	$errMsg->addMessage('testErr2', "This is error 2");



	var_dump($errMsg->getAllMessages());

	?>
</body>
</html>