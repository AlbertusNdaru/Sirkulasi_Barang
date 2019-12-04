<div class="col">
  <div class="card shadow">
    <div class="card-header border-0">
      <form name="fromaddusergroup" action="<?= base_url('Controller_usergroup/Controller_usergroup/editusergroup') ?>" method="post">
        <h6 class="heading-small text-muted mb-4">Add Operator</h6>
        <hr class="my-4" />
        <div class="pl-lg-4">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="input-address">Name Hak Akses</label>
                <input id="input-address" class="form-control form-control-alternative" name="hakakses" placeholder="Name Hak Akses" value="<?php echo $editusergroup->Description ?>" type="text">
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary" value="<?= $editusergroup->id_level ?>">Update Data</button>
      </form>
    </div>
  </div>
</div>