<div class="col">
    <div class="card shadow">
        <div class="card-header border-0">
            <form name="fromaddtipebarang" action="<?= base_url('Controller_tipebarang/Controller_tipebarang/edittipebarang') ?>" method="post">
                <h6 class="heading-small text-muted mb-4">Edit Tipe Barang</h6>
                <hr class="my-4" />
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">Name</label>
                                <input id="input-address" class="form-control form-control-alternative" name="name" placeholder="Name" value="<?= $edittipebarang->Name ?>" type="text">
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="submitid" class="btn btn-primary" value="<?= $edittipebarang->id_tipe_barang ?>"> Update Data</button>
            </form>
        </div>
    </div>
</div>