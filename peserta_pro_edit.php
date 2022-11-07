<?php session_start(); 
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

include_once("connection.php");
$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$kelas = $_POST['kelas'];
$semester = $_POST['semester'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$agama = $_POST['agama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
	
$result= mysqli_query($mysqli, "UPDATE tab_peserta SET nim='$nim', nama='$nama', prodi='$prodi', kelas='$kelas',semester=$semester, tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir',agama='$agama',jenis_kelamin='$jenis_kelamin',no_hp='$no_hp',alamat='$alamat' WHERE id='$id' ");   
echo "<script language=javascript>
			alert('Simpan Berhasil');
			window.location='peserta.php';
			</script>";