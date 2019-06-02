<?php 
	include 'server.php';
	$eror		= false;
	if(isset($_POST['id'])){
	
	$id = $_POST['id'];
	
	
	$sql = mysql_query("DELETE FROM jamaah WHERE id_jamaah = '$id'");


		if ($sql) {
	$response['result'] = 1;
	$response['msg'] = "Sukses delete jamaah";
	echo json_encode($response);
}else{
	$response['result'] = 0;
	$response['msg'] = "gagal delete jamaah";
	echo json_encode($response);
}
}else {
	$response['result'] = 0;
	$response['msg'] = "Paremeter Salah";
	echo json_encode($response);
}
 ?>