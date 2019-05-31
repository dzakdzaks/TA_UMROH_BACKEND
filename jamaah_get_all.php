<?php
include 'server.php';

   $id = $_POST['id'];
 if (isset($id)) { 
// perintah untuk menampilkan semua data pembeli dari table pembeli
$sql = mysql_query("SELECT * FROM jamaah ORDER BY id_jamaah ASC")or die(mysql_error());
//variable array
$response = array();
//cek apakah ada data pembeli
if (mysql_num_rows($sql)>0) {
	// membuat variable array di dalam array $response
	$response['alljamaah'] = array();
	// loping data pembeli
	while ($row = mysql_fetch_array($sql)) {
		//membuat variable array untuk menampung data pembeli sementara sebelum di masukan kedalam array response dan di jadkan data json
		$data = array();
		$data['id_jamaah'] = $row['id_jamaah'];
		$data['id_user'] = $row['id_user'];
		$data['no_ktp'] = $row['no_ktp'];
		$data['nama_lengkap'] = $row['nama_lengkap'];
		$data['tempat_lahir'] = $row['tempat_lahir'];
		$data['pekerjaan'] = $row['pekerjaan'];
		$data['tanggal_lahir'] = $row['tanggal_lahir'];
		$data['jenis_kelamin'] = $row['jenis_kelamin'];
		$data['alamat'] = $row['alamat'];
		$data['nama_ibu_kandung'] = $row['nama_ibu_kandung'];
		$data['kewarganegaraan'] = $row['kewarganegaraan'];
		$data['no_telpon'] = $row['no_telpon'];
		$data['email'] = $row['email'];
		$data['keperluan'] = $row['keperluan'];
		
		//akhir dari memasukan data kedalam array $data
		array_push($response['alljamaah'],$data);
	}
	$response['result'] = 1;
	$response['msg'] = "semua alljamaah";
	echo json_encode($response);
}else{
	$response['result'] = 0;
	$response['msg'] = "Tidak ada alljamaah";
	echo json_encode($response);
} 
} 
?>