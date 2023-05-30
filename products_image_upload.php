<?php
	include_once 'config.php';
	if (isset($_POST["image"])) {
		$data = $_POST['image'];
		$data = base64_decode($data);
		$pcode = $site->post('pcode');
		$imageName = "assets/products/" . sha1(microtime()) . '.jpg';
		$check = $site->q("SELECT * FROM products WHERE pcode='$pcode'");
		$check = $check->fetch_assoc();
		if ($check['photo'] != "") {
			if (file_exists("./" . $check['photo'])) {
				unlink(("./" . $check['photo']));
			}
		}
		$site->q("UPDATE products SET photo='$imageName' WHERE pcode='$pcode'");
		file_put_contents($imageName, $data);
	}
?>