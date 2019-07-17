<?php
include "proses/koneksi.php";
include "header.php";
$id = $_REQUEST['id'];
$no = $_REQUEST['no'];
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Formulir Pendaftaran Pasien Baru
      <small></small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
    <div class="box box-warning">
      <div class="box-header with-border">
        <h3 class="box-title"> Data Pasien</h3>
      </div>
      <!-- /.box-header -->
      <?php if($id == "edit") {
        $result = mysqli_query($connect, "SELECT * FROM product WHERE id = '$no'");
        while($product = mysqli_fetch_object($result)) { ?>
        <div class="box-body">
            <!-- text input -->
            <form action="proses/pasien.php?id=edit" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label class="form-control">Upload Foto Produk
              <input type="file" style="display:none" name="file1">
              <input type="hidden" name="no" value="<?php echo $product->id; ?>">
              </label>
            </div>

            <div class="form-group">
              <label>Nama Produk</label>
              <input type="text" name="item" value="<?php echo $product->name; ?>"  class="form-control" required>
            </div>

            <div class="form-group">
              <label>Harga</label>
              <input type="text" name="harga" value="<?php echo $product->price; ?>"  class="form-control" required>
            </div>

            <div class="form-group">
              <label>Stok</label>
              <input type="text" name="stok" value="<?php echo $product->quantity; ?>"  class="form-control" required>
            </div>

            <div class="form-group" style="margin-top:20px">
              <input type="submit" class="btn btn-primary add-one" value="Simpan">
            </div>
          </form>
        </div>
      <?php }} else { ?>
      <div class="box-body" style="padding:20px;">
          <!-- text input -->
          <form action="proses/pasien.php?id=tambah" method="post" enctype="multipart/form-data">
            <?php
            $a           = mysqli_query($connect, "SELECT * FROM `pasien` ORDER BY `id` DESC ");
            while ($data = mysqli_fetch_array($a)) {
            $no          = $data['id']+1;
            }
              ?>
          <div class="form-group">
            <label>NOMOR RM</label>
            <input type="text" class="form-control" value="<?php echo $no; ?>" disabled>
            <input type="hidden" name="no"  class="form-control" value="<?php echo $no; ?>" disabled>
          </div>

          <!-- Tambahan -->
          <div class="form-group">
            <label>NOMOR SMARTCARD</label>
            <input type="text" name="smartcard"  class="form-control"  required>
          </div>

          <div class="form-group">
            <label>TAHUN MASUK</label>
            <input type="text" name="thn_masuk"  class="form-control"  required>
          </div>

          <div class="form-group">
            <label>NAMA LENGKAP</label>
            <input type="text" name="nama"  class="form-control" required>
          </div>

          <div class="form-group">
            <label>NOMOR NRP / NIP</label>
            <input type="text" name="nrp"  class="form-control" required>
          </div>

          <div class="form-group">
            <label>Nomor KTP / IDENTITAS</label>
            <input type="text" name="ktp"  class="form-control" required>
          </div>

          <div class="form-group">
            <label>TEMPAT, TANGGAL LAHIR</label>
            <table width="100%">
              <tr>
                <td><input type="text" name="tempat"  class="form-control"  required></td>
                <td><input type="date" name="tanggal" class="form-control" style="line-height: 15px;border-left:none;"></td>
              </tr>
            </table>
          </div>

          <!-- <div class="form-group">
            <label>USIA</label>
            <input type="text" name="usia"  class="form-control" required>
          </div> -->

          <div class="form-group">
            <label>JENIS KELAMIN</label>
            <select class="form-control" name="jk" required>
              <option value="Laki-Laki ">Laki - Laki</option>
              <option value="Perempuan ">Perempuan</option>
            </select>
          </div>

          <div class="form-group">
            <label>PEKERJAAN</label><br>
            <table width="100%">
              <tr>
                <td><input type="radio" name="pekerjaan" value="Direksi"></td>
                <td>Direksi</td>
                <td><input type="radio" name="pekerjaan" value="Dosen"></td>
                <td>Dosen</td>
                <td>
                  <select class="form-control" name="detail_pekerjaan">
                    <option selected>SB</option>
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
                </td>
                <td> &nbsp;</td>
                <td><input type="radio" name="pekerjaan" value="Karyawan"></td>
                <td>Karyawan</td>
                <td>
                </td>
                <td> &nbsp;</td>
                <td><input type="radio" name="pekerjaan" value="Mahasiswa"></td>
                <td>Mahasiswa</td>
                <td>
                  <select class="form-control" name="detail_pekerjaan">
                    <option selected>SB</option>
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
                </td>
                <td> &nbsp;</td>
                <td><input type="radio" name="pekerjaan" value="Umum"></td>
                <td>Umum</td>
              </tr>
            </table>
          </div>

          <div class="form-group">
            <label>AGAMA</label>
            <select class="form-control" name="agama">
              <option value="Islam">Islam</option>
              <option value="Kristen">Kristen</option>
              <option value="Hindu">Hindu</option>
              <option value="Budha">Budha</option>
            </select>
          </div>

          <div class="form-group">
            <label>ALAMAT LENGKAP</label>
            <input type="text" name="alamat"  class="form-control"  required>
          </div>

          <div class="form-group">
            <label>NOMOR TELPON / HP</label>
            <input type="text" name="hp"  class="form-control" required>
          </div>

          <div class="form-group">
            <label>STATUS</label><br>
            <table width="300px">
              <tr>
                <td><input type="radio" name="status" value="Belum Menikah"></td>
                <td>Belum Menikah</td>
                <td><input type="radio" name="status" value="Menikah"></td>
                <td>Menikah</td>
              </tr>
            </table>
          </div>

          <div class="form-group">
            <label>BERAT BADAN</label>
            <input type="text" name="bb"  class="form-control"  required>
          </div>

          <div class="form-group">
            <label>TINGGI BADAN</label>
            <input type="text" name="tb"  class="form-control" required>
          </div>

          <div class="form-group">
            <label>GOLONGAN DARAH</label>
            <table width="300px">
              <td>
                <input type="radio" name="goldar" value="O">
              </td>
              <td>O</td>
              <td>
                <input type="radio" name="goldar" value="A">
              </td>
              <td>A</td>
              <td>
                <input type="radio" name="goldar" value="B">
              </td>
              <td>B</td>
              <td>
                <input type="radio" name="goldar" value="AB">
              </td>
              <td>AB</td>
                <td>
                  <select class="form-control" name="resus">
                    <option value="+">+</option>
                    <option value="-">-</option>
                  </select>
                </td>
              </tr>
            </table>
          </div>
          <div class="form-group">
            <label>Alergi</label>
            <input type="text" name="alergi"  class="form-control"  required>
          </div>

          <div class="form-group" style="margin-top:20px">
            <input type="submit" class="btn btn-primary add-one" value="Simpan">
          </div>
        </form>
      </div>
    <?php } ?>
      <!-- /.box-body -->
    </div>


  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include "footer.php" ?>
