<?php include('header.php'); ?>
<?php include('sidemenu.php'); ?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kegiatan</h1>
    <p class="mb-4"> </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Kegiatan</h6>        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form method="POST" action="kegiatan_pro_edit.php">
                <?php 
                                    include_once("connection.php");
                                    $id = $_GET['id'];
                                    $result_data = mysqli_query($mysqli, "SELECT * FROM tab_kegiatan WHERE id= '$id' ");
                                    
                                    while ($res = mysqli_fetch_array($result_data)) {
                                        $tanggal = $res['tanggal'];
                                        $jam_mulai = $res['jam_mulai'];
                                        $jam_selesai = $res['jam_selesai'];
                                        $nama_kegiatan = $res['nama_kegiatan'];
                                        $narasumber = $res['narasumber'];
                                        $pic = $res['pic'];
                                    }
                                    ?>
                    <input type="hidden" name="id" class="form-control" required value="<?php echo $id; ?>">
                <table>
                    <tr>
                        <td>ID</td>  
                        <td>&nbsp;&nbsp;&nbsp;</td>                        
                        <td><input type="number" name="id" class="form-control" required value="<?php echo $id; ?>"></td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>  
                        <td>&nbsp;&nbsp;&nbsp;</td>                        
                        <td><input type="date" name="tanggal" class="form-control" required value="<?php echo $tanggal; ?>"></td>
                    </tr>
                    <tr>
                        <td>Jam Mulai</td>  
                        <td>&nbsp;&nbsp;&nbsp;</td>                        
                        <td><input type="time" name="jam_mulai" class="form-control" required value="<?php echo $jam_mulai; ?>"></td>
                    </tr>
                    <tr>
                        <td>Jam Selesai</td>  
                        <td>&nbsp;&nbsp;&nbsp;</td>                        
                        <td><input type="time" name="jam_selesai" class="form-control" required value="<?php echo $jam_selesai; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama Kegiatan</td>  
                        <td>&nbsp;&nbsp;&nbsp;</td>                        
                        <td><input type="text" name="nama_kegiatan" class="form-control" required value="<?php echo $nama_kegiatan; ?>"></td>
                    </tr>
                    <tr>
                        <td>Narasumber</td>  
                        <td>&nbsp;&nbsp;&nbsp;</td>                        
                        <td><input type="text" name="narasumber" class="form-control" required value="<?php echo $narasumber; ?>"></td>
                    </tr>
                    <tr>
                        <td>PIC</td>  
                        <td>&nbsp;&nbsp;&nbsp;</td>                        
                        <td><input type="text" name="pic" class="form-control" required value="<?php echo $pic; ?>"></td>
                    </tr>
                </table>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="kegiatan.php" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include('footer.php'); ?>