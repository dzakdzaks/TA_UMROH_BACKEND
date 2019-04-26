<?php
	
	include 'server.php';

	$id = $_POST['id'];
	$idUser = $_POST['id_user'];
	$idPaket = $_POST['id_paket'];
	$status = $_POST['status'];
	
	if (isset($id) && isset($idUser) && isset($idPaket) && isset($status)) {
		
		$update = mysql_query("UPDATE tiket SET status = '$status' WHERE id_tiket = '$id'")or die(mysql_error());

		$response = array();

		if ($update) {
			$response['result'] = '1';
			$response['msg'] = "Sukses edit tiket";
			$response['tiket']['id'] = $id;
			$response['tiket']['id_user'] = $idUser;
			$response['tiket']['id_paket'] = $idPaket;
			$response['tiket']['status'] = $status;
			echo json_encode($response);
		}else{
			$response['result'] = '0';
			$response['msg'] = "Gagal edit tiket";
			echo json_encode($response);
		}
	} else {
		$response['result'] = '0';
		$response['msg'] = "Paremeter Salah";
		echo json_encode($response);
	}
?>