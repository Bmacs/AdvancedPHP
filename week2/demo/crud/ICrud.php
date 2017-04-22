<?php

interface ICrud {
	public function update();
	public function delete();
	public function create();
	public function readSingle();
	public function readAll();
}

?>