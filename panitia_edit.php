<?php include('header.php'); ?>
<?php include('sidemenu.php'); ?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Panitia</h1>
    <p class="mb-4"> </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Panitia</h6>        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form method="POST" action="panitia_pro_edit.php">
                <?php
                    include_once("connection.php");
                    $nim = $_GET['nim'];
                    $result_data = mysqli_query($mysqli, "SELECT * FROM tab_panitia WHERE nim= '$nim' ");

                    while ($res = mysqli_fetch_array($result_data)) {
                        $nama = $res['nama'];
                        $semester = $res['semester'];
                        $kelas = $res['kelas'];
                        $no_hp = $res['no_hp'];
                        $email = $res['email'];
                        $jabatan = $res['jabatan'];
                    }
                    ?>
                    <input type="hidden" name="id" class="form-control" required value="<?php echo $id; ?>">
                <table>
                    <tr>
                        <td>NIM</td>  
                        <td>&nbsp;&nbsp;&nbsp;</td>                        
                        <td><input type="text" name="nim" class="form-control" required value="<?php echo $nim; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>  
                        <td>&nbsp;&nbsp;&nbsp;</td>                        
                        <td><input type="text" name="nama" class="form-control" required value="<?php echo $nama; ?>"></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>  
                        <td>&nbsp;&nbsp;&nbsp;</td>                        
                        <td><input type="text" name="kelas" class="form-control" required value="<?php echo $kelas; ?>"></td>
                    </tr>
                    <tr>
                        <td>Semester</td>  
                        <td>&nbsp;&nbsp;&nbsp;</td>                        
                        <td><input type="text" name="semester" class="form-control" required value="<?php echo $semester; ?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>  
                        <td>&nbsp;&nbsp;&nbsp;</td>                        
                        <td><input type="text" name="email" class="form-control" required value="<?php echo $email; ?>"></td>
                    </tr>
                    <tr>
                        <td>No HP</td>  
                        <td>&nbsp;&nbsp;&nbsp;</td>                        
                        <td><input type="text" name="no_hp" class="form-control" required value="<?php echo $no_hp; ?>"></td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>  
                        <td>&nbsp;&nbsp;&nbsp;</td>                        
                        <td><input type="text" name="jabatan" class="form-control" required value="<?php echo $jabatan; ?>"></td>
                    </tr>
                </table>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="panitia.php" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include('footer.php'); ?>