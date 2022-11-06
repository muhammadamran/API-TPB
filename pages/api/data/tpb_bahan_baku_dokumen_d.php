<?php
if (isset($_POST['findLimit_D'])) {
    $data = $dbmain->query("SELECT * FROM tpb_bahan_baku_dokumen ORDER BY ID DESC LIMIT " . $_POST['Limit_D'] . "", 0);
} else {
    $data = $dbmain->query("SELECT * FROM tpb_bahan_baku_dokumen ORDER BY ID DESC LIMIT 100", 0);
}

$no = 0;
while ($row = $data->fetch_assoc()) {
    $no++;
?>
    <tr>
        <td width="1%" class="f-s-600 text-inverse"><?= $no ?>.</td>
        <td style="text-align: center;"><?= $row['ID_HEADER']; ?></td>
        <td style="text-align: center;"><?= $row['ID']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_ASAL_BAHAN_BAKU']; ?></td>
        <td style="text-align: center;"><?= $row['SERI_DOKUMEN']; ?></td>
        <td style="text-align: center;"><?= $row['ID_BARANG']; ?></td>
    </tr>
<?php } ?>