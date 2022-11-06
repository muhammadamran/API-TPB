<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
<div class="content">

    <div class="page-header-title">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title-page">
                    <i class="icon-copy fas fa-file-import for-icon-page"></i>
                    <font class="font-title">Dokumen Pabean</font>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php?t=Dashboard" class="breadcrumb-item-title">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dokumen Pabean</li>
                        <li class="breadcrumb-item active" aria-current="page">BC 2.5</li>
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
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered table-td-valign-middle">
                            <thead>
                                <tr>
                                    <th rowspan="2" width="1%">#</th>
                                    <th class="text-nowrap" rowspan="2" style="text-align: center;">Nomor Pengajuan</th>
                                    <th class="text-nowrap" rowspan="2" style="text-align: center;">Pemasok</th>
                                    <th class="text-nowrap" rowspan="2" style="text-align: center;">Pengangkut</th>
                                    <th class="text-nowrap" colspan="3" style="text-align: center;">Jumlah</th>
                                    <th class="text-nowrap" rowspan="2" style="text-align: center;">Status</th>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" style="text-align: center;">Barang</th>
                                    <th class="text-nowrap" style="text-align: center;">Kontainer</th>
                                    <th class="text-nowrap" style="text-align: center;">Kemasan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php include 'pages/dokumen-pabean/data/tables25.php'; ?>
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