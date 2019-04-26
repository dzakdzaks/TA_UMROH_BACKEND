<?php
include 'server.php';
 $id = $_POST['id'];
 if (isset($id)) {

 	 	$status = 'Belum Dibayar';
 	  
// perintah untuk menampilkan semua data pembeli dari table pembeli
$sql = mysql_query("SELECT tiket.*,paket_umroh.*,users.*, paket_umroh.id AS id_paket, users.id AS id_user FROM tiket INNER JOIN paket_umroh ON tiket.id_paket=paket_umroh.id INNER JOIN users ON tiket.id_user=users.id WHERE users.id = '$id' AND tiket.status = '$status' ORDER BY id_tiket DESC")or die(mysql_error());

//variable array
$response = array();
//cek apakah ada data pembeli
if (mysql_num_rows($sql)>0) {
	// membuat variable array di dalam array $response
	$response['tiket'] = array();
	// loping data pembeli
	while ($row = mysql_fetch_array($sql)) {
		//membuat variable array untuk menampung data pembeli sementara sebelum di masukan kedalam array response dan di jadkan data json
		$data = array();
		$data['id_tiket'] = $row['id_tiket'];		
		$data['id_user'] = $row['id_user'];				
		$data['name'] = $row['name'];			
		$data['email'] = $row['email'];			
		$data['alamat'] = $row['alamat'];			
		$data['ttl'] = $row['ttl'];			
		$data['goldar'] = $row['goldar'];			
		$data['notelp'] = $row['notelp'];			
		$data['role'] = $row['role'];	
		$data['id_paket'] = $row['id_paket'];		
		$data['nama'] = $row['nama'];			
		$data['durasi'] = $row['durasi'];			
		$data['transit'] = $row['transit'];			
		$data['jarak_to_madinah'] = $row['jarak_to_madinah'];			
		$data['jarak_to_mekah'] = $row['jarak_to_mekah'];			
		$data['maskapai'] = $row['maskapai'];			
		$data['harga'] = $row['harga'];			
		$data['keberangkatan'] = $row['keberangkatan'];						
		$data['status'] = $row['status'];						
		//akhir dari memasukan data kedalam array $data
		array_push($response['tiket'],$data);
	}
	$response['result'] = 1;
	$response['msg'] = "semua tiket";
	echo json_encode($response);
}else{
	$response['result'] = 0;
	$response['msg'] = "Tidak ada tiket";
	echo json_encode($response);
} 
} 

	
?>