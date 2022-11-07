<?php include('header.php'); ?>
<?php include('sidemenu.php'); ?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kelompok</h1>
    <p class="mb-4"> </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Peserta - Kelompok</h6>
            <a href="kelompok_add.php" class="btn btn-primary">Tambah</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Nama Kelompok</td>
                            <td>Nama Peserta</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once("connection.php");
                        $no = 0;
                        $result = mysqli_query($mysqli, "SELECT * FROM tab_kelompok");
                        while ($row = mysqli_fetch_array($result)) {
                            $id_kelompok = $row['id'];
                            $no++;
                            echo "<tr>";
                            echo "<td class='text-dark'>" . $no . "</td>";
                            echo "<td class='text-dark'>" . $row['nama_kelompok'] . "</td>";

                        $result_peserta = mysqli_query($mysqli, "select b.nama from tab_peserta_kelompok as a left join tab_peserta as b on a.nim = b.nim where a.id_kelompok = '$id_kelompok' ");
                        $rowx = mysqli_fetch_assoc($result_peserta);
                        if(!empty($rowx)){
                            echo "<td>";
                            $peserta = mysqli_query($mysqli, "select b.nama from tab_peserta_kelompok as a left join tab_peserta as b on a.nim = b.nim where a.id_kelompok = '$id_kelompok' ");
                            while ($pesertax =  mysqli_fetch_array($peserta)){
                                echo "<li>".$pesertax['nama']."</li><br>";
                            }
                            echo "</td>";
                            } else{
                                echo "<td><a href='set_kelompok.php?id=$id_kelompok' class= 'btn btn-info'>Set Kelompok</a></td>";
                            } 
                        
                        }
                        ?>
                    </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include('footer.php'); ?>