<?php 

class Example {
	public $var = "Example class test";

	public function sample($param) {
		echo 'this is a sample function';
	}
}

$egString = 'Example';

$eg = new $egString;

$eg->sample('');

echo "$egString - this is a test <br />";
echo '$egString - this is a test <br />';

?>