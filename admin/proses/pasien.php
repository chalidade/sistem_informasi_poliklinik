<?php
error_reporting(0);
include "koneksi.php";
$data       = $_REQUEST['data'];
$id         = $_REQUEST['id'];
$smartcard  = $_POST['smartcard'];
$rm         = $_POST['no'];
$nama       = $_POST['nama'];
$nrp        = $_POST['nrp'];
$ktp        = $_POST['ktp'];
$tempat     = $_POST['tempat'];
$tgl        = $_POST['tanggal'];
$usia       = time()-strtotime('$tgl');
$umur       = floor(($usia / (60 * 60 * 24 * 365)-26));
$jk         = $_POST['jk'];
$pekerjaan  = $_POST['pekerjaan'];
$detail     = $_POST['detail_pekerjaan'];
$agama      = $_POST['agama'];
$alamat     = $_POST['alamat'];
$hp         = $_POST['hp'];
$status     = $_POST['status'];
$bb         = $_POST['bb'];
$tb         = $_POST['tb'];
$goldar     = $_POST['goldar'];
$resus      = $_POST['resus'];
$thn_masuk  = $_POST['thn_masuk'];

// echo "$rm | $nama | $nrp | $ktp | $tempat | $tgl | $usia | $jk | $pekerjaan | $detail | $agama | $alamat | $hp | $status | $bb | $tb | $goldar | $resus";

if ($id == "tambah") {
$pasien = mysqli_query($connect, "INSERT INTO `pasien` (`id`, `rm`, `nama`, `nrp`, `ktp`, `tempat`, `tgl`, `usia`, `jk`, `kerja`, `detail`, `agama`, `alamat`, `tlp`, `status`, `bb`, `tb`, `goldar`, `rhesus`, `thn_masuk`, `smartcard`) VALUES (NULL, '$rm', '$nama', '$nrp', '$ktp', '$tempat', '$tgl', '$umur', '$jk', '$pekerjaan', '$detail', '$agama', '$alamat', '$hp', '$status', '$bb', '$tb', '$goldar', '$resus', '$thn_masuk', '$smartcard');");
echo "<script>alert('Data Pasien di Simpan'); window.location = '../data-pasien.php';</script>";
} else if ($id == "hapus") {
  $delete = mysqli_query($connect, "DELETE FROM `pasien` WHERE `pasien`.`id` = '$data'");
  echo "<script>alert('Data Berhasil di Dihapus'); window.location = '../data-pasien.php';</script>";
} else if($id == "edit") {
  $update = mysqli_query($connect, "UPDATE `pasien` SET `rm` = '$rm', `nama` = '$nama', `nrp` = '$nrp', `ktp` = '$ktp', `tempat` = '$tempat', `tgl` = '$tgl', `usia` = '$umur', `jk` = '$jk', `kerja` = '$pekerjaan', `detail` = '$detail', `agama` = '$agama', `alamat` = '$alamat', `tlp` = '$hp', `status` = '$status', `bb` = '$bb', `tb` = '$tb', `goldar` = '$goldar', `rhesus` = '$resus', `thn_masuk` = '$thn_masuk', `smartcard` = '$smartcard' WHERE `pasien`.`id` = '$data';");
  echo "<script>alert('Data Pasien di Update'); window.location = '../detail-pasien.php?data=$data';</script>";
}

 ?>
