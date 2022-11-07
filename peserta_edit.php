<?php include('header.php'); ?>
<?php include('sidemenu.php'); ?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Peserta</h1>
    <p class="mb-4"> </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Peserta</h6>        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form method="POST" action="peserta_pro_edit.php">
                    <?php 
                    include_once("connection.php");
                    $id = $_GET['id'];
                    $result_data = mysqli_query($mysqli, "SELECT * FROM tab_peserta WHERE id= '$id' ");
                    
                    while ($res = mysqli_fetch_array($result_data)) {
                        $nim = $res['nim'];
                        $nama = $res['nama'];
                        $prodi = $res['prodi'];
                        $kelas = $res['kelas'];
                        $semester = $res['semester'];
                        $tempat_lahir = $res['tempat_lahir'];
                        $tanggal_lahir = $res['tanggal_lahir'];
                        $agama = $res['agama'];
                        $jenis_kelamin = $res['jenis_kelamin'];
                        $no_hp = $res['no_hp'];
                        $alamat = $res['alamat'];
                    }
                    ?>
                    <input type="hidden" name="id" class="form-control" required value="<?=  $id; ?>">
                <table>
                    <tr>
                        <td>NIM</td>  
                        <td>&nbsp;&nbsp;&nbsp;</td>                        
                        <td><input type="text" name="nim" class="form-control" required value="<?=  $nim; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>  
                        <td>&nbsp;&nbsp;&nbsp;</td>                        
                        <td><input type="text" name="nama" class="form-control" required value="<?=  $nama; ?>"></td>
                    </tr>
                    <tr>
                        <td>Prodi</td>  
                        <td>&nbsp;&nbsp;&nbsp;</td>                        
                        <td><input type="text" name="prodi" class="form-control" required value="<?=  $prodi; ?>"></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>  
                        <td>&nbsp;&nbsp;&nbsp;</td>                        
                        <td><input type="text" name="kelas" class="form-control" required value="<?=  $kelas; ?>"></td>
                    </tr>
                    <tr>
                        <td>Semester</td>  
                        <td>&nbsp;&nbsp;&nbsp;</td>                        
                        <td><input type="text" name="semester" class="form-control" required value="<?=  $semester; ?>"></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>  
                        <td>&nbsp;&nbsp;&nbsp;</td>                        
                        <td><input type="text" name="tempat_lahir" class="form-control" required value="<?=  $tempat_lahir; ?>"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>  
                        <td>&nbsp;&nbsp;&nbsp;</td>                        
                        <td><input type="text" name="tanggal_lahir" class="form-control" required value="<?=  $tanggal_lahir; ?>"></td>
                    </tr>
                    <tr>
                        <td>Agama</td>  
                        <td>&nbsp;&nbsp;&nbsp;</td>                        
                        <td><input type="text" name="agama" class="form-control" required value="<?=  $agama; ?>"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>  
                        <td>&nbsp;&nbsp;&nbsp;</td>                        
                        <td><input type="text" name="jenis_kelamin" class="form-control" required value="<?=  $jenis_kelamin; ?>"></td>
                    </tr>
                    <tr>
                        <td>No HP</td>  
                        <td>&nbsp;&nbsp;&nbsp;</td>                        
                        <td><input type="text" name="no_hp" class="form-control" required value="<?=  $no_hp; ?>"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>  
                        <td>&nbsp;&nbsp;&nbsp;</td>                        
                        <td><input type="text" name="alamat" class="form-control" required value="<?=  $alamat; ?>"></td>
                    </tr>
                </table>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="peserta.php" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include('footer.php'); ?>