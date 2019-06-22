<?php
include "proses/koneksi.php";
include "header.php";
$pasien = $_REQUEST['data'];
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Detail Pasien
      <small></small>
    </h1>
  </section>
  <form action="proses/pasien.php?id=edit&data=<?php echo $pasien; ?>" method="post" enctype="multipart/form-data">
  <?php
  $result = mysqli_query($connect, "SELECT * FROM `pasien` where id = '$pasien' ");
  while($a = mysqli_fetch_row($result)) { ?>
  <!-- Main content -->
  <section class="content container-fluid">
    <div class="box box-warning">
      <div class="box-header with-border">
        <h3 class="box-title"> <?php echo $a[2]; ?></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body" style="padding:20px;">
          <!-- text input -->
          <!-- <form action="proses/pasien.php?id=tambah" method="post" enctype="multipart/form-data"> -->
          <div class="form-group">
            <label>NOMOR RM</label>
            <input type="text" name="no"  class="form-control"  required value="<?php echo $a[1]; ?>">
          </div>
          <div class="form-group">
            <label>NOMOR SMARTCARD</label>
            <input type="text" name="smartcard"  class="form-control" value="<?php echo $a[20]; ?>"  required>
          </div>

          <div class="form-group">
            <label>TAHUN MASUK</label>
            <input type="text" name="thn_masuk"  class="form-control"  required value="<?php echo $a[19]; ?>">
          </div>

          <div class="form-group">
            <label>NAMA LENGKAP</label>
            <input type="text" name="nama"  class="form-control" value="<?php echo $a[2]; ?>" required>
          </div>

          <div class="form-group">
            <label>NOMOR NRP / NIP</label>
            <input type="text" name="nrp" value="<?php echo $a[3]; ?>" class="form-control" required>
          </div>

          <div class="form-group">
            <label>Nomor KTP / IDENTITAS</label>
            <input type="text" name="ktp" value="<?php echo $a[4]; ?>" class="form-control" required>
          </div>

          <div class="form-group">
            <label>TEMPAT, TANGGAL LAHIR</label>
            <table width="100%">
              <tr>
                <td><input type="text" value="<?php echo $a[5]; ?>" name="tempat"  class="form-control"  required></td>
                <td><input type="date" value="<?php echo $a[6]; ?>" name="tanggal" class="form-control" style="line-height: 15px;border-left:none;"></td>
              </tr>
            </table>
          </div>

          <div class="form-group">
            <label>USIA</label>
            <input type="text" name="usia" value="<?php echo $a[7]; ?>" class="form-control" required>
          </div>

          <div class="form-group">
            <label>JENIS KELAMIN</label><br>
            <select class="form-control" name="jk" required>
              <option selected><?php echo $a[8]; ?></option>
              <option value="Laki-Laki ">Laki - Laki</option>
              <option value="Perempuan ">Perempuan</option>
            </select>
          </div>

          <div class="form-group">
            <label>Pekerjaan</label><br>
            <div class="row">
              <div class="col-md-6">
              <select class="form-control" name="pekerjaan">
                <option selected><?php echo $a[9]?></option>
                <option value="Direksi">Direksi</option>
                <option value="Dosen">Dosen</option>
                <option value="Karyawan">Karyawan</option>
                <option value="Mahasiswa">Mahasiswa</option>
              </select>
              </div>
              <div class="col-md-6">
                <select class="form-control" name="detail_pekerjaan">
                  <option selected><?php echo $a[10]; ?></option>
                  <option value="SB">SB</option>
                  <option value="DC">DC</option>
                  <option value="ME">ME</option>
                  <option value="PE">PE</option>
                  <option value="K3">K3</option>
                  <option value="DM">DM</option>
                  <option value="TL">TL</option>
                  <option value="TP">TP</option>
                  <option value="TO">TO</option>
                  <option value="MBM">MBM</option>
                  <option value="PL">PL</option>
                </select>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label>AGAMA</label>
            <input type="text" name="agama" value="<?php echo $a[11]; ?>"  class="form-control" required>
          </div>

          <div class="form-group">
            <label>ALAMAT LENGKAP</label>
            <input type="text" name="alamat" value="<?php echo $a[12]; ?>"  class="form-control"  required>
          </div>

          <div class="form-group">
            <label>NOMOR TELPON / HP</label>
            <input type="text" name="hp" value="<?php echo $a[13]; ?>" class="form-control" required>
          </div>

          <div class="form-group">
            <label>STATUS</label><br>
            <select class="form-control" name="status">
              <option selected><?php echo $a[14]; ?></option>
              <option value="Belum Menikah">Belum Menikah</option>
              <option value="Menikah">Menikah</option>
            </select>
          </div>

          <div class="form-group">
            <label>BERAT BADAN</label>
            <input type="text" name="bb"value="<?php echo $a[15]; ?>"  class="form-control"  required>
          </div>

          <div class="form-group">
            <label>TINGGI BADAN</label>
            <input type="text" name="tb" value="<?php echo $a[16]; ?>"  class="form-control" required>
          </div>

          <div class="form-group">
            <label>GOLONGAN DARAH</label>
            <select class="form-control" name="goldar">
              <option selected><?php echo $a[17]; ?></option>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="AB">AB</option>
              <option value="O">O</option>
            </select>
          </div>
          <div class="form-group">
            <label>Rhesus</label>
            <select class="form-control" name="resus">
              <option selected><?php echo $a[18]; ?></option>
              <option value="+">+</option>
              <option value="-">-</option>
            </select>
          </div>

          <div class="form-group" style="margin-top:20px">
          <input type="submit" style="width:100%" class="btn btn-success add-one" value="Simpan">
          <!-- <a href="data-pasien.php"> <button style="width:100%" class="btn btn-primary add-one">Kembali</button></a> -->
          </div>
          <div class="form-group" style="margin-top:20px">
            <a href="print_data_pasien.php?data=<?php echo $pasien; ?>"  class="btn btn-primary add-one" style="width:100%">Print</a>
          </div>
      </div>
    <?php } ?>
  </form>
      <!-- /.box-body -->
    </div>


  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include "footer.php" ?>
