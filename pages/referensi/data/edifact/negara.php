<?php
if (isset($_POST['findLimit'])) {
    $data = $db->query("SELECT * FROM referensi_negara LIMIT " . $_POST['Limit'] . "", 0);
} else {
    $data = $db->query("SELECT * FROM referensi_negara LIMIT 100", 0);
}

$no = 0;
while ($row = $data->fetch_assoc()) {
    $no++;
?>
    <tr>
        <td width="1%" class="f-s-600 text-inverse"><?= $no ?>.</td>
        <td style="text-align: center;"><?= $row['ID'] ?></td>
        <td style="text-align: center;"><?= $row['KODE_NEGARA'] ?></td>
        <td style="text-align: left;"><?= $row['URAIAN_NEGARA'] ?></td>
    </tr>
<?php } ?>