<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
<div class="content">

    <div class="page-header-title">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title-page">
                    <i class="icon-copy fas fa-code for-icon-page"></i>
                    <font class="font-title">SYNCHRONIZATION</font>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php?t=Dashboard" class="breadcrumb-item-title">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Synchronization</li>
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
                        <!-- tpb_bahan_baku	 - TPB Bahan Baku -->
                        <div class="col-md-2 cj">
                            <a href="index.php?m=api&s=tpb_bahan_baku">
                                <font class="list-font">Bahan Baku</font>
                            </a>
                        </div>
                        <!-- tpb_bahan_baku_dokumen	 - TPB Bahan Baku Dokumen -->
                        <div class="col-md-2 cj">
                            <a href="index.php?m=api&s=tpb_bahan_baku_dokumen">
                                <font class="list-font">Bahan Baku Dokumen</font>
                            </a>
                        </div>
                        <!-- tpb_bahan_baku_tarif	 - TPB Bahan Baku Tarif -->
                        <div class="col-md-2 cj">
                            <a href="index.php?m=api&s=tpb_bahan_baku_tarif">
                                <font class="list-font">Bahan Baku Tarif</font>
                            </a>
                        </div>
                        <!-- tpb_barang	 - TPB Barang -->
                        <div class="col-md-2 cj">
                            <a href="index.php?m=api&s=tpb_barang">
                                <font class="list-font">Barang</font>
                            </a>
                        </div>
                        <!-- tpb_barang_dokumen	 - TPB Barang Dokumen -->
                        <div class="col-md-2 cj">
                            <a href="index.php?m=api&s=tpb_barang_dokumen">
                                <font class="list-font">Barang Dokumen</font>
                            </a>
                        </div>
                        <!-- tpb_barang_penerima	 - TPB Barang Penerima -->
                        <div class="col-md-2 cj">
                            <a href="index.php?m=api&s=tpb_barang_penerima">
                                <font class="list-font">Barang Penerima</font>
                            </a>
                        </div>
                        <!-- tpb_barang_tarif	 - TPB Barang Tarif -->
                        <div class="col-md-2 cj">
                            <a href="index.php?m=api&s=tpb_barang_tarif">
                                <font class="list-font">Barang Tarif</font>
                            </a>
                        </div>
                        <!-- tpb_detil_status	 - TPB Detil Status -->
                        <div class="col-md-2 cj">
                            <a href="index.php?m=api&s=tpb_detil_status">
                                <font class="list-font">Detil Status</font>
                            </a>
                        </div>
                        <!-- tpb_dokumen	 - TPB Dokumen -->
                        <div class="col-md-2 cj">
                            <a href="index.php?m=api&s=tpb_dokumen">
                                <font class="list-font">Dokumen</font>
                            </a>
                        </div>
                        <!-- tpb_header	 - TPB Header -->
                        <div class="col-md-2 cj">
                            <a href="index.php?m=api&s=tpb_header">
                                <font class="list-font">Header</font>
                            </a>
                        </div>
                        <!-- tpb_jaminan	 - TPB Jaminan -->
                        <div class="col-md-2 cj">
                            <a href="index.php?m=api&s=tpb_jaminan">
                                <font class="list-font">Jaminan</font>
                            </a>
                        </div>
                        <!-- tpb_kemasan	 - TPB Kemasan -->
                        <div class="col-md-2 cj">
                            <a href="index.php?m=api&s=tpb_kemasan">
                                <font class="list-font">Kemasan</font>
                            </a>
                        </div>
                        <!-- tpb_kontainer	 - TPB Kontainer -->
                        <div class="col-md-2 cj">
                            <a href="index.php?m=api&s=tpb_kontainer">
                                <font class="list-font">Kontainer</font>
                            </a>
                        </div>
                        <!-- tpb_npwp_billing	 - TPB Npwp Billing -->
                        <div class="col-md-2 cj">
                            <a href="index.php?m=api&s=tpb_npwp_billing">
                                <font class="list-font">Npwp Billing</font>
                            </a>
                        </div>
                        <!-- tpb_penerima	 - TPB Penerima -->
                        <div class="col-md-2 cj">
                            <a href="index.php?m=api&s=tpb_penerima">
                                <font class="list-font">Penerima</font>
                            </a>
                        </div>
                        <!-- tpb_pungutan	 - TPB Pungutan -->
                        <div class="col-md-2 cj">
                            <a href="index.php?m=api&s=tpb_pungutan">
                                <font class="list-font">Pungutan</font>
                            </a>
                        </div>
                        <!-- tpb_respon	 - TPB Respon -->
                        <div class="col-md-2 cj">
                            <a href="index.php?m=api&s=tpb_respon">
                                <font class="list-font">Respon</font>
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