<?php 
	
	include 'server.php';

	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$alamat = $_POST['alamat'];
	$ttl = $_POST['ttl'];
	$goldar = $_POST['goldar'];
	$notelp = $_POST['notelp'];
	$role = '2';

	$response = array();

	if (isset($name) && isset($email) && isset($password) && isset($alamat) && isset($ttl) && isset($goldar) && isset($notelp)) {
		
		$reg = mysql_query('INSERT INTO users (name, email, password, alamat, ttl, goldar, notelp, role)
				 values ("'.$name.'","'.$email.'","'.$password.'","'.$alamat.'","'.$ttl.'","'.$goldar.'","'.$notelp.'","'.$role.'")');

		if ($reg) {
			$response['error'] = 'false';
			$response['msg'] = 'Registrasi akun berhasil! Silahkan Login...';
			echo json_encode($response);
		} else {
			$response['error'] = 'true';
			$response['msg'] = 'Gagal registrasi akun.';
			echo json_encode($response);
		}
	}

?>