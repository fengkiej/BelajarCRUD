<?php
	$user = $_POST['username'];
	$curPass = $_POST['curPassword'];
	$newPass = $_POST['newPassword'];

	// connect to mongodb
   	$m = new MongoClient();
   	// select a database & col
   	$db = $m->mDb;
	$collection = $db->userInfo;

	$userObj = $collection->findOne(array("user"=>$user));
	$userPass = $userObj["pass"];

	if($curPass==$userPass){
		$collection->update(array("user"=>$user), 
     		array('$set'=>array("pass"=>$newPass)));
		echo "change success!";
		header("Location: display.php");
    	exit;
	} else {
		echo "password incorrect";
	}
?>