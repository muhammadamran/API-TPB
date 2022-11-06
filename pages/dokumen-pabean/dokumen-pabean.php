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
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-body ">
                    <div class="row" style="justify-content: center;">
                        <div class="col-md-3 cj">
                            <a href="index.php?m=dokumen-pabean&s=dokumen-pabean-23&t=BC 2.3">
                                <font class="list-font">BC 2.3</font>
                            </a>
                        </div>
                        <div class="col-md-3 cj">
                            <a href="index.php?m=dokumen-pabean&s=dokumen-pabean-25&t=BC 2.5">
                                <font class="list-font">BC 2.5</font>
                            </a>
                        </div>
                        <div class="col-md-3 cj">
                            <a href="index.php?m=dokumen-pabean&s=dokumen-pabean-261&t=BC 2.6.1">
                                <font class="list-font">BC 2.6.1</font>
                            </a>
                        </div>
                        <div class="col-md-3 cj">
                            <a href="index.php?m=dokumen-pabean&s=dokumen-pabean-27&t=BC 2.7">
                                <font class="list-font">BC 2.7</font>
                            </a>
                        </div>
                        <div class="col-md-3 cj">
                            <a href="index.php?m=dokumen-pabean&s=dokumen-pabean-40&t=BC 4.0">
                                <font class="list-font">BC 4.0</font>
                            </a>
                        </div>
                        <div class="col-md-3 cj">
                            <a href="index.php?m=dokumen-pabean&s=dokumen-pabean-41&t=BC 4.1">
                                <font class="list-font">BC 4.1</font>
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