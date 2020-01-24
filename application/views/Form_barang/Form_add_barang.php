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
                                <option value="" selected>Silahkan Pilih Tipe Barang</option>
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
                                <label class="form-control-label" for="input-address">Satuan Terkecil</label>
                                <select name="satuan" class="form-control selectpicker">
                                <option value="" selected>Silahkan Pilih Satuan</option>    
                                    <?php foreach ($satuanbarang as $s) { ?>
                                        <option value="<?= $s->id_satuan ?>"><?= $s->Name ?></option>
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
                                <option value="" selected>Silahkan Pilih Satuan</option>
                                    <?php foreach ($satuanbarang as $s) { ?>
                                        <option value="<?= $s->id_satuan ?>"><?= $s->Name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">Satuan Terbesar 2</label>
                                <select name="satuan2" class="form-control selectpicker">
                                <option value="" selected>Silahkan Pilih Satuan</option>
                                    <?php foreach ($satuanbarang as $s) { ?>
                                        <option value="<?= $s->id_satuan ?>"><?= $s->Name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Add Data</button>
            </form>
        </div>
    </div>
</div>
<script>
  <?php if (!empty($this->session->flashdata('Status'))) { ?>
        setnotifstatus('<?php echo $this->session->flashdata('Status') ?>');
    <?php } ?>
  function setnotifstatus(err) {
    if (err == 'Input Success' || err == 'Update Success' || err == 'Delete Succes') {
      ttp = 'success';
    } else {
      ttp = 'danger';
    }

    $.notify({
      // options
      message: err,
    }, {
      // settings
      element: 'body',
      position: null,
      type: ttp,
      allow_dismiss: true,
      newest_on_top: false,
      showProgressbar: false,
      placement: {
        from: "top",
        align: "center"
      },
      offset: 20,
      spacing: 10,
      z_index: 1031,
      delay: 2000,
      timer: 500,
      url_target: '_blank',
      mouse_over: null,
      animate: {
        enter: 'animated bounceIn',
        exit: 'animated bounceOut'
      },
      onShow: null,
      onShown: null,
      onClose: null,
      onClosed: null,
      icon_type: 'class',
      template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
        '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
        '<span data-notify="icon"></span> ' +
        '<span data-notify="title">{1}</span> ' +
        '<span data-notify="message">{2}</span>' +
        '<div class="progress" data-notify="progressbar">' +
        '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
        '</div>' +
        '<a href="{3}" target="{4}" data-notify="url"></a>' +
        '</div>'
    });

  }
</script>