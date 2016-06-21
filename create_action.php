<?php
	$user = $_POST['username'];
	$pass = $_POST['password'];

	// connect to mongodb
   	$m = new MongoClient();
   	// select a database & col
   	$db = $m->mDb;
	$collection = $db->userInfo;

	$userData = array(
		'user'=>$user,
		'pass'=>$pass);

	$collection->insert($userData);
	echo "insert success";
	header("Location: display.php");
    exit;
?>