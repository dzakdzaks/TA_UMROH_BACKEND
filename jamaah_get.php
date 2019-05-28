<?php

include 'server.php';

$id = $_POST['id_user'];

$response = array();

if (isset($id)) { 

	$user = mysql_query("SELECT * FROM jamaah WHERE id_user = '$id'");

	if (mysql_num_rows($user) == 1) {

		$row = mysql_fetch_assoc($user);

		$response['result'] = "1";	
		$response['msg'] = 'jamaah ada';	
		$response["user"]['id_jamaah'] = $row['id_jamaah'];
		$response["user"]['id_user'] = $row['id_user'];
		$response["user"]['no_ktp'] = $row['no_ktp'];
		$response["user"]['nama_lengkap'] = $row['nama_lengkap'];
		$response["user"]['tempat_lahir'] = $row['tempat_lahir'];
		$response["user"]['pekerjaan'] = $row['pekerjaan'];
		$response["user"]['tanggal_lahir'] = $row['tanggal_lahir'];
		$response["user"]['jenis_kelamin'] = $row['jenis_kelamin'];
		$response["user"]['alamat'] = $row['alamat'];
		$response["user"]['nama_ibu_kandung'] = $row['nama_ibu_kandung'];
		$response["user"]['kewarganegaraan'] = $row['kewarganegaraan'];
		$response["user"]['no_telpon'] = $row['no_telpon'];
		$response["user"]['email'] = $row['email'];
		$response["user"]['keperluan'] = $row['keperluan'];
		echo json_encode($response);

	} else {

		$response['result'] = "0";
		$response['msg'] = "jamaah tidak ada";
		$response["user"]['id_jamaah'] = null;
		$response["user"]['id_user'] = null;
		$response["user"]['no_ktp'] = null;
		$response["user"]['nama_lengkap'] = null;
		$response["user"]['tempat_lahir'] = null;
		$response["user"]['pekerjaan'] = null;
		$response["user"]['tanggal_lahir'] = null;
		$response["user"]['jenis_kelamin'] = null;
		$response["user"]['alamat'] = null;
		$response["user"]['nama_ibu_kandung'] = null;
		$response["user"]['kewarganegaraan'] = null;
		$response["user"]['no_telpon'] = null;
		$response["user"]['email'] = null;
		$response["user"]['keperluan'] = null;
		echo json_encode($response);

	}

} else {

	$response["result"] = "0";
	$response["msg"] = "paremeter salah";
	echo json_encode($response);

}	

?>