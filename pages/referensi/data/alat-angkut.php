<?php
if (isset($_POST['findLimit'])) {
    $data = $db->query("SELECT * FROM referensi_kapal ORDER BY KODE_BENDERA ASC LIMIT " . $_POST['Limit'] . "", 0);
} else {
    $data = $db->query("SELECT * FROM referensi_kapal ORDER BY KODE_BENDERA ASC LIMIT 100", 0);
}

$no = 0;
while ($row = $data->fetch_assoc()) {
    $no++;
?>
    <tr>
        <td width="1%" class="f-s-600 text-inverse"><?= $no ?>.</td>
        <td style="text-align: center;"><?= $row['ID'] ?></td>
        <td style="text-align: center;"><?= $row['KODE_BENDERA'] ?></td>
        <td style="text-align: left;"><?= $row['NAMA_KAPAL'] ?></td>
    </tr>
<?php } ?>