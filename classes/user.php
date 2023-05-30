<?php 
class user{
	
	public function __construct($uid, $db){
		$user = $db->query("SELECT * FROM users WHERE uid = '$uid' ");
		$user=$user->fetch_assoc();
		$this->uid = $user['uid'];
		$this->email = $user['email'];
		$this->password = $user['password'];
		$this->name = $user['name'];
	}

}

 ?>