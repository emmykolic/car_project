<?php 


class party extends event{
	public function __construct(){
		parent::__construct();
		echo " we are echoing it after calling the parent constructor <br>";
	}
	public function all_party(){
		parent::all();
	}
}


 ?>