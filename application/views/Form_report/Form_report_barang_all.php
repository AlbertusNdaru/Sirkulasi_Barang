<!-- /. ROW  -->
<?php
include APPPATH . 'views/Form_report/laporan.php';
foreach ($tipebarang as $t) {
    $totalkategory[$t->id_tipe_barang] = 0;
    $tipename[$t->id_tipe_barang] = $t->Name;
}
?>
<div>
    <div align="center">
        <img style="display: block;margin-left: auto;margin-right: auto;width: 100px;" src="<?php echo base_url() ?>assets/img/logo.png">
        <div>
            <h2 align="center">
                PT. GAPURA ANGKASA CABANG YOGYAKARTA <br>
                Daftar Barang <br>
                <small><?php echo $tanggal1 . " - " . $tanggal2 ?></small>
            </h2>
        </div>
    </div>
</div>
<!-- /. ROW  -->
<div>
    <div>
        <div>
            <div>
                <div>
                    <table border=1>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Barang</th>
                                <th>Jumlah/Stok</th>
                                <th>Satuan</th>
                                <th>Kategori</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            $totalsemua = 0;
                            foreach ($semuabarang as $r) { ?>
                                <tr class="gradeU">
                                    <td align="center"><?php echo $no ?></td>
                                    <td align="left"><?php echo $r->Name ?></td>
                                    <td align="center"><?php echo $r->Jumlah ?></td>
                                    <td align="center"><?php echo $r->NamaSatuan ?></td>
                                    <td align="center"><?php echo $r->NamaTipe ?></td>
                                    
                                </tr>
                            <?php $no++;
                               } ?>      
                        </tbody>
                    </table>
                    <br><br>
                    <table style="width: 100%; margin-left: 75%;">
                        <tbody>
                            <tr class="gradeU">
                                <td align="center">Yogyakarta, <?= date('d-M-Y'); ?></td>
                            </tr>
                            <tr class="gradeU">

                                <td align="center"> Admin</td>
                            </tr>
                            <tr class="gradeU">

                                <td align="center"> <br></td>
                            </tr>
                            <tr class="gradeU">
                                <td align="center"> <?= $_SESSION['Admin']->username ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /. TABLE  -->
            </div>
        </div>
    </div>
</div>
<!-- /. ROW  -->