<?php include "header.php" ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Pasien
      <small>Data Pasien</small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">

    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Diri Pasien</h3>

            <div class="box-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <form class="" action="data-pasien.php" method="GET">
                <input type="text" name="nama" class="form-control pull-right" placeholder="Search">
                <div class="input-group-btn">
                </div>
              </form>
              </div>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            <table class="table table-hover">
              <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Smartcard</th>
                <th>Tahun Masuk</th>
                <th>Option</th>
              </tr>
                  <?php
                  include "proses/koneksi.php";
                  $nomor       = 1;
                  $nama        = $_REQUEST['nama'];
                  if ($nama == '') {
                    $pasien      = mysqli_query($connect, "SELECT * FROM `pasien` ORDER BY `pasien`.`id` DESC ");
                  } else {
                    $pasien      = mysqli_query($connect, "SELECT * FROM `pasien` WHERE `nama` like '%$nama%' OR `smartcard` like '%$nama%' OR `thn_masuk` like '%$nama%'");
                  }
                  while ($data = mysqli_fetch_row($pasien)) {
                    ?>
                <tr>
                  <td><?php echo $nomor; $nomor++; ?></td>
                  <td><?php echo $data[2]; ?></td>
                  <td><?php echo $data[20]; ?></td>
                  <td><?php echo $data[19]; ?></td>
                  <td>
                  <a href="promotif-preventiv.php?data=<?php echo $data[0]; ?>"><button type="button" name="button" style="width:100px;" class="btn btn-primary">Promotif</button></a>
                  <a href="kuratif.php?data=<?php echo $data[0]; ?>"><button type="button" class="btn btn-warning" name="button" style="width:100px;">Kuratif</button></a>
                  <a href="detail-pasien.php?data=<?php echo $data[0]; ?>"><button type="button" name="button" style="width:100px;" class="btn btn-success">Detail</button></a>
                  <a onclick="return confirm('Are you sure you want to delete?')" href="proses/pasien.php?data=<?php echo $data[0]; ?>&id=hapus"><button type="button" name="button" style="width:100px;" class="btn btn-danger">Delete</button></a>
                  </td>
              </tr>
            <?php } ?>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>

  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include "footer.php" ?>
