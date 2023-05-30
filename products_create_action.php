<?php
include_once "config.php";
$site->auth();
$name = $site->post("name");
$price = $site->post("price");
$description = $site->post("description");
$brand = $site->post("brand");
$model = $site->post("model");
$quantity = $site->post("quantity");

if ($name == "") {
	$site->error = 1;
	$site->error_msg.="Name Field is complusory <br>";
}
if ($price == "") {
	$site->error = 1;
	$site->error.="Price Field is complusory <br>";
}
if ($description == "") {
	$site->error = 1;
	$site->error.="Description Field is complusory <br>";
}
if ($brand == "") {
	$site->error = 1;
	$site->error.="Brand Field is complusory <br>";
}
if ($model == "") {
	$site->error = 1;
	$site->error.="Model Field is complusory <br>";
}
if ($quantity == "") {
	$site->error = 1;
	$site->error.="Quantity Field is complusory <br>";
}
$pcode = $site->codegen(10, 'products', 'pcode');
$uid=$site->uid;
if ($site->error==0) {
	// $token = sha1(microtime()).$email;
	$site->q("INSERT INTO products(name, price, description, brand, model, quantity, pcode, uid) VALUES('$name', '$price', '$description', '$brand', '$model', '$quantity', '$pcode', '$uid')");
		$site->set_alert("Registration Successful", "success");
		header("location:products_create_two.php?pcode=".$pcode);

}else{
	$site->set_alert($site->error_msg,"danger");
	#header("location:register.php");
}

?>