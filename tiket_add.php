<?php
	
	include 'server.php';

	$idUser = $_POST['id_user'];
	$idPaket = $_POST['id_paket'];
	$status = "Belum Dibayar";

	if (isset($idUser) && isset($idPaket)) {
		
		$sql = mysql_query('INSERT INTO tiket(id_user, id_paket, status) VALUES ("'.$idUser.'","'.$idPaket.'","'.$status.'")'); 

		$response = array();

		if ($sql) {
			$response['result'] = 1;
			$response['msg'] = "Sukses add tiket";
			echo json_encode($response);
		}else{
			$response['result'] = 0;
			$response['msg'] = "gagal add tiket";
			echo json_encode($response);
		}

	} else {
		 $response['result'] = 0;
		 $response['msg'] = "Paremeter Salah";
		 echo json_encode($response);
	}

?>