<?php
if (isset($_POST['findLimit_D'])) {
    $data = $dbmain->query("SELECT * FROM tpb_jaminan ORDER BY ID DESC LIMIT " . $_POST['Limit_D'] . "", 0);
} else {
    $data = $dbmain->query("SELECT * FROM tpb_jaminan ORDER BY ID DESC LIMIT 100", 0);
}

$no = 0;
while ($row = $data->fetch_assoc()) {
    $no++;
?>
    <tr>
        <td width="1%" class="f-s-600 text-inverse"><?= $no ?>.</td>
        <td style="text-align: center;"><?= $row['ID_HEADER']; ?></td>
        <td style="text-align: center;"><?= $row['ID']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_JENIS_JAMINAN']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_KANTOR']; ?></td>
        <td style="text-align: center;"><?= $row['NILAI_JAMINAN']; ?></td>
        <td style="text-align: center;"><?= $row['NOMOR_BPJ']; ?></td>
        <td style="text-align: center;"><?= $row['NOMOR_JAMINAN']; ?></td>
        <td style="text-align: center;"><?= $row['PENJAMIN']; ?></td>
        <td style="text-align: center;"><?= $row['TANGGAL_BPJ']; ?></td>
        <td style="text-align: center;"><?= $row['TANGGAL_JAMINAN']; ?></td>
        <td style="text-align: center;"><?= $row['TANGGAL_JATUH_TEMPO']; ?></td>
    </tr>
<?php } ?>