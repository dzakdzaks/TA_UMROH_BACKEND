<?php

include 'server.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$durasi = $_POST['durasi'];
$transit = $_POST['transit'];
$jarakToMadinah = $_POST['jarak_to_madinah'];
$jarakToMekah = $_POST['jarak_to_mekah'];
$maskapai = $_POST['maskapai'];
$harga = $_POST['harga'];
$keberangkatan = $_POST['keberangkatan'];


if (isset($id) && isset($nama) && isset($durasi) && isset($transit) && isset($jarakToMadinah) && isset($jarakToMekah) && isset($maskapai) && isset($harga) && isset($keberangkatan)) {

	$update = mysql_query("UPDATE paket_umroh SET nama = '$nama', durasi = '$durasi', transit = '$transit', jarak_to_madinah = '$jarakToMadinah', jarak_to_mekah = '$jarakToMekah', maskapai = '$maskapai', harga = '$harga', keberangkatan = '$keberangkatan' WHERE id = '$id'")or die(mysql_error());

	$response = array();

	if ($update) {
		$response['result'] = '1';
		$response['msg'] = "Sukses edit paket";
		// $response['paket']['id'] = $id;
		// $response['paket']['nama'] = $nama;
		// $response['paket']['durasi'] = $durasi;
		// $response['paket']['transit'] = $transit;
		// $response['paket']['jarak_to_madinah'] = $jarakToMadinah;
		// $response['paket']['jarak_to_mekah'] = $jarakToMekah;
		// $response['paket']['maskapai'] = $maskapai;
		// $response['paket']['harga'] = $harga;
		// $response['paket']['keberangkatan'] = $keberangkatan;
		echo json_encode($response);
	}else{
		$response['result'] = '0';
		$response['msg'] = "Gagal edit paket";
		echo json_encode($response);
	}
} else {
	$response['result'] = '0';
	$response['msg'] = "Paremeter Salah";
	echo json_encode($response);
}
?>