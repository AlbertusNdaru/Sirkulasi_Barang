<?php if($_SESSION['Admin']->id_level == 1) {?>
<div class="col">
    <a href="<?= base_url('formaddbagian'); ?>" class="btn addBagian btn-round btn-default"><i class="glyphicon glyphicon-plus-sign"></i>
        <button type="button" class="btn btn-primary">Add Bagian</button>
    </a>
</div>
<?php?>
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <h3 class="mb-0">Data Bagian</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Bagian</th>
                                <?php if($_SESSION['Admin']->id_level == 1) {?>
                                <th scope="col">Action</th>
                                <?php }?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($bagian as $o) { ?>
                                <tr>
                                    <div class="adge badge-dot mr-4">
                                        <td><?= $i ?> </td>
                                    </div>
                                    <div class="adge badge-dot mr-4">
                                        <td><?= $o->Name ?></td>
                                    </div>

                </div>
                <?php if($_SESSION['Admin']->id_level == 1) {?>
                <div class="adge badge-dot mr-6">
                    <td class="center">
                        <a class="btn btn-info" href="<?= base_url('formeditbagian/' . $o->id_bagian . '') ?>">
                            <i class="glyphicon glyphicon-edit icon-white"></i>
                            Edit
                        </a>
                        <a class="btn btn-danger" href="<?= base_url('deletebagian/' . $o->id_bagian . '') ?>">
                            <i class="glyphicon glyphicon-trash icon-white"></i>
                            Delete
                        </a></td>
                </div>
                <?php }?>
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