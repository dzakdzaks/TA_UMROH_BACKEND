<?php

include 'server.php';

$id = $_POST['id'];
$idUser = $_POST['id_user'];
$idPaket = $_POST['id_paket'];
$status = $_POST['status'];
$image = $_POST['image'];
$keterangan = $_POST['keterangan'];
$path = "imagebuktitransfer/" . $id . "_" . $idPaket . "_" . $idUser . "_" . uniqid() . ".jpg";


if (isset($id) && isset($idUser) && isset($idPaket) && isset($status) && isset($image) && isset($keterangan)) {

	$update = mysql_query("UPDATE tiket SET status = '$status', bukti = '$path', ket_bukti = '$keterangan' WHERE id_tiket = '$id'")or die(mysql_error());

	$response = array();

	if ($update) {
		file_put_contents($path, base64_decode($image));
		$response['result'] = '1';
		$response['msg'] = "Sukses edit tiket";
		$response['tiket']['id'] = $id;
		$response['tiket']['id_user'] = $idUser;
		$response['tiket']['id_paket'] = $idPaket;
		$response['tiket']['status'] = $status;
		$response['tiket']['bukti'] = $path;
		$response['tiket']['keterangan_bukti'] = $keterangan;
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