<?php session_start(); 
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

include_once("connection.php");
$id = $_POST['id'];
$tata_tertib = $_POST['tata_tertib'];
	
$result = mysqli_query($mysqli, "UPDATE tab_tata_tertib SET tata_tertib='$tata_tertib' WHERE id='$id' ");   
echo "<script language=javascript>
			alert('Perbaikan Berhasil');
			window.location='tata_tertib.php';
			</script>";			