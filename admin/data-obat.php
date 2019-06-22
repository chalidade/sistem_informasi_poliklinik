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
            <h3 class="box-title">Data Obat</h3>

            <div class="box-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <form class="" action="data-obat.php" method="GET">
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
                <!-- <th>No</th> -->
                <th>kode</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Stok</th>
                <!-- <th style="width:45%">Option</th> -->
              </tr>
                  <?php
                  include "proses/koneksi.php";
                  $nomor       = 1;
                  $nama        = $_REQUEST['nama'];
                  if ($nama == '') {
                  $pasien      = mysqli_query($connect, "SELECT * FROM `obat` ORDER BY `obat`.`stok` ASC ");
                  } else {
                  $pasien      = mysqli_query($connect, "SELECT * FROM `obat` WHERE `nama` like '%$nama%' OR `kode` like '%$nama%'  ORDER BY `obat`.`stok` ASC ");
                  }
                  while ($data = mysqli_fetch_row($pasien)) {
                    if ($data[4] < 16) {
                      echo "<tr style='background:#ff4646'>";
                    } else {
                      echo "<tr>";
                    }

                  ?>
                  <form class="" action="proses/obat.php?id=edit" method="post">
                  <!-- <td><?php echo $nomor; $nomor++; ?></td> -->
                  <td> <?php echo $data[1]; ?></td>
                  <td>
                    <input type="text" class="form-control" name="nama" value="<?php echo $data[2]; ?>">
                    <input type="hidden" name="kode" value="<?php echo $data[0]; ?>">
                  </td>
                  <td><input type="text" class="form-control" name="jenis" value="<?php echo $data[3]; ?>"></td>
                  <td><input type="text" class="form-control" name="stok" value="<?php echo $data[4]; ?>"></td>
                  <td>
                    <button type="submit" class="btn btn-warning">Edit</button>
                    <a class="btn btn-danger" href="proses/obat.php?id=hapus&data=<?php echo $data[0]; ?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                    <!-- <a class="btn btn-danger" href="proses/obat.php?id=hapus&data=<?php echo $data[0]; ?>">Hapus</a> -->
                  </td>
                  <!-- <td>
                  <a href="promotif-preventiv.php?data=<?php echo $data[0]; ?>"><button type="button" name="button" style="width:100px;" class="btn btn-primary">Promotif</button></a>
                  <a href="kuratif.php?data=<?php echo $data[0]; ?>"><button type="button" class="btn btn-warning" name="button" style="width:100px;">Kuratif</button></a>
                  <a href="detail-pasien.php?data=<?php echo $data[0]; ?>"><button type="button" name="button" style="width:100px;" class="btn btn-success">Detail</button></a>
                  <a href="proses/pasien.php?data=<?php echo $data[0]; ?>&id=hapus"><button type="button" name="button" style="width:100px;" class="btn btn-danger">Delete</button></a>
                  </td> -->
              </tr>
              </form>
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
