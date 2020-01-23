<div class="col">
    <div class="card shadow">
        <div class="card-header border-0">
            <form name="fromaddtipebarang" action="<?= base_url('Controller_satuanbarang/Controller_satuanbarang/editsatuanbarang') ?>" method="post">
                <h6 class="heading-small text-muted mb-4">Edit Satuan Barang</h6>
                <hr class="my-4" />
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">Name</label>
                                <input id="input-address" class="form-control form-control-alternative" name="name" placeholder="Name" value="<?= $editsatuanbarang->Name ?>" type="text">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">Name Satuan</label>
                                <input id="input-address" class="form-control form-control-alternative" name="nameSatuan" placeholder="Name Satuan" value="<?= $editsatuanbarang->Name_satuan ?>" type="text">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">Nilai Satuan</label>
                                <input id="input-address" class="form-control form-control-alternative" name="nilai" placeholder="Nilai" value="<?= $editsatuanbarang->nilai_satuan ?>" type="number">
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="submitid" class="btn btn-primary" value="<?= $editsatuanbarang->id_satuan ?>"> Update Data</button>
            </form>
        </div>
    </div>
</div>