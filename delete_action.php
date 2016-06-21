<?php
	$user = $_POST['username'];
	$pass = $_POST['password'];

	// connect to mongodb
   	$m = new MongoClient();
   	// select a database & col
   	$db = $m->mDb;
	$collection = $db->userInfo;

	$userObj = $collection->findOne(array("user"=>$user));
	$userPass = $userObj['pass'];

	if($pass==$userPass){
		$collection->remove(array('user'=>$user),array("justOne" => true));
   		echo "user deleted successfully";
   		header("Location: display.php");
    	exit;
	} else {
		echo "password incorrect";
	}
?>