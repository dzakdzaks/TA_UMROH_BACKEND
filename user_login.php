<?php
	
	include 'server.php';

	$email = $_POST['email'];
	$password = $_POST['password'];

	$response = array();

	if (isset($email) && isset($password)) { 

		$user = mysql_query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");

		 if (mysql_num_rows($user) == 1) {
	
		 	$row = mysql_fetch_assoc($user);

		 	$response['error'] = 'false';	
		 	$response['msg'] = 'Login berhasil.';	
		 	$response["user"]["id"] = $row["id"];
		 	$response["user"]["name"] = $row["name"];
		 	$response["user"]["email"] = $row["email"];
		 	$response["user"]["password"] = $row["password"];
		 	$response["user"]["alamat"] = $row["alamat"];
		 	$response["user"]["ttl"] = $row["ttl"];
		 	$response["user"]["goldar"] = $row["goldar"];
		 	$response["user"]["notelp"] = $row["notelp"];
		 	$response["user"]["role"] = $row["role"];
			echo json_encode($response);

		 } else {

		 	$response['error'] = 'true';
            $response["msg"] = "Login gagal. email atau password salah";
       		echo json_encode($response);

		 }

	} else {

		$response["error"] = 'true';
    	$response["msg"] = "Login gagal. Parameter (email atau password) kurang";
    	echo json_encode($response);

	}	

?>