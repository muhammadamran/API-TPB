<?php
if (isset($_POST['findLimit_D'])) {
    $data = $dbmain->query("SELECT * FROM tpb_bahan_baku_tarif ORDER BY ID DESC LIMIT " . $_POST['Limit_D'] . "", 0);
} else {
    $data = $dbmain->query("SELECT * FROM tpb_bahan_baku_tarif ORDER BY ID DESC LIMIT 100", 0);
}

$no = 0;
while ($row = $data->fetch_assoc()) {
    $no++;
?>
    <tr>
        <td width="1%" class="f-s-600 text-inverse"><?= $no ?>.</td>
        <td style="text-align: center;"><?= $row['ID_HEADER']; ?></td>
        <td style="text-align: center;"><?= $row['ID']; ?></td>
        <td style="text-align: center;"><?= $row['JENIS_TARIF']; ?></td>
        <td style="text-align: center;"><?= $row['JUMLAH_SATUAN']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_ASAL_BAHAN_BAKU']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_FASILITAS']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_KOMODITI_CUKAI']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_SATUAN']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_TARIF']; ?></td>
        <td style="text-align: center;"><?= $row['NILAI_BAYAR']; ?></td>
        <td style="text-align: center;"><?= $row['NILAI_FASILITAS']; ?></td>
        <td style="text-align: center;"><?= $row['NILAI_SUDAH_DILUNASI']; ?></td>
        <td style="text-align: center;"><?= $row['SERI_BAHAN_BAKU']; ?></td>
        <td style="text-align: center;"><?= $row['SERI_BARANG']; ?></td>
        <td style="text-align: center;"><?= $row['TARIF']; ?></td>
        <td style="text-align: center;"><?= $row['TARIF_FASILITAS']; ?></td>
        <td style="text-align: center;"><?= $row['ID_BAHAN_BAKU']; ?></td>
        <td style="text-align: center;"><?= $row['ID_BARANG']; ?></td>
    </tr>
<?php } ?>