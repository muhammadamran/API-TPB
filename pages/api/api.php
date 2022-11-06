<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
<div class="content">
    <div class="page-header-title">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title-page">
                    <i class="icon-copy fas fa-code for-icon-page"></i>
                    <font class="font-title">API</font>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php?t=Dashboard" class="breadcrumb-item-title">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">API</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body" style="display: flex;justify-content: space-between;align-content: center;align-items: center;">
                    <div>
                        <h4 style="margin-top: 5px;margin-bottom: 5px;font-size: 14px;font-weight: 900;"><i class="fas fa-link"></i> Check Status API</h4>
                        <button type="button" class="btn btn-200"><i class="fas fa-check-circle"></i> Connected</button>
                        <button type="button" class="btn btn-404"><i class="fas fa-times-circle"></i> Unconnected</button>
                    </div>
                    <div>
                        <h4 style="margin-top: 5px;margin-bottom: 5px;font-size: 14px;font-weight: 900;"><i class="fas fa-exchange-alt"></i> Check Synchron Data</h4>
                        <button type="button" class="btn btn-synchron"><i class="fas fa-check-circle"></i> Data Synchron</button>
                        <button type="button" class="btn btn-unsynchron"><i class="fas fa-times-circle"></i> Data Unsynchron</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-body ">
                    <div class="row" style="justify-content: center;">
                        <!-- tpb_header	 - TPB Header -->
                        <div class="col-md-2 c-<?= $btnContpb_header ?>">
                            <a href="index.php?m=api&s=tpb_header&t=Data TPB Header">
                                <font class="list-font">Header</font>
                                <br>
                                <font class="list-font">Status API: <?= $datatpb_header['status'] ?></font>
                                <br>
                                <font class="list-font">Status Synchron: </font>
                                <font class="list-font" style="text-transform: uppercase;"><?= $btnContpb_header ?></font>
                            </a>
                        </div>
                        <!-- tpb_bahan_baku	 - TPB Bahan Baku -->
                        <div class="col-md-2 c-<?= $btnContpb_bahan_baku ?>">
                            <a href="index.php?m=api&s=tpb_bahan_baku&t=Data TPB Bahan Baku">
                                <font class="list-font">Bahan Baku</font>
                                <br>
                                <font class="list-font">Status API: <?= $datatpb_bahan_baku['status'] ?></font>
                                <br>
                                <font class="list-font">Status Synchron: </font>
                                <font class="list-font" style="text-transform: uppercase;"><?= $btnContpb_bahan_baku ?></font>
                            </a>
                        </div>
                        <!-- tpb_bahan_baku_dokumen	 - TPB Bahan Baku Dokumen -->
                        <div class="col-md-2 c-<?= $btnContpb_bahan_baku_dokumen ?>">
                            <a href="index.php?m=api&s=tpb_bahan_baku_dokumen&t=Data TPB Bahan Baku Dokumen">
                                <font class="list-font">Bahan Baku Dokumen</font>
                                <br>
                                <font class="list-font">Status API: <?= $datatpb_bahan_baku_dokumen['status'] ?></font>
                                <br>
                                <font class="list-font">Status Synchron: </font>
                                <font class="list-font" style="text-transform: uppercase;"><?= $btnContpb_bahan_baku_dokumen ?></font>
                            </a>
                        </div>
                        <!-- tpb_bahan_baku_tarif	 - TPB Bahan Baku Tarif -->
                        <div class="col-md-2 c-<?= $btnContpb_bahan_baku_tarif ?>">
                            <a href="index.php?m=api&s=tpb_bahan_baku_tarif&t=Data TPB Bahan Baku Tarif">
                                <font class="list-font">Bahan Baku Tarif</font>
                                <br>
                                <font class="list-font">Status API: <?= $datatpb_bahan_baku_tarif['status'] ?></font>
                                <br>
                                <font class="list-font">Status Synchron: </font>
                                <font class="list-font" style="text-transform: uppercase;"><?= $btnContpb_bahan_baku_tarif ?></font>
                            </a>
                        </div>
                        <!-- tpb_barang	 - TPB Barang -->
                        <div class="col-md-2 c-<?= $btnContpb_barang ?>">
                            <a href="index.php?m=api&s=tpb_barang&t=Data TPB Barang">
                                <font class="list-font">Barang</font>
                                <br>
                                <font class="list-font">Status API: <?= $datatpb_barang['status'] ?></font>
                                <br>
                                <font class="list-font">Status Synchron: </font>
                                <font class="list-font" style="text-transform: uppercase;"><?= $btnContpb_barang ?></font>
                            </a>
                        </div>
                        <!-- tpb_barang_dokumen	 - TPB Barang Dokumen -->
                        <div class="col-md-2 c-<?= $btnContpb_barang_dokumen ?>">
                            <a href="index.php?m=api&s=tpb_barang_dokumen&t=Data TPB Barang Dokumen">
                                <font class="list-font">Barang Dokumen</font>
                                <br>
                                <font class="list-font">Status API: <?= $datatpb_barang_dokumen['status'] ?></font>
                                <br>
                                <font class="list-font">Status Synchron: </font>
                                <font class="list-font" style="text-transform: uppercase;"><?= $btnContpb_barang_dokumen ?></font>
                            </a>
                        </div>
                        <!-- tpb_barang_penerima	 - TPB Barang Penerima -->
                        <div class="col-md-2 c-<?= $btnContpb_barang_penerima ?>">
                            <a href="index.php?m=api&s=tpb_barang_penerima&t=Data TPB Barang Penerima">
                                <font class="list-font">Barang Penerima</font>
                                <br>
                                <font class="list-font">Status API: <?= $datatpb_barang_penerima['status'] ?></font>
                                <br>
                                <font class="list-font">Status Synchron: </font>
                                <font class="list-font" style="text-transform: uppercase;"><?= $btnContpb_barang_penerima ?></font>
                            </a>
                        </div>
                        <!-- tpb_barang_tarif	 - TPB Barang Tarif -->
                        <div class="col-md-2 c-<?= $btnContpb_barang_tarif ?>">
                            <a href="index.php?m=api&s=tpb_barang_tarif&t=Data TPB Barang Tarif">
                                <font class="list-font">Barang Tarif</font>
                                <br>
                                <font class="list-font">Status API: <?= $datatpb_barang_tarif['status'] ?></font>
                                <br>
                                <font class="list-font">Status Synchron: </font>
                                <font class="list-font" style="text-transform: uppercase;"><?= $btnContpb_barang_tarif ?></font>
                            </a>
                        </div>
                        <!-- tpb_detil_status	 - TPB Detil Status -->
                        <div class="col-md-2 c-<?= $btnContpb_detil_status ?>">
                            <a href="index.php?m=api&s=tpb_detil_status&t=Data TPB Detil Status">
                                <font class="list-font">Detil Status</font>
                                <br>
                                <font class="list-font">Status API: <?= $datatpb_detil_status['status'] ?></font>
                                <br>
                                <font class="list-font">Status Synchron: </font>
                                <font class="list-font" style="text-transform: uppercase;"><?= $btnContpb_detil_status ?></font>
                            </a>
                        </div>
                        <!-- tpb_dokumen	 - TPB Dokumen -->
                        <div class="col-md-2 c-<?= $btnContpb_dokumen ?>">
                            <a href="index.php?m=api&s=tpb_dokumen&t=Data TPB Dokumen">
                                <font class="list-font">Dokumen</font>
                                <br>
                                <font class="list-font">Status API: <?= $datatpb_dokumen['status'] ?></font>
                                <br>
                                <font class="list-font">Status Synchron: </font>
                                <font class="list-font" style="text-transform: uppercase;"><?= $btnContpb_dokumen ?></font>
                            </a>
                        </div>
                        <!-- tpb_jaminan	 - TPB Jaminan -->
                        <div class="col-md-2 c-<?= $btnContpb_jaminan ?>">
                            <a href="index.php?m=api&s=tpb_jaminan&t=Data TPB Jaminan">
                                <font class="list-font">Jaminan</font>
                                <br>
                                <font class="list-font">Status API: <?= $datatpb_jaminan['status'] ?></font>
                                <br>
                                <font class="list-font">Status Synchron: </font>
                                <font class="list-font" style="text-transform: uppercase;"><?= $btnContpb_jaminan ?></font>
                            </a>
                        </div>
                        <!-- tpb_kemasan	 - TPB Kemasan -->
                        <div class="col-md-2 c-<?= $btnContpb_kemasan ?>">
                            <a href="index.php?m=api&s=tpb_kemasan&t=Data TPB Kemasan">
                                <font class="list-font">Kemasan</font>
                                <br>
                                <font class="list-font">Status API: <?= $datatpb_kemasan['status'] ?></font>
                                <br>
                                <font class="list-font">Status Synchron: </font>
                                <font class="list-font" style="text-transform: uppercase;"><?= $btnContpb_kemasan ?></font>
                            </a>
                        </div>
                        <!-- tpb_kontainer	 - TPB Kontainer -->
                        <div class="col-md-2 c-<?= $btnContpb_kontainer ?>">
                            <a href="index.php?m=api&s=tpb_kontainer&t=Data TPB Kontainer">
                                <font class="list-font">Kontainer</font>
                                <br>
                                <font class="list-font">Status API: <?= $datatpb_kontainer['status'] ?></font>
                                <br>
                                <font class="list-font">Status Synchron: </font>
                                <font class="list-font" style="text-transform: uppercase;"><?= $btnContpb_kontainer ?></font>
                            </a>
                        </div>
                        <!-- tpb_npwp_billing	 - TPB Npwp Billing -->
                        <div class="col-md-2 c-<?= $btnContpb_npwp_billing ?>">
                            <a href="index.php?m=api&s=tpb_npwp_billing&t=Data TPB Npwp Billing">
                                <font class="list-font">Npwp Billing</font>
                                <br>
                                <font class="list-font">Status API: <?= $datatpb_npwp_billing['status'] ?></font>
                                <br>
                                <font class="list-font">Status Synchron: </font>
                                <font class="list-font" style="text-transform: uppercase;"><?= $btnContpb_npwp_billing ?></font>
                            </a>
                        </div>
                        <!-- tpb_penerima	 - TPB Penerima -->
                        <div class="col-md-2 c-<?= $btnContpb_penerima ?>">
                            <a href="index.php?m=api&s=tpb_penerima&t=Data TPB Penerima">
                                <font class="list-font">Penerima</font>
                                <br>
                                <font class="list-font">Status API: <?= $datatpb_penerima['status'] ?></font>
                                <br>
                                <font class="list-font">Status Synchron: </font>
                                <font class="list-font" style="text-transform: uppercase;"><?= $btnContpb_penerima ?></font>
                            </a>
                        </div>
                        <!-- tpb_pungutan	 - TPB Pungutan -->
                        <div class="col-md-2 c-<?= $btnContpb_pungutan ?>">
                            <a href="index.php?m=api&s=tpb_pungutan&t=Data TPB Pungutan">
                                <font class="list-font">Pungutan</font>
                                <br>
                                <font class="list-font">Status API: <?= $datatpb_pungutan['status'] ?></font>
                                <br>
                                <font class="list-font">Status Synchron: </font>
                                <font class="list-font" style="text-transform: uppercase;"><?= $btnContpb_pungutan ?></font>
                            </a>
                        </div>
                        <!-- tpb_respon	 - TPB Respon -->
                        <div class="col-md-2 c-<?= $btnContpb_respon ?>">
                            <a href="index.php?m=api&s=tpb_respon&t=Data TPB Respon">
                                <font class="list-font">Respon</font>
                                <br>
                                <font class="list-font">Status API: <?= $datatpb_respon['status'] ?></font>
                                <br>
                                <font class="list-font">Status Synchron: </font>
                                <font class="list-font" style="text-transform: uppercase;"><?= $btnContpb_respon ?></font>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    function deleteData(id) {
        var r = confirm("Are you sure you want to delete this record?");
        if (r == true) {
            location.href = "pages/user/user_proses.php?aksi=hapus&id=" + id;
        }
    }
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>