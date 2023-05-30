<?php 
	session_start();
	define("SITE_NAME", "Clean Cars");
	define('MODE', 'multi');
	define('EMAIL', 'emmanuelokolie270@gmail.com');
	define('PHONE', '09028056849');
	define('ADDRESS', '7b ada-geogre');

	function my_autoloder($classname){
		$filename="classes/".$classname.".php";
		if(file_exists($filename)){
			include_once($filename);
		}
	}

spl_autoload_register("my_autoloder");

$site=new site();
 ?>