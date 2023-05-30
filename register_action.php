<?php
include_once "config.php";
$site->check_token();
$email = $site->post("email");
$name = $site->post("name");
$password = $site->post("password");
$confirm_password = $site->post("confirm_password");

if ($name == "") {
	$site->error = 1;
	$site->error_msg.="Name Field is complusory <br>";
}
if ($email == "") {
	$site->error = 1;
	$site->error.="Email Field is complusory <br>";
}
if ($password == "") {
	$site->error = 1;
	$site->error_msg.="Password is complusory <br>";
}else{
	$confirm_password = $site->post("confirm_password");
	if ($password !== $confirm_password) {
		$site->error = 1;
		$site->error_msg.="Password Mismatch";
	}else{
		$password = sha1(md5($password));
	}
}if ($site->error==0) {
	$token = sha1(microtime()).$email;
	$site->q("INSERT INTO users(name, email, password,token) VALUES('$name', '$email', '$password', '$token')");
		$site->set_alert("Registration Successful", "success");
		header("location:login.php");

}else{
	$site->set_alert($site->error_msg,"danger");
	header("location:register.php");
}

?>