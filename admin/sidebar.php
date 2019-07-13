<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/icon.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo  $_SESSION['nama']; ?></p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">Main Menu</li>
      <!-- Optionally, you can add icons to the links -->
      <?php
        $jabatan = $_SESSION['jabatan'];
        if ($jabatan == "Admin") {
      ?>
      <li class="active"><a href="panel-user.php"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
      <li><a href="data-mahasiswa-baru.php"><i class="fa fa-folder"></i> <span>Mahasiswa Baru</span></a></li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-folder"></i> <span>Pasien</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="pasien-baru.php"><i class="fa fa-circle-o"></i> Pendaftaran Pasien Baru</a></li>
          <li><a href="data-pasien.php"><i class="fa fa-circle-o"></i> Data Pasien</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-folder"></i> <span>Promotif dan Presentif</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <!-- <li><a href="promotif-preventiv.php"><i class="fa fa-circle-o"></i> <span>Promotif dan Preventif</span></a></li> -->
          <li><a href="data-promotif.php"><i class="fa fa-circle-o"></i> Data Promotif - Presentif</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-folder"></i> <span>Kuratif</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <!-- <li><a href="kuratif.php"><i class="fa fa-circle-o"></i> <span>Pemeriksaan Kuratif</span></a></li> -->
          <li><a href="data-kuratif.php"><i class="fa fa-circle-o"></i> Data Kuratif</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-folder"></i> <span>Obat</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="obat.php"><i class="fa fa-circle-o"></i> <span>Input Obat</span></a></li>
          <li><a href="data-obat.php"><i class="fa fa-circle-o"></i> Data Obat</a></li>
          <li><a href="riwayat-obat.php"><i class="fa fa-circle-o"></i> <span>Riwayat Obat Masuk</span></a></li>
          <li><a href="riwayat-obat.php"><i class="fa fa-circle-o"></i> <span>Riwayat Obat Keluar</span></a></li>
        </ul>
      </li>
      <li><a href="riwayat.php"><i class="fa fa-folder"></i> <span>Riwayat Pemeriksaan</span></a></li>
      <li><a href="pakar.php"><i class="fa fa-folder"></i> <span>Sistem Pakar</span></a></li>

      <li><a href="logout.php"><i class="fa fa-arrow-left"></i> <span>Logout</span></a></li>
      <?php } else { ?>
        <li class="active"><a href="panel-user.php"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li><a href="riwayat.php"><i class="fa fa-folder"></i> <span>Riwayat Pemeriksaan</span></a></li>
        <li><a href="logout.php"><i class="fa fa-arrow-left"></i> <span>Logout</span></a></li>
      <?php } ?>
    </ul>
    <!-- /.sidebar-menu -->

    </section>
    <!-- /.sidebar -->
    </aside>
