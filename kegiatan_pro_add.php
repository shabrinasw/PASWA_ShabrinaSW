<?php session_start(); 
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

// include_once("connection.php");
// $id = $_POST['id'];
// $tanggal = $_POST['tanggal'];
// $jam_mulai = $_POST['jam_mulai'];
// $jam_selesai = $_POST['jam_selesai'];
// $nama_kegiatan = $_POST['nama_kegiatan'];
// $narasumber = $_POST['narasumber'];
// $pic = $_POST['pic'];
	
// 	mysqli_query($mysqli, "INSERT INTO tab_kegiatan (id,tanggal,jam_mulai,jam_selesai,nama_kegiatan,narasumber,pic) VALUES('','$id','$tanggal','$jam_mulai','$jam_selesai','$nama_kegiatan','$narasumber','$pic')");   
// 	echo "<script language=javascript>
// 			alert('Simpan Berhasil');
// 			window.location='kegiatan.php';
// 			</script>";

			include_once("connection.php");
$id = $_POST['id'];
$tanggal = $_POST['tanggal'];
$jam_mulai = $_POST['jam_mulai'];
$jam_selesai = $_POST['jam_selesai'];
$nama_kegiatan = $_POST['nama_kegiatan'];
$narasumber = $_POST['narasumber'];
$pic = $_POST['pic'];

	$result = mysqli_query($mysqli, "INSERT INTO tab_kegiatan (id,tanggal,jam_mulai,jam_selesai,nama_kegiatan,narasumber,pic) 
	VALUES('$id','$tanggal','$jam_mulai','$jam_selesai','$no_hp','$narasumber,'$pic')");   
	echo "<script language=javascript>
			alert('Simpan Berhasil');
			window.location='kegiatan.php';
			</script>";