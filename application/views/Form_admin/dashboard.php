  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div align="center" class="col mr-2">
              <div class="text-l font-weight-bold text-primary text-uppercase mb-1">Total Barang</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $barang->B?></div>
            </div>
            <div class="col-auto">
              <!-- <i class="fas fa-calendar fa-2x text-gray-300"></i> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div align="center" class="col mr-2">
              <div class="text-l font-weight-bold text-primary text-uppercase mb-1">Total Transaksi Barang Masuk</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $barangmasuk->BM?> (Transaksi)</div>
            </div>
            <div class="col-auto">
              <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div align="center" class="col mr-2">
              <div class="text-l font-weight-bold text-primary text-uppercase mb-1">Total Transaksi Barang Keluar</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $barangkeluar->BK?> (Transaksi)</div>
            </div>
            <div class="col-auto">
              <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->

    <!-- Content Row -->