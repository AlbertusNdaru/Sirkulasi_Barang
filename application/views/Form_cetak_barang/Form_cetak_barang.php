<div class="col">
  <div class="card shadow">
    <div class="card-header border-0">
    <form action="<?= base_url('reportall') ?>" target="blank" method="POST">
        <h6 class="heading-small text-muted mb-4"></h6>
        <hr class="my-4" />
        <div class="pl-lg-4">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
              <button type="submit" style="float: right" type="button" class="btn btn-primary">Cetak Barang All</button>
            <input id="tanggal2" required disabled name="tanggal2" style="float: right; margin-top: 4px;  margin-right: 5px; margin-left: 5px" type="date">
            <label style="float: right;  margin-top: 5px;"> - </label>
            <input id="tanggal1" required name="tanggal1" onchange="datevalidation()" style="float: right; margin-top: 4px;  margin-right: 5px;" type="date">
            </form>
              </div>
            </div>
          </div>
          <!-- <button type="submit" class="btn btn-primary">Add Data</button> -->
      </form>
    </div>
  </div>
</div>






