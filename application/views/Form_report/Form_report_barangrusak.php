<?php
include APPPATH . 'views/Form_report/laporan.php';
?>
<div>
    <div align="center">
        <img style="display: block;margin-left: auto;margin-right: auto;width: 100px;" src="<?php echo base_url() ?>assets/img/logo.png">
        <div>
            <h2 align="center">
                PT. GAPURA ANGKASA CABANG YOGYAKARTA <br>
                Daftar Barang Rusak <br>
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
                                <th>Nama Alat</th>
                                <th>Jumlah/Stok</th>
                                <th>Satuan</th>
                                <th>Harga</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            $totalsemua = 0;
                            foreach ($barangrusak as $r) { ?>
                                <tr class="gradeU">
                                    <td align="center"><?php echo $no ?></td>
                                    <td align="left"><?php echo $r->NamaBarang ?></td>
                                    <td align="center"><?php echo $r->Jumlah ?></td>

                                    <td align="center"><?php echo $r->NamaSatuan ?></td>

                                    <td align="center"><?php echo $r->Satuan ?></td>

                                    <td align="center"><?php echo rupiah($r->Harga) ?></td>
                                    <td align="right"><?php $total = $r->Jumlah * $r->Harga;
                                                            echo rupiah($total) ?></td>
                                </tr>
                            <?php $no++;
                                $totalsemua = $totalsemua + $total;
                            } ?>
                            <tr>
                                <td colspan="6">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" style="background-color: burlywood; color: black ; font-weight: bold" colspan="5">Total Keseluruhan</td>
                                <td align="right" style="background-color: burlywood; color: black ; font-weight: bold" ><?php echo rupiah($totalsemua) ?></td>
                            </tr>
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