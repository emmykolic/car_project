<?php
include_once "config.php";
echo $site->check_token();
$email = $site->post("email");
$password = $site->post("password");
if ($email == "") {
	$site->error = 1;
	$site->error.="Email Field is complusory <br>";
}
if ($password == "") {
	$site->error = 1;
	$site->error_msg.="Password is complusory <br>";
}else{
	$password = sha1(md5($password));
}
print_r($check=$site->q("SELECT * FROM users WHERE email= '$email' AND password='$password' "));
if ($check->num_rows<1) {
	$site->error=1;
	$site->error_msg.="Invalid credencials";
}else{
	$check=$check->fetch_assoc();
	$token=$check['token'];
}
if ($site->error==0) {
	$_SESSION['auth'] = $token;
	//header("location:dashboard.php");

}else{
	$site->set_alert($site->error_msg,"danger");
	//header("location:login.php");
}
?>