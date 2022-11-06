<?php
if (isset($_POST['findLimit_D'])) {
    $data = $dbmain->query("SELECT * FROM tpb_bahan_baku ORDER BY ID DESC LIMIT " . $_POST['Limit_D'] . "", 0);
} else {
    $data = $dbmain->query("SELECT * FROM tpb_bahan_baku ORDER BY ID DESC LIMIT 100", 0);
}

$no = 0;
while ($row = $data->fetch_assoc()) {
    $no++;
?>
    <tr>
        <td width="1%" class="f-s-600 text-inverse"><?= $no ?>.</td>
        <td style="text-align: center;"><?= $row['ID_HEADER']; ?></td>
        <td style="text-align: center;"><?= $row['ID']; ?></td>
        <td style="text-align: center;"><?= $row['CIF']; ?></td>
        <td style="text-align: center;"><?= $row['CIF_RUPIAH']; ?></td>
        <td style="text-align: center;"><?= $row['HARGA_PENYERAHAN']; ?></td>
        <td style="text-align: center;"><?= $row['HARGA_PEROLEHAN']; ?></td>
        <td style="text-align: center;"><?= $row['JENIS_SATUAN']; ?></td>
        <td style="text-align: center;"><?= $row['JUMLAH_SATUAN']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_ASAL_BAHAN_BAKU']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_BARANG']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_FASILITAS_DOKUMEN']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_JENIS_DOK_ASAL']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_KANTOR']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_SKEMA_TARIF']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_STATUS']; ?></td>
        <td style="text-align: center;"><?= $row['MERK']; ?></td>
        <td style="text-align: center;"><?= $row['NDPBM']; ?></td>
        <td style="text-align: center;"><?= $row['NETTO']; ?></td>
        <td style="text-align: center;"><?= $row['NOMOR_AJU_DOK_ASAL']; ?></td>
        <td style="text-align: center;"><?= $row['NOMOR_DAFTAR_DOK_ASAL']; ?></td>
        <td style="text-align: center;"><?= $row['POS_TARIF']; ?></td>
        <td style="text-align: center;"><?= $row['SERI_BAHAN_BAKU']; ?></td>
        <td style="text-align: center;"><?= $row['SERI_BARANG']; ?></td>
        <td style="text-align: center;"><?= $row['SERI_IJIN']; ?></td>
        <td style="text-align: center;"><?= $row['SERI_BARANG_DOK_ASAL']; ?></td>
        <td style="text-align: center;"><?= $row['SPESIFIKASI_LAIN']; ?></td>
        <td style="text-align: center;"><?= $row['TANGGAL_DAFTAR_DOK_ASAL']; ?></td>
        <td style="text-align: center;"><?= $row['TIPE']; ?></td>
        <td style="text-align: center;"><?= $row['UKURAN']; ?></td>
        <td style="text-align: center;"><?= $row['URAIAN']; ?></td>
        <td style="text-align: center;"><?= $row['ID_BARANG']; ?></td>
    </tr>
<?php } ?>