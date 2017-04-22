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
	
	var_dump('<br />',$errMsg->getAllMessages());


	$successMsg = new Message();
	$successMsg->addMessage('successTest1', "This is a successful message that was sent");
	$successMsg->addMessage('successTest2', "This is another successful message that was sent");
	$successMsg->addMessage('successTest3', "This is another message that was not sent");

	$successMsg->removeMessage('successTest3');

	var_dump('<br />',$successMsg->getAllMessages());

	$testMsg = new Message();
	$testMsg->addMessage('testMsg1', "This is an unsuccessful message");
	$testMsg->addMessage('testMsg2', "This is a successful message");
	$testMsg->addMessage('testMsg3', "This is another successful message");

	$testMsg->removeMessage('testMsg1');

	var_dump('<br />',$testMsg->getAllMessages());



	

	?>
</body>
</html>