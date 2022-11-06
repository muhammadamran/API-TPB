<?php
if (isset($_POST['findLimit'])) {
    $data = $db->query("SELECT * FROM referensi_pos_tarif ORDER BY NOMOR_HS ASC LIMIT " . $_POST['Limit'] . "", 0);
} else {
    $data = $db->query("SELECT * FROM referensi_pos_tarif ORDER BY NOMOR_HS ASC LIMIT 100", 0);
}

$no = 0;
while ($row = $data->fetch_assoc()) {
    $no++;
?>
    <tr>
        <td width="1%" class="f-s-600 text-inverse"><?= $no ?>.</td>
        <td style="text-align: center;"><?= $row['ID'] ?></td>
        <td style="text-align: center;"><?= $row['NOMOR_HS'] ?></td>
        <td style="text-align: left;"><?= $row['TARIF_BM'] ?></td>
        <td style="text-align: center;"><?= $row['KODE_SATUAN_BM'] ?></td>
        <td style="text-align: left;"><?= $row['TARIF_CUKAI'] ?></td>
        <td style="text-align: center;"><?= $row['KODE_SATUAN_CUKAI'] ?></td>
    </tr>
<?php } ?>