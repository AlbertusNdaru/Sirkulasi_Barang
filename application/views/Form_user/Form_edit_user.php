<div class="col">
  <div class="card shadow">
    <div class="card-header border-0">
      <form name="fromeditoperator" action="<?= base_url('Controller_user/Controller_user/edituser') ?>" method="post">
        <h6 class="heading-small text-muted mb-4">Edit User</h6>
        <hr class="my-4" />
        <div class="pl-lg-4">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="input-address">Hak Akses</label>
                <select name="hak_akses" class="form-control selectpicker">
                  <?php foreach ($usergroup as $o) {
                    echo "<option value='$o->id_level'";
                    echo $edituser->id_level == $o->id_level ? 'selected' : '';
                    echo ">$o->Description</option>";
                  } ?>
                </select>
              </div>
            </div>
          </div>
          <button type="submit" name="submitid" class="btn btn-primary" value="<?= $edituser->id_user ?>">Update Data</button>
      </form>
    </div>
  </div>
</div>