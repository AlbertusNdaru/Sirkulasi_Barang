<div class="col">
    <div class="card shadow">
        <div class="card-header border-0">
            <form name="fromaddoperator" action="<?= base_url('AddBarang') ?>" method="post">
                <h6 class="heading-small text-muted mb-4">Add Barang</h6>
                <hr class="my-4" />
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">Nama Barang</label>
                                <input required class="form-control form-control-alternative" name="namabarang" placeholder="Nama Barang" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">Tipe Barang</label>
                                <select name="tipe" class="form-control selectpicker">
                                    <?php foreach ($tipebarang as $t) { ?>
                                        <option value="<?= $t->id_tipe_barang ?>"><?= $t->Name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">Satuan</label>
                                <select name="satuan" class="form-control selectpicker">
                                    <option value="RIM">RIM</option>
                                    <option value="Buah">Buah</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Add Data</button>
            </form>
        </div>
    </div>
</div>