<?php

include 'server.php';

$idJamaah = $_POST['id_jamaah'];
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

if (isset($idJamaah) && isset($idUser) && isset($noKtp) && isset($nama) && isset($tempatLahir) && isset($pekerjaan) && isset($tanggalLahir) && isset($jk) && isset($alamat) && isset($namaIbuKandung) && isset($kewarganegaraan) && isset($noTelp) && isset($email) && isset($keperluan)) {

	$update = mysql_query("UPDATE jamaah SET no_ktp = '$noKtp', nama_lengkap = '$nama', tempat_lahir = '$tempatLahir', pekerjaan = '$pekerjaan', tanggal_lahir = '$tanggalLahir', jenis_kelamin = '$jk', alamat = '$alamat', nama_ibu_kandung = '$namaIbuKandung', kewarganegaraan = '$kewarganegaraan', no_telpon = '$noTelp', email = '$email', keperluan = '$keperluan' WHERE id_jamaah = '$idJamaah'")or die(mysql_error());

	$response = array();

	if ($update) {
		$response['result'] = '1';
		$response['msg'] = "Sukses edit jamah";
		$response["user"]['id_jamaah'] = $idJamaah;
		$response["user"]['id_user'] = $idUser;
		$response["user"]['no_ktp'] = $noKtp;
		$response["user"]['nama_lengkap'] = $nama;
		$response["user"]['tempat_lahir'] = $tempatLahir;
		$response["user"]['pekerjaan'] = $pekerjaan;
		$response["user"]['tanggal_lahir'] = $tanggalLahir;
		$response["user"]['jenis_kelamin'] = $jk;
		$response["user"]['alamat'] = $alamat;
		$response["user"]['nama_ibu_kandung'] = $namaIbuKandung;
		$response["user"]['kewarganegaraan'] = $kewarganegaraan;
		$response["user"]['no_telpon'] = $noTelp;
		$response["user"]['email'] = $email;
		$response["user"]['keperluan'] = $keperluan;
		echo json_encode($response);
	}else{
		$response['result'] = '0';
		$response['msg'] = "Gagal edit jamah";
		echo json_encode($response);
	}
} else {
	$response['result'] = '0';
	$response['msg'] = "Paremeter Salah";
	echo json_encode($response);
}
?>