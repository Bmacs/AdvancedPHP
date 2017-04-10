<?php 
class validation {
	public function isValidEmail($email) {
		if (filter_var($email, FILTER_VALIDATE_EMAIL) !== false ) {
			return true;
		}

		return false;
	}

	public function isValidZIP($zip) {
		$zipREGEX = '/^[0-9]{5}$/';

		if ( !preg_match($zipREGEX, $zip) ) {
			return false;
		}

		return true;
	}
}


?>