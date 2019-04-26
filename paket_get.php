<?php
include 'server.php';

   $id = $_POST['id'];
 if (isset($id)) { 
// perintah untuk menampilkan semua data pembeli dari table pembeli
$sql = mysql_query("SELECT * FROM paket_umroh ORDER BY id DESC")or die(mysql_error());
//variable array
$response = array();
//cek apakah ada data pembeli
if (mysql_num_rows($sql)>0) {
	// membuat variable array di dalam array $response
	$response['paket'] = array();
	// loping data pembeli
	while ($row = mysql_fetch_array($sql)) {
		//membuat variable array untuk menampung data pembeli sementara sebelum di masukan kedalam array response dan di jadkan data json
		$data = array();
		$data['id'] = $row['id'];
		$data['nama'] = $row['nama'];
		$data['durasi'] = $row['durasi'];
		$data['transit'] = $row['transit'];
		$data['jarak_to_madinah'] = $row['jarak_to_madinah'];
		$data['jarak_to_mekah'] = $row['jarak_to_mekah'];
		$data['maskapai'] = $row['maskapai'];
		$data['harga'] = $row['harga'];
		$data['keberangkatan'] = $row['keberangkatan'];
		
		//akhir dari memasukan data kedalam array $data
		array_push($response['paket'],$data);
	}
	$response['result'] = 1;
	$response['msg'] = "semua paket";
	echo json_encode($response);
}else{
	$response['result'] = 0;
	$response['msg'] = "Tidak ada paket";
	echo json_encode($response);
} 
} 
?>