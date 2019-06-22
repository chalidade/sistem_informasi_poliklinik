<?php
session_start();
include "proses/koneksi.php";
if( !isset($_SESSION['kode'])) {
echo "<script>alert('Login Required'); window.location = '../index.php';</script>";
}
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Admin Panel - Poliklinik PPNS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Multiple Input Form -->
  <link rel="stylesheet" href="bower_components/jquery/src/jquery.js">

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="../index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>POLI</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Poliklinik</b> PPNS</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu" style="padding:5px">
        <div class="row">
          <div class="col-6">
            <div class="" style="background:red;text-align:center;width:25px;position: absolute;z-index: 9;top: 5px;right: 0px;border-radius: 200px;font-size: 11px;font-weight: 800;color: #fff;padding: 2px;height: 25px;">
              <?php
                 $number = mysqli_query($connect, "SELECT COUNT(stok) FROM `obat` WHERE `stok` < 15 ");
                 while ($angka = mysqli_fetch_row($number)) {
                    echo $angka[0];
                 }
               ?>
          </div>
          <div class="col-6">
              <img src="bell.png" data-toggle="modal" data-target="#notif" alt="" style="width:25px;float:right;margin-top:10px;margin-right:25px">
          </div>
        </div>
      </div>
      </div>
    </nav>
  </header>
  <div class="modal fade" id="notif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Notifikasi</h4>
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> -->
        </div>
        <div class="modal-body">
          <table width="100%">
            <?php
               $number = mysqli_query($connect, "SELECT * FROM `obat` WHERE `stok` < 15 ");
               while ($obat = mysqli_fetch_row($number)) {
             ?>
            <tr>
              <td width="10%">
                <img style="vertical-align: baseline;width:20px;" src="pills.png" alt="">
              </td>
              <td>
                <p style="color:#242424;font-size:14px;">Stok obat <b style="color:#242424;font-weight:800;"><?php echo $obat[2]; ?></b> sisa <?php echo $obat[4]; ?></p>
              </td>
            </tr>
          <?php } ?>
          </table>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </form>
  </div>
<?php include "sidebar.php"; ?>
