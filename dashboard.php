<?php include('header.php'); ?>
<?php include('sidemenu.php'); ?>

<?php
 include_once("connection.php");
$result_peserta = mysqli_query($mysqli, "select count(nim) as total_peserta from tab_peserta");
$total_peserta = mysqli_fetch_assoc($result_peserta);
if(empty($total_peserta)){ $t_peserta = "0"; }else{ $t_peserta = $total_peserta['total_peserta'];}

$result_panitia = mysqli_query($mysqli, "select count(nim) as total_panitia from tab_panitia");
$total_panitia = mysqli_fetch_assoc($result_panitia);
if(empty($total_panitia)){ $t_panitia = "0"; }else{ $t_panitia = $total_panitia['total_panitia'];}

?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-6 col-md-12 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Total Peserta</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $t_peserta ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Total Panitia</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $t_panitia ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    <!-- End of Main Content -->

    <?php include('footer.php'); ?>