<?php 
include("config.php");
$site->auth();
if (isset($_GET['pid'])) {
	$pid=$_GET['pid'];
	$products = $site->q("SELECT * FROM products WHERE pid = '$pid' ");
	if ($products->num_rows > 0) {
		$products = $products->fetch_assoc();
		$owner = $products['uid'];
		$photo = $products['photo'];
		if ($owner != $site->uid) {
			$site->error = 1;
			$site->error_msg.="Cannot Delete Another Persons Products";
		}
	}else{
		$site->error = 1;
		$site->error_msg.="Products Does Not Exists";
	}
	$site->q("DELETE FROM products WHERE pid='$pid' ");
	if ($photo != " " && file_exists($photo)) {
		unlink($photo);
	}
	$site->set_alert("Products Deleted", "success");
	header("location: dashboard.php?pid".$pid);
}else{
	$site->set_alert($site->error_msg, "danger");
	header("location: dashboard.php");
}

?>