<?php
	
	include 'server.php';

	$nama = $_POST['nama'];
	$durasi = $_POST['durasi'];
	$transit = $_POST['transit'];
	$jarakToMadinah = $_POST['jarak_to_madinah'];
	$jarakToMekah = $_POST['jarak_to_mekah'];
	$maskapai = $_POST['maskapai'];
	$harga = $_POST['harga'];
	$keberangkatan = $_POST['keberangkatan'];

	if (isset($nama) && isset($durasi) && isset($transit) && isset($jarakToMadinah) && isset($jarakToMekah) && isset($maskapai) && isset($harga) && isset($keberangkatan)) {
		
		$sql = mysql_query('INSERT INTO paket_umroh(nama, durasi, transit, jarak_to_madinah, jarak_to_mekah, maskapai, harga, keberangkatan) VALUES ("'.$nama.'","'.$durasi.'","'.$transit.'","'.$jarakToMadinah.'","'.$jarakToMekah.'","'.$maskapai.'","'.$harga.'","'.$keberangkatan.'")'); 

		$response = array();

		if ($sql) {
			$response['result'] = 1;
			$response['msg'] = "Sukses add paket";
			echo json_encode($response);
		}else{
			$response['result'] = 0;
			$response['msg'] = "gagal add paket";
			echo json_encode($response);
		}

	} else {
		 $response['result'] = 0;
		 $response['msg'] = "Paremeter Salah";
		 echo json_encode($response);
	}

?>