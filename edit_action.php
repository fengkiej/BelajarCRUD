<?php
	$user = $_POST['username'];
	$curPass = $_POST['curPassword'];
	$newPass = $_POST['newPassword'];

	$data = array('pass' => $curPass, 'npass' => $newPass);

	$curl = curl_init();
	
	curl_setopt_array($curl, array(
    	CURLOPT_RETURNTRANSFER => 1,
    	CURLOPT_URL => 'http://belajarrest.local/users/'.$user,
    	//CURLOPT_USERAGENT => 'Codular Sample cURL Request',
    	CURLOPT_CUSTOMREQUEST => "PUT",
    	CURLOPT_POSTFIELDS => http_build_query($data)
	));

	curl_exec($curl);

	$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
	curl_close($curl);

	if($httpcode == "200"){
		header("Location: display.php");
    	exit;
    } else {
    	echo "Op failed";
    }
?>