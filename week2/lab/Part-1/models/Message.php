<?php 

class Message implements IMessage {

	protected $messages = [];

	public function addMessage ($key, $msg) {
		$this->messages[$key] = $msg;
	}

	public function getAllMessages () {
		return $this->messages;
	}

	public function removeMessage ($key) {
		unset($this->messages[$key]);
	}
}