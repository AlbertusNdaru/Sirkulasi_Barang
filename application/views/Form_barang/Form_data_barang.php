<div class="row">
    <div class="col">

        <form action="<?= base_url('reportBarang') ?>" target="blank" method="POST">
            <?php if ($_SESSION['Admin']->id_level == 1 || $_SESSION['Admin']->id_level == 2) { ?>
                <a style="margin-top: -7px;" href="<?= base_url('formaddbarang'); ?>" class="btn addBarang btn-round btn-default"><i class="glyphicon glyphicon-plus-sign"></i>
                    <button type="button" style="float: left" class="btn btn-primary">Add Barang</button>
                </a>
            <?php } ?>

            <button type="submit" style="float: right" type="button" class="btn btn-primary">Cetak Barang</button>
            <input id="tanggal2" required disabled name="tanggal2" style="float: right; margin-top: 4px;  margin-right: 5px; margin-left: 5px" type="date"><label style="float: right;  margin-top: 5px;"> - </label>
            <input id="tanggal1" required name="tanggal1" onchange="datevalidation()" style="float: right; margin-top: 4px;  margin-right: 5px;" type="date">
            <select name="tipe" style="float: right; margin-top: 10px;   margin-right: 5px; margin-left: 5px">
                <option value="" selected>Silahkan Pilih Tipe</option>
                <?php foreach ($tipebarang as $t) { ?>
                    <option value="<?= $t->id_tipe_barang ?>"><?= $t->Name ?></option>
                <?php } ?>
            </select>
        </form>
    </div>
</div>
<br>
<div class="col">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <h3 class="mb-0">Data Barang</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name Operator</th>
                                    <th scope="col">Tipe barang</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Satuan</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Total Harga</th>
                                    <?php if ($_SESSION['Admin']->id_level == 1 || $_SESSION['Admin']->id_level == 2) { ?>
                                        <th scope="col">Action</th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                                            $i = 1;
                                                            foreach ($barang as $o) { ?>
                                    <tr>
                                        <div class="adge badge-dot mr-4">
                                            <td><?= $i ?> </td>
                                        </div>
                                        <div class="adge badge-dot mr-4">
                                            <td><?= $o->NameOperator ?></td>
                                        </div>
                                        <div class="adge badge-dot mr-4">
                                            <td><?= $o->NamaTipe ?></td>
                                        </div>

                                        <div class="adge badge-dot mr-4">
                                            <td><?= $o->Name ?></td>

                                        </div>
                                        <div class="adge badge-dot mr-4">
                                            <td><?= $o->Jumlah ?></td>

                                        </div>
                                        <div class="adge badge-dot mr-4">
                                            <td><?= $o->NamaSatuan ?></td>

                                        </div>
                                        <div class="adge badge-dot mr-4">
                                            <td><?= rupiah($o->Harga) ?></td>
                                        </div>


                                        <div class="adge badge-dot mr-4">
                                            <td><?php $total = $o->Jumlah * $o->Harga;
                                                                echo rupiah($total) ?></td>

                                        </div>
                                        <?php if ($_SESSION['Admin']->id_level == 1 || $_SESSION['Admin']->id_level == 2) { ?>
                                            <div class="adge badge-dot mr-6">
                                                <td class="center">
                                                    <a class="btn btn-info" href="<?= base_url('formeditbarang/' . $o->id_barang . '') ?>">
                                                        <i class="glyphicon glyphicon-edit icon-white"></i>
                                                        Edit
                                                    </a>
                                                    <a class="btn btn-danger" href="<?= base_url('deleteBarang/' . $o->id_barang . '') ?>">
                                                        <i class="glyphicon glyphicon-trash icon-white"></i>
                                                        Delete
                                                    </a></td>
                                            </div>
                                        <?php } ?>
                    </div>
                    </tr>
                <?php
                                                                                $i++;
                                                                            } ?>
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    <?php if (!empty($this->session->flashdata('Status'))) { ?>
        setnotifstatus('<?php echo $this->session->flashdata('Status') ?>');
    <?php } ?>


    function setnotifstatus(err) {
        if (err == 'Input Success' || err == 'Edit Success' || err == 'Delete Success') {
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

    document.getElementById('tanggal1').value = "";
    document.getElementById('tanggal2').value = "";

    function datevalidation() {
        var x = document.getElementById("tanggal1").value;
        document.getElementById('tanggal2').min = x;
        $('#tanggal2').removeAttr('disabled');
        console.log(x);
        if (x == "") {

            $('#tanggal2').attr('disabled', 'true');
            document.getElementById('tanggal2').value = "";
        }
    }
</script>