<?php 
/* 
abstract classes and methods are when the parent task has named class and method but it need the child class to fullfill it.
when the child class inherits from an abstract class we have the following rules

*/
 abstract class product {
 	public $db;

 	public function __construct($db){
 		$this->db = $db;
 	}
 	abstract public function gets();
 	abstract public function get_latest();
 }



 ?>