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
      Formulir Input Data Obat
      <small>Informasi Pelayanan Medis</small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
    <div class="box box-warning">
      <div class="box-header with-border">
        <h3 class="box-title">Data Obat</h3>
      </div>
      <!-- /.box-header -->
      <?php if($id == "edit") {
        $result = mysqli_query($connect, "SELECT * FROM product WHERE id = '$no'");
        while($product = mysqli_fetch_object($result)) { ?>
        <div class="box-body">
            <!-- text input -->
            <form action="proses/item.php?id=edit" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label class="form-control">Upload Foto Produk
              <input type="file" style="display:none" placeholder="Nomor PO" name="file1">
              <input type="hidden" name="no" value="<?php echo $product->id; ?>">
              </label>
            </div>

            <div class="form-group">
              <label>Nama Produk</label>
              <input type="text" name="item" value="<?php echo $product->name; ?>"  class="form-control" placeholder="F4" required>
            </div>

            <div class="form-group">
              <label>Harga</label>
              <input type="text" name="harga" value="<?php echo $product->price; ?>"  class="form-control" placeholder="105.000" required>
            </div>

            <div class="form-group">
              <label>Stok</label>
              <input type="text" name="stok" value="<?php echo $product->quantity; ?>"  class="form-control" placeholder="5" required>
            </div>

            <div class="form-group" style="margin-top:20px">
              <input type="submit" class="btn btn-primary add-one" value="Simpan">
            </div>
          </form>
        </div>
      <?php }} else { ?>
      <div class="box-body" style="padding:20px;">
          <!-- text input -->
          <form action="proses/obat.php?id=tambah" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>Kode Obat</label>
              <input type="text" name="kode" class="form-control" required style="line-height:15px" placeholder="Kode Obat">
            </div>

            <div class="form-group">
              <label>Nama Obat</label>
              <input type="text" name="nama" class="form-control" required style="line-height:15px" placeholder="Nama Obat">
            </div>

            <div class="form-group">
              <label>Jenis</label>
              <input type="text" name="jenis" class="form-control" required style="line-height:15px" placeholder="Jenis Obat">
            </div>

            <div class="form-group">
              <label>Stok</i></label>
              <input type="text" name="stok" class="form-control" required style="line-height:15px" placeholder="Butir">
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
