<?php
if (isset($_POST['findLimit_L'])) {
    $data = $db->query("SELECT * FROM tpb_barang_tarif ORDER BY ID_HEADER DESC, JENIS_TARIF ASC LIMIT " . $_POST['Limit_L'] . "", 0);
} else {
    $data = $db->query("SELECT * FROM tpb_barang_tarif ORDER BY ID_HEADER DESC, JENIS_TARIF ASC LIMIT 100", 0);
}

$no = 0;
while ($row = $data->fetch_assoc()) {
    $no++;
?>
    <tr>
        <td width="1%" class="f-s-600 text-inverse"><?= $no ?>.</td>
        <td style="text-align: center;"><?= $row['ID_HEADER']; ?></td>
        <td style="text-align: center;"><?= $row['ID']; ?></td>
        <td style="text-align: center;"><?= $row['FLAG_BMT_SEMENTARA']; ?></td>
        <td style="text-align: center;"><?= $row['JENIS_TARIF']; ?></td>
        <td style="text-align: center;"><?= $row['JUMLAH_SATUAN']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_FASILITAS']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_KOMODITI_CUKAI']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_SATUAN']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_SUB_KOMODITI_CUKAI']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_TARIF']; ?></td>
        <td style="text-align: center;"><?= $row['NILAI_BAYAR']; ?></td>
        <td style="text-align: center;"><?= $row['NILAI_FASILITAS']; ?></td>
        <td style="text-align: center;"><?= $row['NILAI_SUDAH_DILUNASI']; ?></td>
        <td style="text-align: center;"><?= $row['SERI_BARANG']; ?></td>
        <td style="text-align: center;"><?= $row['TARIF']; ?></td>
        <td style="text-align: center;"><?= $row['TARIF_FASILITAS']; ?></td>
        <td style="text-align: center;"><?= $row['ID_BARANG']; ?></td>
    </tr>
<?php } ?>