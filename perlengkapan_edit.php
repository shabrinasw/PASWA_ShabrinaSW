<?php include('header.php'); ?>
<?php include('sidemenu.php'); ?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Perlengkapan</h1>
    <p class="mb-4"> </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Perlengkapan</h6>        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form method="POST" action="perlengkapan_pro_edit.php">
                <?php 
                                    include_once("connection.php");
                                    $id = $_GET['id'];
                                    $result_data = mysqli_query($mysqli, "SELECT * FROM tab_perlengkapan WHERE id= '$id' ");
                                    
                                    while ($res = mysqli_fetch_array($result_data)) {
                                        $perlengkapan = $res['perlengkapan'];
                                        $kategori = $res['kategori'];
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
                        <td>Perlengkapan</td>  
                        <td>&nbsp;&nbsp;&nbsp;</td>                        
                        <td><input type="text" name="perlengkapan" class="form-control" required value="<?php echo $perlengkapan; ?>"></td>
                    </tr>
                    <tr>
                        <td>Kategori</td>  
                        <td>&nbsp;&nbsp;&nbsp;</td>                        
                        <td><input type="text" name="kategori" class="form-control" required value="<?php echo $kategori; ?>"></td>
                    </tr>
                </table>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="perlengkapan.php" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include('footer.php'); ?>