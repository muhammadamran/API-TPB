<?php
if (isset($_POST['findLimit_L'])) {
    $data = $db->query("SELECT * FROM tpb_kontainer ORDER BY ID DESC LIMIT " . $_POST['Limit_L'] . "", 0);
} else {
    $data = $db->query("SELECT * FROM tpb_kontainer ORDER BY ID DESC LIMIT 100", 0);
}

$no = 0;
while ($row = $data->fetch_assoc()) {
    $no++;
?>
    <tr>
        <td width="1%" class="f-s-600 text-inverse"><?= $no ?>.</td>
        <td style="text-align: center;"><?= $row['ID_HEADER']; ?></td>
        <td style="text-align: center;"><?= $row['ID']; ?></td>
        <td style="text-align: center;"><?= $row['KESESUAIAN_DOKUMEN']; ?></td>
        <td style="text-align: center;"><?= $row['KETERANGAN']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_STUFFING']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_TIPE_KONTAINER']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_UKURAN_KONTAINER']; ?></td>
        <td style="text-align: center;"><?= $row['FLAG_GATE_IN']; ?></td>
        <td style="text-align: center;"><?= $row['FLAG_GATE_OUT']; ?></td>
        <td style="text-align: center;"><?= $row['NO_POLISI']; ?></td>
        <td style="text-align: center;"><?= $row['NOMOR_KONTAINER']; ?></td>
        <td style="text-align: center;"><?= $row['NOMOR_SEGEL']; ?></td>
        <td style="text-align: center;"><?= $row['SERI_KONTAINER']; ?></td>
        <td style="text-align: center;"><?= $row['WAKTU_GATE_IN']; ?></td>
        <td style="text-align: center;"><?= $row['WAKTU_GATE_OUT']; ?></td>
    </tr>
<?php } ?>