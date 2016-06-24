<?php
	$user = $_POST['username'];
	$pass = $_POST['password'];

	$curl = curl_init();
	
	curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://belajarrest.local/',
    //CURLOPT_USERAGENT => 'Codular Sample cURL Request',
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => array(
        'user' => $user,
        'pass' => $pass
    	)
	));

	curl_exec($curl);

	$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
	curl_close($curl);

	if($httpcode == "201"){
		header("Location: display.php");
    	exit;
    } else {
    	echo "Op failed";
    }
?>