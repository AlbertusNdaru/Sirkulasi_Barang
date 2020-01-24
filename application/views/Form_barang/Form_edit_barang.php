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
                                <input required class="form-control form-control-alternative" name="namabarang" value="<?= $barang->Name ?>" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">Tipe Barang</label>
                                <select name="tipe" class="form-control selectpicker">
                                    <?php foreach ($tipebarang as $t) { ?>
                                        <option <?php if ($barang->id_tipe_barang == $t->id_tipe_barang) echo 'Selected' ?> value="<?= $t->id_tipe_barang ?>"><?= $t->Name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">Satuan Terkecil</label>
                                <select name="satuan" class="form-control selectpicker">
                                <?php foreach ($satuanbarang as $s) { ?>
                                        <option <?php if ($barang->id_satuan == $s->id_satuan) echo 'Selected' ?> value="<?= $s->id_satuan ?>"><?= $s->Name ?></option>
                                    <?php } ?>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">Satuan Terbesar 1</label>
                                <select name="satuan1" class="form-control selectpicker">
                                    <?php $i=1; foreach ($konversi_satuan as $s) { ?>
                                        <option <?php if ($i==1) echo'selected' ?> value="<?= $s['id_satuan'] ?>"><?= $s['Name'] ?></option>
                                    <?php $i++; } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">Satuan Terbesar 2</label>
                                <select name="satuan2" class="form-control selectpicker">
                                    <?php $i=1; foreach ($konversi_satuan as $s) { ?>
                                        <option <?php if ($i==2) echo'selected' ?> value="<?= $s['id_satuan'] ?>"><?= $s['Name'] ?></option>
                                    <?php $i++; } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">Harga</label>
                                <input type="number" min="0" class="form-control form-control-alternative" value="<?= $barang->Harga?>" name="harga">

                            </div>
                        </div>
                    </div> -->
                    <button type="submit" name="submitid" value="<?= $barang->id_barang ?>" class="btn btn-primary">Edit Data</button>
            </form>
        </div>
    </div>
</div>