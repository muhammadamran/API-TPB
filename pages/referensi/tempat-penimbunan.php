<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="assets/css/backend.css">
<style>
    .col-form-label {
        font-size: 14px;
    }
</style>
<?php
$Limit = 100;
// Find
if (isset($_POST['findLimit'])) {
    if ($_POST["Limit"] != '') {
        $Limit   = $_POST['Limit'];
    }
}

?>
<div class="content">
    <div class="page-header-title">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title-page">
                    <i class="icon-copy fas fa-cog for-icon-page"></i>
                    <font class="font-title">Settings</font>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php?t=Dashboard" class="breadcrumb-item-title">Dashboard</a></li>
                        <li class="breadcrumb-item" aria-current="page">Referensi</li>
                        <li class="breadcrumb-item active" aria-current="page">Tempat Penimbunan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <font class="card-title"><i class="fas fa-table"></i> Data</font>
                </div>
                <div class="card-body ">
                    <div class="line-page"></div>
                    <?php
                    $dataCount = $db->query("SELECT COUNT(*) AS total FROM referensi_tps ORDER BY KD_KANTOR ASC");
                    $rowCount = $dataCount->fetch_assoc()
                    ?>
                    <div class="alert alert-secondary fade show" style="color: #66615b;">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true" style="color: #66615b47;">×</span>
                        </button>
                        <p>Menampilkan <b>Limit <?= $Limit ?> Referensi Tempat Penimbunan</b> terakhir. Silahkan tambah Limit Referensi Tempat Penimbunan pada form Limit.<br> Total Referensi Tempat Penimbunan pada Sistem sebanyak <b><?= $rowCount['total'] ?> Referensi Tempat Penimbunan.</b></p>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="IDLimit" class="col-form-label">Limit</label>
                                    <input id="IDLimit" name="Limit" type="number" class="form-control" value="<?= $Limit ?>" placeholder="Limit ...">
                                    <div>
                                        <button type="submit" name="findLimit" class="btn btn-sm btn-secondary">
                                            <font style="font-size: 12px;font-weight: 500;"><i class="fas fa-list-ol"></i> Tampilkan</font>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered table-td-valign-middle">
                            <thead>
                                <tr>
                                    <th width="1%">#</th>
                                    <th class="text-nowrap" style="text-align: center;">ID</th>
                                    <th class="text-nowrap" style="text-align: center;">Kode Kantor</th>
                                    <th class="text-nowrap" style="text-align: center;">Kode TPS</th>
                                    <th class="text-nowrap" style="text-align: center;">Jenis Gudang</th>
                                    <th class="text-nowrap" style="text-align: center;">Uraian TPS</th>
                                    <th class="text-nowrap" style="text-align: center;">FL AKTIF</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php include 'pages/referensi/data/tempat-penimbunan.php'; ?>
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