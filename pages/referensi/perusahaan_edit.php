<?php
$data = $db->query('SELECT a.ID AS ID_REF,a.ALAMAT,a.CONTACT_PERSON,a.EMAIL,a.FAX,a.ID_PENGENAL,a.JENISTPB,a.KODE_ID,a.KODE_KANTOR,a.NAMA,a.NOMOR_PENGENAL,a.NOMOR_SKEP,a.NPWP,a.STATUS_IMPORTIR,
                    a.TANGGAL_SKEP,a.TELEPON,a.NPPBKC,
                    b.KODE_STATUS_PENGUSAHA,b.URAIAN_STATUS_PENGUSAHA
                    FROM referensi_pengusaha AS a
                    LEFT JOIN referensi_status_pengusaha AS b ON a.KODE_ID=b.KODE_STATUS_PENGUSAHA 
                    WHERE a.ID="' . $_GET['id'] . '"
                    ORDER BY a.ID ASC');
$row = $data->fetch_assoc()
?>
<div class="content">

    <div class="page-header-title">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title-page">
                    <i class="icon-copy fas fas fa-table for-icon-page"></i>
                    <font class="font-title">Perusahaan</font>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php?t=Dashboard" class="breadcrumb-item-title">Dashboard</a></li>
                        <li class="breadcrumb-item" aria-current="page">Referensi</li>
                        <li class="breadcrumb-item" aria-current="page">Perusahaan</li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Perusahaan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <font class="card-title"><i class="fas fa-edit"></i> Edit Perusahaan</font>
                </div>
                <div class="card-body ">
                    <form action="pages/referensi/perusahaan_proses.php?aksi=update&id=<?= $_GET['id'] ?>" method="POST">
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="IDNPWP" class="col-form-label">NPWP</label>
                                        <input id="IDNPWP" name="NPWP" type="text" class="form-control" placeholder="NPWP ..." value="<?= $row['NPWP']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="IDNAMA" class="col-form-label">NAMA</label>
                                        <input id="IDNAMA" name="NAMA" type="text" class="form-control" placeholder="NAMA ..." value="<?= $row['NAMA']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="IDNOMOR_SKEP" class="col-form-label">NOMOR SKEP</label>
                                        <input id="IDNOMOR_SKEP" name="NOMOR_SKEP" type="text" class="form-control" placeholder="NOMOR_SKEP ..." value="<?= $row['NOMOR_SKEP']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="IDNPPBKC" class="col-form-label">NPPBKC</label>
                                        <input id="IDNPPBKC" name="NPPBKC" type="text" class="form-control" placeholder="NPPBKC ..." value="<?= $row['NPPBKC']; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" name="Edit"><i class="fas fa-edit"> Edit</i></button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>