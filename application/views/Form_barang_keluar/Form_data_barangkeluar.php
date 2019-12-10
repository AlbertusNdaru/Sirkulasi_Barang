<div class="col">
    <!-- <a href="<?= base_url('viewaddbarangkeluar'); ?>" class="btn addBarang btn-round btn-default"><i class="glyphicon glyphicon-plus-sign"></i>
        <button type="button" class="btn btn-primary">Add Barang Keluar</button>
    </a> -->
    <form action="<?= base_url('reportBarangKeluar') ?>" target="blank" method="POST">
        <a style="margin-top: -7px;" <?php if ($_SESSION['Admin']->id_level == 1 || $_SESSION['Admin']->id_level == 2 ) { ?> href="<?= base_url('viewaddbarangkeluar'); ?>" <?php } ?> class="btn addBarang btn-round btn-default"><i class="glyphicon glyphicon-plus-sign"></i>
            <button type="button" class="btn btn-primary">Add Barang Keluar</button>
        </a>

        <button type="submit" style="float: right" type="button" class="btn btn-primary">Cetak Barang Keluar</button>
        <input id="tanggal2" required disabled name="tanggal2" style="float: right; margin-top: 4px;  margin-right: 5px; margin-left: 5px" type="date"><label style="float: right;  margin-top: 5px;"> - </label>
        <input id="tanggal1" required name="tanggal1" onchange="datevalidation()" style="float: right; margin-top: 4px;  margin-right: 5px;" type="date">
    </form>
</div>
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <h3 class="mb-0">Data Barang Masuk</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-items-center table-flush " id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name Barang</th>
                                <th scope="col">Bagian</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Tanggal Keluar</th>
                                <!-- <th scope="col">Action</th> -->
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
                                        <td><?= $o->NamaBarang ?></td>
                                    </div>
                                    <div class="adge badge-dot mr-4">
                                        <td><?= $o->NamaBagian ?></td>
                                    </div>

                                    <div class="adge badge-dot mr-4">
                                        <td><?= $o->Jumlah ?></td>

                                    </div>
                                    <div class="adge badge-dot mr-4">
                                        <td><?= $o->Harga ?></td>

                                    </div>
                                    <div class="adge badge-dot mr-4">
                                        <td><?= $o->Create_at ?></td>

                                    </div>

                </div>
                <!-- <div class="adge badge-dot mr-6">
                <td class="center">
                    <a class="btn btn-info" href="<?= base_url('formeditbarang/' . $o->id_barang . '') ?>">
                        <i class="glyphicon glyphicon-edit icon-white"></i>
                        Edit
                    </a>
                    <a class="btn btn-danger" href="<?= base_url('deleteBarang/' . $o->id_barang . '') ?>">
                        <i class="glyphicon glyphicon-trash icon-white"></i>
                        Delete
                    </a></td>
            </div> -->
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