<?php session_start(); 
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

// include_once("connection.php");
// $nim = $_POST['nim'];
// $nama = $_POST['nama'];
// $prodi = $_POST['prodi'];
// $kelas = $_POST['kelas'];
// $semester = $_POST['semester'];
// $tanggal_lahir = $_POST['tanggal_lahir'];
// $tempat_lahir = $_POST['tempat_lahir'];
// $agama = $_POST['agama'];
// $jenis_kelamin = $_POST['jenis_kelamin'];
// $no_hp = $_POST['no_hp'];
// $alamat = $_POST['alamat'];
	
// 	mysqli_query($mysqli, "INSERT INTO tab_peserta (nim,nama,prodi,kelas,semester,tanggal_lahir,tempat_lahir,agama,jenis_kelamin,no_hp,alamat) VALUES($nim,$nama,$prodi,$kelas,$semester,$tanggal_lahir,$tempat_lahir,$agama,$jenis_kelamin,$no_hp,$alamat)");   
// 	echo "<script language=javascript>
// 			alert('Simpan Berhasil');
// 			window.location='peserta.php';
// 			</script>";


			include_once("connection.php");
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$kelas = $_POST['kelas'];
$semester = $_POST['semester'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$tempat_lahir = $_POST['tempat_lahir'];
$agama = $_POST['agama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
	
	$result = mysqli_query($mysqli, "INSERT INTO tab_peserta (nim,nama,prodi,kelas,semester,tanggal_lahir,tempat_lahir,agama,jenis_kelamin,no_hp,alamat) VALUES('$nim','$nama','$prodi','$kelas','$semester','$tanggal_lahir','$tempat_lahir','$agama','$jenis_kelamin','$no_hp','$alamat')");   
	echo "<script language=javascript>
			alert('Simpan Berhasil');
			window.location='peserta.php';
			</script>";