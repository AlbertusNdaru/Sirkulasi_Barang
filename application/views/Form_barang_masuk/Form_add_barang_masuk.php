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
                <label class="form-control-label" for="input-address">Kategori Barang</label>
                <select required name="kategori" id="idkategori" class="form-control selectpicker" onchange="setBarangbykategori()">
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
                <label class="form-control-label" for="input-address">Nama Barang</label>
                <select required name="barang" id="barangbykat" class="form-control selectpicker" data-live-search="true">

                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="input-address">Jumlah Masuk</label>
                <input required min="1" id="jmlid" class="form-control form-control-alternative" name="jumlah" type="number">
              </div>
            </div>
          </div>
          <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">Satuan</label>
                                <select name="satuan" class="form-control selectpicker">
                                    <?php foreach ($satuanbarang as $s) { ?>
                                        <option value="<?= $s->id_satuan ?>"><?= $s->Name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="input-address">Harga</label>
                <input required min="1" id="hargaid" class="form-control form-control-alternative" name="harga" type="number">
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
      url: "<?php echo base_url('barangkategori'); ?>",
      type: "POST",
      data: {
        id: id
      },
      success: function(data) {
        var databarang = JSON.parse(data);
        console.log(databarang)
        $('#barangbykat').empty();
        $('#barangbykat').append('<option value="">Silahkan Pilih Nama Barang</option>')
        for (var i = 0; i < databarang.length; i++) {
          $('#barangbykat').append('<option value="' + databarang[i]['id_barang'] + '">' + databarang[i]['Name'] + '</option>')
        }
        $('#barangbykat').selectpicker('refresh');
        $('#jmlid').val('');
        $('#hargaid').val('');

      }
    });
  }
</script>