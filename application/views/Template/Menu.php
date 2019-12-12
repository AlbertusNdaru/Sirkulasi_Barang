<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard') ?>">
    <div class="sidebar-brand-text mx-3"><img style="filter: saturate() ;display: block;margin-left: auto;margin-right: auto;width: 80%;" src="<?php echo base_url() ?>assets/img/logo.png"></div>
  </a>

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
      <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Form Input Master</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
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
  <!-- Barang-->
  <li class="nav-item">
    <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-folder"></i>
      <span>Form Master Barang</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <?php if ($_SESSION['Admin']->id_level == 1 || $_SESSION['Admin']->id_level == 2) { ?>
          <a class="collapse-item" href="<?= base_url('barang') ?>">Barang</a>
          <a class="collapse-item" href="<?= base_url('barangmasuk') ?>">Barang Masuk</a>
          <a class="collapse-item" href="<?= base_url('barangkeluar ') ?>">Barang Keluar</a>
        <?php } ?>

        <?php if ($_SESSION['Admin']->id_level == 3) { ?>
          <a class="collapse-item" href="<?= base_url('barang') ?>">Barang</a>
          <a class="collapse-item" href="<?= base_url('barangmasuk') ?>">Barang Masuk</a>
          <a class="collapse-item" href="<?= base_url('barangkeluar ') ?>">Barang Keluar</a>

        <?php } ?>
      </div>
    </div>
  </li>


  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->


</ul>