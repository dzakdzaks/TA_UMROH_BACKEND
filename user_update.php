<?php
	
	include 'server.php';

	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$alamat = $_POST['alamat'];
	$ttl = $_POST['ttl'];
	$goldar = $_POST['goldar'];
	$notelp = $_POST['notelp'];
	
	if (isset($id) && isset($name) && isset($email) && isset($password) && isset($alamat) && isset($ttl) && isset($goldar) && isset($notelp)) {
		
		$update = mysql_query("UPDATE users SET name = '$name', email = '$email', password = '$password', alamat ='$alamat', ttl = '$ttl', goldar = '$goldar', notelp = '$notelp' WHERE id = '$id'")or die(mysql_error());

		$response = array();

		if ($update) {
			$response['result'] = '1';
			$response['msg'] = "Sukses edit user";
			$response['user']['id'] = $id;
			$response['user']['name'] = $name;
			$response['user']['email'] = $email;
			$response['user']['password'] = $password;
			$response["user"]["alamat"] = $alamat;
		 	$response["user"]["ttl"] = $ttl;
		 	$response["user"]["goldar"] = $goldar;
		 	$response["user"]["notelp"] = $notelp;
			echo json_encode($response);
		}else{
			$response['result'] = '0';
			$response['msg'] = "Gagal edit user";
			echo json_encode($response);
		}
	} else {
		$response['result'] = '0';
		$response['msg'] = "Paremeter Salah";
		echo json_encode($response);
	}
?>