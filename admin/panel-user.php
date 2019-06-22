<?php include "header.php" ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Overview</small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">

    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <?php
              session_start();
              $nama          = $_SESSION['nama'];
              $pasien        = mysqli_query($connect, "SELECT COUNT(*) FROM pasien");
              while ($jumlah = mysqli_fetch_row($pasien)) {
                echo "<h3>$jumlah[0]</h3>";
              }
             ?>
            <p>Total Pasien</p>
          </div>
          <div class="icon">
            <i class="fa fa-user"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a> -->
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <?php
              session_start();
              $nama          = $_SESSION['nama'];
              $pasien        = mysqli_query($connect, "SELECT COUNT(*) FROM siswa_baru");
              while ($jumlah = mysqli_fetch_row($pasien)) {
                echo "<h3>$jumlah[0]</h3>";
              }
             ?>
            <p>Total Mahasiswa Baru</p>
          </div>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a> -->
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <?php
              session_start();
              $nama          = $_SESSION['nama'];
              $pasien        = mysqli_query($connect, "SELECT COUNT(*) FROM obat");
              while ($jumlah = mysqli_fetch_row($pasien)) {
                echo "<h3>$jumlah[0]</h3>";
              }
             ?>
            <p>Total Obat</p>
          </div>
          <div class="icon">
            <i class="fa fa-heartbeat"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a> -->
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <?php
              session_start();
              $nama          = $_SESSION['nama'];
              $pasien        = mysqli_query($connect, "SELECT COUNT(*) FROM riwayat");
              while ($jumlah = mysqli_fetch_row($pasien)) {
                echo "<h3>$jumlah[0]</h3>";
              }
             ?>
            <p>Total Riwayat</p>
          </div>
          <div class="icon">
            <i class="fa fa-book"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a> -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
          <div class="inner">
            <?php
              session_start();
              $nama          = $_SESSION['nama'];
              $tanggal       = date('d/m/Y');
              $promotif      = mysqli_query($connect, "SELECT COUNT(*) FROM promotif");
              while ($jumlah = mysqli_fetch_row($promotif)) {
                echo "<h3>$jumlah[0]</h3>";
              }
             ?>
            <p>Total Promotif</p>
          </div>
          <div class="icon">
            <i class="fa fa-folder"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a> -->
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
          <div class="inner">
            <?php
              session_start();
              $nama          = $_SESSION['nama'];
              $tanggal       = date('d/m/Y');
              $bulan         = date('m');
              $promotif      = mysqli_query($connect, "SELECT COUNT(*) FROM promotif WHERE month(tanggal)='$bulan'");
              while ($jumlah = mysqli_fetch_row($promotif)) {
                echo "<h3>$jumlah[0]</h3>";
              }
             ?>
            <p>Total Promotif Bulanan</p>
          </div>
          <div class="icon">
            <i class="fa  fa-calendar-o"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a> -->
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
          <div class="inner">
            <?php
              session_start();
              $nama          = $_SESSION['nama'];
              $tanggal       = date('d/m/Y');
              $promotif      = mysqli_query($connect, "SELECT COUNT(*) FROM promotif WHERE YEARWEEK(tanggal)=YEARWEEK(NOW())");
              while ($jumlah = mysqli_fetch_row($promotif)) {
                echo "<h3>$jumlah[0]</h3>";
              }
             ?>
            <p>Total Promotif Mingguan</p>
          </div>
          <div class="icon">
            <i class="fa  fa-calendar-o"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a> -->
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
          <div class="inner">
            <?php
              session_start();
              $nama          = $_SESSION['nama'];
              $tanggal       = date('d/m/Y');
              $promotif      = mysqli_query($connect, "SELECT COUNT(*) FROM promotif WHERE `tanggal` = '$tanggal'");
              while ($jumlah = mysqli_fetch_row($promotif)) {
                echo "<h3>$jumlah[0]</h3>";
              }
             ?>
            <p>Total Promotif Harian</p>
          </div>
          <div class="icon">
            <i class="fa fa-calendar-o"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a> -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <?php
              session_start();
              $nama          = $_SESSION['nama'];
              $tanggal       = date('Y-m-d');
              $pasien        = mysqli_query($connect, "SELECT COUNT(*) FROM kuratif");
              while ($jumlah = mysqli_fetch_row($pasien)) {
                echo "<h3>$jumlah[0]</h3>";
              }
             ?>
            <p>Total Kuratif</p>
          </div>
          <div class="icon">
            <i class="fa fa-folder"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a> -->
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <?php
              session_start();
              $nama          = $_SESSION['nama'];
              $tanggal       = date('d/m/Y');
              $bulan         = date('m');
              $promotif      = mysqli_query($connect, "SELECT COUNT(*) FROM kuratif WHERE month(tgl_periksa)='$bulanan'");
              while ($jumlah = mysqli_fetch_row($promotif)) {
                echo "<h3>$jumlah[0]</h3>";
              }
             ?>
            <p>Total Kuratif Bulanan</p>
          </div>
          <div class="icon">
            <i class="fa  fa-calendar-o"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a> -->
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <?php
              session_start();
              $nama          = $_SESSION['nama'];
              $tanggal       = date('d/m/Y');
              $promotif      = mysqli_query($connect, "SELECT COUNT(*) FROM kuratif WHERE YEARWEEK(tgl_periksa)=YEARWEEK(NOW())");
              while ($jumlah = mysqli_fetch_row($promotif)) {
                echo "<h3>$jumlah[0]</h3>";
              }
             ?>
            <p>Total Kuratif Mingguan</p>
          </div>
          <div class="icon">
            <i class="fa  fa-calendar-o"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a> -->
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <?php
              session_start();
              $nama          = $_SESSION['nama'];
              $tanggal       = date('d/m/Y');
              $promotif      = mysqli_query($connect, "SELECT COUNT(*) FROM kuratif WHERE `tgl_periksa` = '$tanggal'");
              while ($jumlah = mysqli_fetch_row($promotif)) {
                echo "<h3>$jumlah[0]</h3>";
              }
             ?>
            <p>Total Kuratif Harian</p>
          </div>
          <div class="icon">
            <i class="fa  fa-calendar-o"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a> -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <?php
              session_start();
              $nama          = $_SESSION['nama'];
              $tanggal       = date('d/m/Y');
              $pasien        = mysqli_query($connect, "SELECT COUNT(*) FROM rehabilitatif");
              while ($jumlah = mysqli_fetch_row($pasien)) {
                echo "<h3>$jumlah[0]</h3>";
              }
             ?>
            <p>Total Rehabilitatif</p>
          </div>
          <div class="icon">
            <i class="fa  fa-folder"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a> -->
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <?php
              session_start();
              $nama          = $_SESSION['nama'];
              $tanggal       = date('d/m/Y');
              $bulan         = date('m');
              $promotif      = mysqli_query($connect, "SELECT COUNT(*) FROM rehabilitatif WHERE month(tangal)='$bulanan'");
              while ($jumlah = mysqli_fetch_row($promotif)) {
                echo "<h3>$jumlah[0]</h3>";
              }
             ?>
            <p>Total Rehabilitatif Bulanan</p>
          </div>
          <div class="icon">
            <i class="fa  fa-calendar-o"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a> -->
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <?php
              session_start();
              $nama          = $_SESSION['nama'];
              $tanggal       = date('d/m/Y');
              $promotif      = mysqli_query($connect, "SELECT COUNT(*) FROM rehabilitatif WHERE YEARWEEK(tangal)=YEARWEEK(NOW())");
              while ($jumlah = mysqli_fetch_row($promotif)) {
                echo "<h3>$jumlah[0]</h3>";
              }
             ?>
            <p>Total Rehabilitatif Mingguan</p>
          </div>
          <div class="icon">
            <i class="fa  fa-calendar-o"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a> -->
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <?php
              session_start();
              $nama          = $_SESSION['nama'];
              $tanggal       = date('d/m/Y');
              $promotif      = mysqli_query($connect, "SELECT COUNT(*) FROM rehabilitatif WHERE `tangal` = '$tanggal'");
              while ($jumlah = mysqli_fetch_row($promotif)) {
                echo "<h3>$jumlah[0]</h3>";
              }
             ?>
            <p>Total Rehabilitatif Harian</p>
          </div>
          <div class="icon">
            <i class="fa  fa-calendar-o"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a> -->
        </div>
      </div>
    </div>
    <!-- /.row -->

  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include "footer.php" ?>
