<?php
if (isset($_POST['findLimit'])) {
    $data = $db->query("SELECT a.ID AS ID_REF,a.ALAMAT,a.CONTACT_PERSON,a.EMAIL,a.FAX,a.ID_PENGENAL,a.JENISTPB,a.KODE_ID,a.KODE_KANTOR,a.NAMA,a.NOMOR_PENGENAL,a.NOMOR_SKEP,a.NPWP,a.STATUS_IMPORTIR,
                        a.TANGGAL_SKEP,a.TELEPON,a.NPPBKC,
                        b.KODE_STATUS_PENGUSAHA,b.URAIAN_STATUS_PENGUSAHA
                        FROM referensi_pengusaha AS a
                        LEFT JOIN referensi_status_pengusaha AS b ON a.KODE_ID=b.KODE_STATUS_PENGUSAHA 
                        ORDER BY a.ID ASC LIMIT " . $_POST['Limit'] . "", 0);
} else {
    $data = $db->query("SELECT a.ID AS ID_REF,a.ALAMAT,a.CONTACT_PERSON,a.EMAIL,a.FAX,a.ID_PENGENAL,a.JENISTPB,a.KODE_ID,a.KODE_KANTOR,a.NAMA,a.NOMOR_PENGENAL,a.NOMOR_SKEP,a.NPWP,a.STATUS_IMPORTIR,
                        a.TANGGAL_SKEP,a.TELEPON,a.NPPBKC,
                        b.KODE_STATUS_PENGUSAHA,b.URAIAN_STATUS_PENGUSAHA
                        FROM referensi_pengusaha AS a
                        LEFT JOIN referensi_status_pengusaha AS b ON a.KODE_ID=b.KODE_STATUS_PENGUSAHA 
                        ORDER BY a.ID ASC LIMIT 100", 0);
}

$no = 0;
while ($row = $data->fetch_assoc()) {
    $no++;
?>
    <tr>
        <td width="1%" class="f-s-600 text-inverse"><?= $no ?>.</td>
        <td style="text-align: center;"><?= $row['ID_REF'] ?></td>
        <td style="text-align: center;"><?= $row['NPWP'] ?></td>
        <td style="text-align: left;"><?= $row['NAMA'] ?></td>
        <td style="text-align: left;"><?= $row['ALAMAT'] ?></td>
        <td style="text-align: center;"><?= $row['NOMOR_SKEP'] ?></td>
        <td style="text-align: center;">
            <?php if ($row['NPPBKC'] == NULL) { ?>
                <a href="index.php?m=referensi&s=perusahaan_edit&t=Perusahaan&id=<?= $row['ID_REF'] ?>" class="btn btn-sm btn-aksi btn-primary" title="Edit"><i class="fas fa-edit"></i></a>
            <?php } else { ?>
                <div class="aksi-table">
                    <?= $row['NPPBKC'] ?>
                    <div style="margin-left: 10px;">
                        <a href="index.php?m=referensi&s=perusahaan_edit&t=Perusahaan&id=<?= $row['ID_REF'] ?>" title="Edit"><i class="fas fa-edit"></i></a>
                    </div>
                </div>
            <?php } ?>
        </td>
    </tr>
<?php } ?>