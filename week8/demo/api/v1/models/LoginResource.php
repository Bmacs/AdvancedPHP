<?php 

class LoginResource extends DBSpring {

	public function login($serverData) {
		$stmt = $this->getDb()->prepare("SELECT * FROM users where email = :email limit 1");
        $binds = array(   
            ":email" => $serverData['email']
            
        );

        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        	$results = $stmt->fetch(PDO::FETCH_ASSOC);
        	if (password_verify($serverData['password'], $results['password']) ){
            	return true;
        	}

        } 
        return false;
	}
}