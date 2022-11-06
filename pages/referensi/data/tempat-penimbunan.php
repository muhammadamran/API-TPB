<?php
if (isset($_POST['findLimit'])) {
    $data = $db->query("SELECT * FROM referensi_tps ORDER BY KD_KANTOR ASC LIMIT " . $_POST['Limit'] . "", 0);
} else {
    $data = $db->query("SELECT * FROM referensi_tps ORDER BY KD_KANTOR ASC LIMIT 100", 0);
}

$no = 0;
while ($row = $data->fetch_assoc()) {
    $no++;
?>
    <tr>
        <td width="1%" class="f-s-600 text-inverse"><?= $no ?>.</td>
        <td style="text-align: center;"><?= $row['ID'] ?></td>
        <td style="text-align: center;"><?= $row['KD_KANTOR'] ?></td>
        <td style="text-align: center;"><?= $row['KODE_TPS'] ?></td>
        <td style="text-align: center;"><?= $row['JNS_GUDANG'] ?></td>
        <td style="text-align: left;"><?= $row['URAIAN_TPS'] ?></td>
        <td style="text-align: center;"><?= $row['FL_AKTIF'] ?></td>
    </tr>
<?php } ?>