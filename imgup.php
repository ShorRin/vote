<?php
	header('Access-Control-Allow-Origin:*');

	$dir = "/var/www/html/";

	$ext = substr($_FILES['file']['name'], strrpos($_FILES['file']['name'], "."));
	$name = $_POST['index'];
	$dir_name = $dir.$name.$ext;
	$tmpPath = $_FILES['file']['tmp_name'];


	copy($tmpPath, $dir_name);
	echo "gg";
?>
