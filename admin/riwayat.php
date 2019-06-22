<?php include "header.php" ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Riwayat Pemeriksaan
      <small>Riwayat Pemeriksaan Harian</small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">

    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Riwayat Pemeriksaan Harian</h3>
            | <a target="_blank" href="export_excel.php">Export Excel</a>
            <div class="box-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <form class="" action="riwayat.php" method="GET">
                <input type="text" name="nama" class="form-control pull-right" placeholder="Search">
                <div class="input-group-btn">
                </div>
              </form>
              </div>
            </div>

            <!-- <div class="box-tools">
              <div class="input-group input-group-sm" style="width: 150px;">

                <div class="input-group-btn">
                  <a class="btn btn-primary" href="add-mahasiswa.php">Riwayat Pemeriksaan Terakhir</a>
                </div>
              </div>
            </div> -->
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            <table class="table table-hover">
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Jenis Periksa</th>
                <th>Tanggal</th>
                <!-- <th style="width:45%">Option</th> -->
              </tr>
                  <?php
                  include "proses/koneksi.php";
                  $nomor       = 1;
                  $nama        = $_REQUEST['nama'];
                  if ($nama != '') {
                    $pasien      = mysqli_query($connect, "SELECT * FROM `riwayat` WHERE `nama` like '%$nama%' OR `jenis_periksa` like '%$nama%' OR `tanggal` like '%$nama%' ORDER BY `riwayat`.`id` DESC ");
                  } else {
                    $pasien      = mysqli_query($connect, "SELECT * FROM `riwayat` ORDER BY `riwayat`.`id` DESC ");
                  }
                  while ($data = mysqli_fetch_row($pasien)) {
                    $namapas   = $data[1];
                    $pas       = mysqli_query($connect, "SELECT * FROM `pasien` WHERE `nama` = '$namapas'");
                    while ($data1 = mysqli_fetch_row($pas)) {
                      $id   = $data1[0];
                    ?>
                <tr>
                  <td><?php echo $nomor; $nomor++; ?></td>
                  <td><?php echo $data[1]; ?></td>
                  <td> <?php echo $data1[9]." ".$data1[10]; ?></td>
                  <td><?php echo $data[2]; ?></td>
                  <td><?php echo $data[3]; ?></td>
                  <td>
                    <!-- <?php if($data[2] == 'Kuratif') { ?>
                      <a href="detail-kuratif.php?data=<?php echo $id; ?>" class="btn btn-warning"> Detail</a>
                    <?php } ?> -->
                    <a href="riwayat.php?cek=hapus&no=<?php echo $data[0]; ?>" class="btn btn-danger">Delete</a>
                  </td>
              </tr>
            <?php }} ?>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>
    <?php
      $cek = $_REQUEST['cek'];
      $no  = $_REQUEST['no'];

      if ($cek == "hapus") {
      $hapus = mysqli_query($connect, "DELETE FROM `riwayat` WHERE `riwayat`.`id` = '$no'");
      echo "<script> window.location = 'riwayat.php';</script>";
      }
     ?>
  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include "footer.php" ?>
