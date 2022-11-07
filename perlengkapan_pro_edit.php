<?php session_start(); 
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

include_once("connection.php");
$id = $_POST['id'];
$perlengkapan = $_POST['perlengkapan'];
$kategori = $_POST['kategori'];
	
$result = mysqli_query($mysqli, "UPDATE tab_perlengkapan SET id='$id',
perlengkapan='$perlengkapan',
kategori='$kategori' WHERE nim='$nim' ");   
echo "<script language=javascript>
			alert('Perbaikan Berhasil');
			window.location='perlengkapan.php';
			</script>";

			
			