<div class="col">
    <div class="card shadow">
        <div class="card-header border-0">
            <form name="fromaddoperator" action="<?= base_url('EditBarang') ?>" method="post">
                <h6 class="heading-small text-muted mb-4">Edit Barang</h6>
                <hr class="my-4" />
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">Nama Barang</label>
                                <input required class="form-control form-control-alternative" name="namabarang" value="<?= $barang->Name?>" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">Tipe Barang</label>
                                <select name="tipe" class="form-control selectpicker">
                                    <?php foreach($tipebarang as $t) {?>
                                    <option <?php if ($barang->id_tipe_barang == $t->id_tipe_barang ) echo 'Selected'?> value="<?= $t->id_tipe_barang?>"><?= $t->Name?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">Jumlah</label>
                                <input required type="number" min="1" class="form-control form-control-alternative" value="<?= $barang->Jumlah?>" name="jumlah">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">Satuan</label>
                                <select name="satuan" class="form-control selectpicker">
                                    <option <?php if ($barang->Satuan == 'RIM') { echo 'Selected'; }?> value="RIM">RIM</option>
                                    <option  <?php if ($barang->Satuan == 'Buah') { echo 'Selected'; }?>  value="Buah">Buah</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">Harga</label>
                                <input required type="number" min="1" class="form-control form-control-alternative" value="<?= $barang->Harga?>" name="harga">
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="submitid" value="<?= $barang->id_barang?>" class="btn btn-primary">Edit Data</button>
            </form>
        </div>
    </div>
</div>