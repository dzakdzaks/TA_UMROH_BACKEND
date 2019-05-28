<?php
	
	include 'server.php';

	$id = $_POST['id'];
	$pass = $_POST['password'];

	
	if (isset($pass)) {
		
		$update = mysql_query("UPDATE users SET password = '$pass' WHERE id = '$id'")or die(mysql_error());

		$response = array();

		if ($update) {
			$response['result'] = '1';
			$response['msg'] = "Sukses edit password";
			echo json_encode($response);
		}else{
			$response['result'] = '0';
			$response['msg'] = "Gagal edit password";
			echo json_encode($response);
		}
	} else {
		$response['result'] = '0';
		$response['msg'] = "Paremeter Salah";
		echo json_encode($response);
	}
?>