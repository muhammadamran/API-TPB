<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
<?php
// Find DOMAIN
$Limit_D = 100;
if (isset($_POST['findLimit_D'])) {
    if ($_POST["Limit_D"] != '') {
        $Limit_D   = $_POST['Limit_D'];
    }
}

// Find LOCAL
$Limit_L = 100;
if (isset($_POST['findLimit_L'])) {
    if ($_POST["Limit_L"] != '') {
        $Limit_L   = $_POST['Limit_L'];
    }
}
?>
<!-- DOMAIN -->
<?php
// TOTAL RECORD
$dataD = $dbmain->query("SELECT COUNT(*) AS total FROM tpb_pungutan ORDER BY ID DESC");
$rowD  = $dataD->fetch_assoc();
// LAST RECORD
$dataLastD = $dbmain->query("SELECT * FROM tpb_pungutan ORDER BY ID DESC LIMIT 1");
$rowLastD  = $dataLastD->fetch_assoc();
?>
<!-- LOCAL -->
<?php
// TOTAL RECORD
$dataL = $db->query("SELECT COUNT(*) AS total FROM tpb_pungutan ORDER BY ID DESC");
$rowL  = $dataL->fetch_assoc();
// LAST RECORD
$dataLastL = $db->query("SELECT * FROM tpb_pungutan ORDER BY ID DESC LIMIT 1");
$rowLastL  = $dataLastL->fetch_assoc();
?>
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
                        <li class="breadcrumb-item active" aria-current="page">Data TPB Pungutan</li>
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

    <!-- BUTTON Synchronize -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body" style="display: flex;justify-content: space-between;align-content: center;align-items: center;">
                    <div>
                        <h4 style="margin-top: 5px;margin-bottom: 5px;font-size: 14px;font-weight: 900;"><i class="fas fa-database"></i> Synchronize Data</h4>
                        <?php if ($btnContpb_pungutan == 'synchron') { ?>
                            <button class="btn btn-success"><i class="fas fa-check-circle"></i> Data Sudah Synchronize</button>
                        <?php } else { ?>
                            <a href="index.php?m=api&s=tpb_pungutan_sync&t=Sync Data TPB Pungutan" class="btn btn-primary"><i class="fas fa-refresh"></i> Synchronize Manually</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BUTTON Synchronize -->

    <div class="row">
        <!-- DOMAIN -->
        <div class="col-md-6">
            <div class="card ">
                <div class="card-header ">
                    <font class="card-title"><i class="fas fa-table"></i> Data IT Inventory</font>
                </div>
                <div class="card-body ">
                    <div style="display: flex;justify-content: flex-start;align-content: center;align-items: center;margin-bottom: 10px;background: #ffc107;padding: 15px;border-radius: 5px;">
                        <div style="font-size: 35px;">
                            <i class="fas fa-info-circle"></i>
                        </div>
                        <div style="display: grid;justify-content: flex-start;align-content: center;align-items: center;margin-left: 10px;">
                            <font>Total Record: <?= $rowD['total'] ?></font>
                            <font>Last Record ID HEADER: <?= $rowLastD != NULL ? $rowLastD['ID_HEADER'] : 'Not Found' ?></font>
                        </div>
                    </div>
                    <div class="line-page"></div>
                    <div class="alert alert-secondary fade show" style="color: #66615b;">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true" style="color: #66615b47;">×</span>
                        </button>
                        <p>Menampilkan <b>Limit <?= $Limit_D ?> Data TPB Pungutan</b> terakhir. Silahkan tambah Limit Data TPB Pungutan pada form Limit.<br> Total Data TPB Pungutan pada Sistem sebanyak <b><?= $rowD['total'] ?> Data TPB Pungutan.</b></p>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="IDLimit_D" class="col-form-label">Limit</label>
                                    <input id="IDLimit_D" name="Limit_D" type="number" class="form-control" value="<?= $Limit_D ?>" placeholder="Limit ...">
                                    <div>
                                        <button type="submit" name="findLimit_D" class="btn btn-sm btn-secondary">
                                            <font style="font-size: 12px;font-weight: 500;"><i class="fas fa-list-ol"></i> Tampilkan</font>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="domain" class="table table-striped table-bordered table-td-valign-middle">
                            <thead>
                                <tr>
                                    <th width="1%">#</th>
                                    <th class="text-nowrap" style="text-align: center;">ID HEADER</th>
                                    <th class="text-nowrap" style="text-align: center;">ID</th>
                                    <th class="text-nowrap" style="text-align: center;">JENIS TARIF</th>
                                    <th class="text-nowrap" style="text-align: center;">KODE FASILITAS</th>
                                    <th class="text-nowrap" style="text-align: center;">NILAI PUNGUTAN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php include 'pages/api/data/tpb_pungutan_d.php'; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- LOCAL -->
        <div class="col-md-6">
            <div class="card ">
                <div class="card-header ">
                    <font class="card-title"><i class="fas fa-table"></i> Data Module CIESA</font>
                </div>
                <div class="card-body ">
                    <div style="display: flex;justify-content: flex-start;align-content: center;align-items: center;margin-bottom: 10px;background: #ffc107;padding: 15px;border-radius: 5px;">
                        <div style="font-size: 35px;">
                            <i class="fas fa-info-circle"></i>
                        </div>
                        <div style="display: grid;justify-content: flex-start;align-content: center;align-items: center;margin-left: 10px;">
                            <font>Total Record: <?= $rowL['total'] ?></font>
                            <font>Last Record ID HEADER: <?= $rowLastL != NULL ? $rowLastL['ID_HEADER'] : 'Not Found' ?></font>
                        </div>
                    </div>
                    <div class="line-page"></div>
                    <div class="alert alert-secondary fade show" style="color: #66615b;">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true" style="color: #66615b47;">×</span>
                        </button>
                        <p>Menampilkan <b>Limit <?= $Limit_L ?> Data TPB Pungutan</b> terakhir. Silahkan tambah Limit Data TPB Pungutan pada form Limit.<br> Total Data TPB Pungutan pada Sistem sebanyak <b><?= $rowL['total'] ?> Data TPB Pungutan.</b></p>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="IDLimit_L" class="col-form-label">Limit</label>
                                    <input id="IDLimit_L" name="Limit_L" type="number" class="form-control" value="<?= $Limit_L ?>" placeholder="Limit ...">
                                    <div>
                                        <button type="submit" name="findLimit_L" class="btn btn-sm btn-secondary">
                                            <font style="font-size: 12px;font-weight: 500;"><i class="fas fa-list-ol"></i> Tampilkan</font>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="local" class="table table-striped table-bordered table-td-valign-middle">
                            <thead>
                                <tr>
                                    <th width="1%">#</th>
                                    <th class="text-nowrap" style="text-align: center;">ID HEADER</th>
                                    <th class="text-nowrap" style="text-align: center;">ID</th>
                                    <th class="text-nowrap" style="text-align: center;">JENIS TARIF</th>
                                    <th class="text-nowrap" style="text-align: center;">KODE FASILITAS</th>
                                    <th class="text-nowrap" style="text-align: center;">NILAI PUNGUTAN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php include 'pages/api/data/tpb_pungutan_l.php'; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    $(document).ready(function() {
        $('#domain').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
        $('#local').DataTable({
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