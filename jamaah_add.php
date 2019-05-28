<?php
	
	include 'server.php';

	$idUser = $_POST['id_user'];
	$noKtp = $_POST['no_ktp'];
	$nama = $_POST['nama_lengkap'];
	$tempatLahir = $_POST['tempat_lahir'];
	$pekerjaan = $_POST['pekerjaan'];
	$tanggalLahir = $_POST['tanggal_lahir'];
	$jk = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$namaIbuKandung = $_POST['nama_ibu_kandung'];
	$kewarganegaraan = $_POST['kewarganegaraan'];
	$noTelp = $_POST['no_telpon'];
	$email = $_POST['email'];
	$keperluan = $_POST['keperluan'];
	

	if (isset($idUser) && isset($noKtp) && isset($nama)&& isset($tempatLahir)&& isset($pekerjaan)&& isset($tanggalLahir)&& isset($jk)&& isset($alamat)&& isset($namaIbuKandung)&& isset($kewarganegaraan)&& isset($noTelp)&& isset($email)&& isset($keperluan)) {
		
		$sql = mysql_query('INSERT INTO jamaah(id_user, no_ktp, nama_lengkap, tempat_lahir, pekerjaan, tanggal_lahir, jenis_kelamin, alamat, nama_ibu_kandung, kewarganegaraan, no_telpon, email, keperluan) VALUES ("'.$idUser.'","'.$noKtp.'","'.$nama.'","'.$tempatLahir.'","'.$pekerjaan.'","'.$tanggalLahir.'","'.$jk.'","'.$alamat.'","'.$namaIbuKandung.'","'.$kewarganegaraan.'","'.$noTelp.'","'.$email.'","'.$keperluan.'")'); 

		$res = array();

		if ($sql) {
			$response['result'] = "1";
			$response['msg'] = "Sukses add jamaah";
			echo json_encode($response);
		}else{
			$response['result'] = "0";
			$response['msg'] = "gagal add jamaah";
			echo json_encode($response);
		}

	} else {
		 $response['result'] = "0";
		 $response['msg'] = "Paremeter Salah";
		 echo json_encode($response);
	}

?>