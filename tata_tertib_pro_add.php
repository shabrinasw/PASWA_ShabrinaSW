<?php session_start(); 
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

// include_once("connection.php");
// $id = $_POST['id'];
// $tata_tertib = $_POST['tata_tertib'];
	
// 	mysqli_query($mysqli, "INSERT INTO tab_tata_tertib (id,tata_tertib) VALUES('','$id','$tata_tertib')");   
// 	echo "<script language=javascript>
// 			alert('Simpan Berhasil');
// 			window.location='tata_tertib.php';
// 			</script>";

			include_once("connection.php");
$id = $_POST['id'];
$tata_tertib = $_POST['tata_tertib'];

	$result = mysqli_query($mysqli, "INSERT INTO tab_tata_tertib (id,tata_tertib) 
	VALUES('$id','$tata_tertib')");   
	echo "<script language=javascript>
			alert('Simpan Berhasil');
			window.location='tata_tertib.php';
			</script>";