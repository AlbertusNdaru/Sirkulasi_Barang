<div class="col">
    <div class="card shadow">
        <div class="card-header border-0">
            <form name="fromaddbagian" action="<?= base_url('Controller_bagian/Controller_bagian/editbagian') ?>" method="post">
                <h6 class="heading-small text-muted mb-4">Edit Bagian</h6>
                <hr class="my-4" />
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">Name Bagian</label>
                                <input id="input-address" class="form-control form-control-alternative" name="name" placeholder="Name Bagian" value="<?= $editbagian->Name ?>" type="text">
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="submitid" value="<?= $editbagian->id_bagian ?>" class="btn btn-primary">Update Data</button>
            </form>
        </div>
    </div>
</div>