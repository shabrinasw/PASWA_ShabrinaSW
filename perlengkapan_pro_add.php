<?php session_start(); 
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

// include_once("connection.php");
// $id = $_POST['id'];
// $perlengkapan = $_POST['perlengkapan'];
// $kategori = $_POST['kategori'];
	
// 	mysqli_query($mysqli, "INSERT INTO tab_perlengkapan (id,perlengkapan,kategori) VALUES('','$id','$perlengkapan','$kategori')");   
// 	echo "<script language=javascript>
// 			alert('Simpan Berhasil');
// 			window.location='perlengkapan.php';
// 			</script>";

			include_once("connection.php");
$id = $_POST['id'];
$perlengkapan = $_POST['perlengkapan'];
$kategori = $_POST['kategori'];
	$result = mysqli_query($mysqli, "INSERT INTO tab_perlengkapan (id,perlengkapan,kategori) 
	VALUES('$id','$perlengkapan','$kategori')");   
	echo "<script language=javascript>
			alert('Simpan Berhasil');
			window.location='perlengkapan.php';
			</script>";