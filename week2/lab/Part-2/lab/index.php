<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
        include './models/dbconnect.php';
        include './models/util.php';
        include './models/validation.php';
        include './models/addressCRUD.php';

        $fullname = filter_input(INPUT_POST, 'fullname');
        $email = filter_input(INPUT_POST, 'email');
        $addressline1 = filter_input(INPUT_POST, 'addressline1');
        $city = filter_input(INPUT_POST, 'city');
        $state = filter_input(INPUT_POST, 'state');
        $zip = filter_input(INPUT_POST, 'zip');
        $birthday = filter_input(INPUT_POST, 'birthday');
        $states = returnStates();
        $validation = new validation();
        $createAdd = new CRUD();

        $errors = [];
        if (isPostRequest()) {
        
        	if (empty($fullname)) {
        		$errors[] = 'Full Name is required';
        	}

        	if (!$validation->isValidEmail($email)) {
        		$errors[] = 'Email is not valid';
        	}

        	if ( empty($addressline1)) {
        		$errors[] = 'Address is required';
        	}

        	if ( empty($city)) {
        		$errors[] = 'City is not valid';
        	}


        	if ( !$validation->isValidZIP($zip)) {
        		$errors[] = 'Not a valid ZIP code';
        	}

            if ( !$validation->isValidDate($birthday)) {
                $errors[] = 'Not a valid date';
            }

        	if (count($errors) === 0) {
        		if ($createAdd->createAddress($fullname, $email, $addressline1, $city, $state, $zip, $birthday) ) {
        			$message = "Address Added";
        		}
        		else {
        			$errors[] = "Address not added";
        		}
        	}


    	}	

        ?>

        <?php
        include './templates/errors.html.php';
        include './templates/add-address.html.php';
        include './templates/messages.html.php';
   
   	
        ?>
    </body>
</html>
