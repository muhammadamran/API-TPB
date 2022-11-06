<?php
if (isset($_POST['findLimit_L'])) {
    $data = $db->query("SELECT * FROM tpb_respon ORDER BY ID DESC LIMIT " . $_POST['Limit_L'] . "", 0);
} else {
    $data = $db->query("SELECT * FROM tpb_respon ORDER BY ID DESC LIMIT 100", 0);
}

$no = 0;
while ($row = $data->fetch_assoc()) {
    $no++;
?>
    <tr>
        <td width="1%" class="f-s-600 text-inverse"><?= $no ?>.</td>
        <td style="text-align: center;"><?= $row['ID_HEADER']; ?></td>
        <td style="text-align: center;"><?= $row['ID']; ?></td>
        <td style="text-align: center;"><?= $row['BYTE_STREM_PDF']; ?></td>
        <td style="text-align: center;"><?= $row['FLAG_BACA']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_RESPON']; ?></td>
        <td style="text-align: center;"><?= $row['NOMOR_AJU']; ?></td>
        <td style="text-align: center;"><?= $row['NOMOR_RESPON']; ?></td>
        <td style="text-align: center;"><?= $row['TANGGAL_RESPON']; ?></td>
        <td style="text-align: center;"><?= $row['WAKTU_RESPON']; ?></td>
    </tr>
<?php } ?>