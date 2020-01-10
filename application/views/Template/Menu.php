<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard') ?>">
  <!--  <div class="sidebar-brand-text mx-3"><img style="filter: saturate() ;display: block;margin-left: auto;margin-right: auto;width: 80%;" src="<?php echo base_url() ?>assets/img/logo.png"></div>
  --->
  <div class="sidebar-brand-text mx-2">Sirkulasi Barang</div></a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('dashboard') ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Nav Item - Pages Collapse Menu -->
  <?php if ($_SESSION['Admin']->id_level == 1 || $_SESSION['Admin']->id_level == 2) { ?>
    <li class="nav-item">
      <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Form Input Master</span>
      </a>
      <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">

          <a class="collapse-item" href="<?= base_url('operator') ?>">Operator</a>
          <a class="collapse-item" href="<?= base_url('usergroup') ?>">Usergroup</a>
          <a class="collapse-item" href="<?= base_url('user') ?>">User</a>
          <a class="collapse-item" href="<?= base_url('tipebarang') ?>">Tipe Barang</a>
          <a class="collapse-item" href="<?= base_url('bagian') ?>">Bagian</a>

        </div>
      </div>
    </li>
  <?php } ?>
  <hr class="sidebar-divider d-none d-md-block">
  <!-- Barang-->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('barang') ?>">
      <i class="fa fa-minus"></i>
      <span>Barang</span></a>
  </li>
  <hr class="sidebar-divider d-none d-md-block">
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('barangmasuk') ?>">
      <i class="fa fa-minus"></i>
      <span>Barang Masuk</span></a>
  </li>
  <hr class="sidebar-divider d-none d-md-block">
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('barangkeluar') ?>">
      <i class="fa fa-minus"></i>
      <span>Barang Keluar</span></a>
  </li>
  <hr class="sidebar-divider d-none d-md-block">
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('barangrusak') ?>">
      <i class="fa fa-minus"></i>
      <span>Barang Rusak</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->


</ul>