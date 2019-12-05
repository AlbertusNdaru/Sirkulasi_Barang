<div class="col">
  <div class="card shadow">
    <div class="card-header border-0">
      <form name="fromaddoperator" action="<?= base_url('addbarangmasuk') ?>" method="post">
        <h6 class="heading-small text-muted mb-4">Add Barang Masuk</h6>
        <hr class="my-4" />
        <div class="pl-lg-4">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="input-address">Kategori Alat</label>
                <select name="kategori" id="idkategori" class="form-control selectpicker" onchange="setBarangbykategori()">
                  <option value="" selected>Silahkan Pilih Kategori</option>
                  <?php foreach ($kategori as $k) { ?>
                    <option value="<?= $k->id_tipe_barang ?>"><?= $k->Name ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="input-address">Nama Alat</label>
                <select name="barang" id="barangbykat" class="form-control selectpicker" data-live-search="true">

                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="input-address">Jumlah Masuk</label>
                <input required class="form-control form-control-alternative" name="jumlah" type="number">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="input-address">Harga</label>
                <input required class="form-control form-control-alternative" name="harga" type="number">
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Add Data</button>
      </form>
    </div>
  </div>
</div>
<script>
  function setBarangbykategori() {
    var id = document.getElementById('idkategori').value;
    $.ajax({
      url: "<?php echo base_url('barangid'); ?>",
      type: "POST",
      data: {
        id: id
      },
      success: function(data) {
        var dataalat = JSON.parse(data);
        console.log(dataalat)
        $('#barangbykat').empty();
        for (var i = 0; i < dataalat.length; i++) {
          $('#barangbykat').append('<option value="' + dataalat[i]['id_barang'] + '">' + dataalat[i]['Name'] + '</option>')
        }

      }
    });
  }
</script>