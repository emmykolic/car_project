<?php 
// use const key word to declare contant in class

class car extends product{
	public function __construct($db){
 		$this->db = $db;
 	}
 	 public function gets(){
 	 	echo "this is all our products<br>";
 	}
 	 public function get_latest(){
 	 	echo "these are the list of our latest products<br>";
 	}
}



 ?>