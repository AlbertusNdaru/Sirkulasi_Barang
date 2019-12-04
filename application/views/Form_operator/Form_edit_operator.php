<div class="col">
  <div class="card shadow">
    <div class="card-header border-0">
      <form name="fromeditoperator" action="<?= base_url('ControllerOperator/Controller_operator/editoperator') ?>" method="post">
        <h6 class="heading-small text-muted mb-4">Edit Operator</h6>
        <hr class="my-4" />
        <div class="pl-lg-4">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="input-address">Name</label>
                <input id="input-address" class="form-control form-control-alternative" name="name" placeholder="Name" value="<?= $editoperator->Name ?>" type="text">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="input-address">Alamat</label>
                <input id="input-address" class="form-control form-control-alternative" name="address" placeholder="Alamat"  value="<?= $editoperator->Address ?>" type="text">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="input-address">Email Operator</label>
                <input id="input-address" class="form-control form-control-alternative" name="email_operator" placeholder="Email Operator" value="<?= $editoperator->email_operator ?>" type="text">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="input-address">Jenis Kelamin</label>
                <select name="gender" class="form-control selectpicker">
                  <option>Choose Gender</option>
                  <option value="L" <?php if ($editoperator->Gender == "L") {
                                      echo 'selected';
                                    } ?>>Laki-Laki</option>
                  <option value="P" <?php if ($editoperator->Gender == "P") {
                                      echo 'selected';
                                    } ?>>Perempuan</option>
                </select>
              </div>
            </div>
          </div>
          <button type="submit" name="idoperator" class="btn btn-primary" value="<?= $editoperator->id_operator ?>">Update Data</button>
      </form>
    </div>
  </div>
</div>

