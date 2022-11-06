<?php
if (isset($_POST['findLimit'])) {
    $data = $db->query("SELECT * FROM referensi_valuta ORDER BY KODE_VALUTA ASC LIMIT " . $_POST['Limit'] . "", 0);
} else {
    $data = $db->query("SELECT * FROM referensi_valuta ORDER BY KODE_VALUTA ASC LIMIT 100", 0);
}

$no = 0;
while ($row = $data->fetch_assoc()) {
    $no++;
?>
    <tr>
        <td width="1%" class="f-s-600 text-inverse"><?= $no ?>.</td>
        <td style="text-align: center;"><?= $row['ID'] ?></td>
        <td style="text-align: center;"><?= $row['KODE_VALUTA'] ?></td>
        <td style="text-align: left;"><?= $row['URAIAN_VALUTA'] ?></td>
    </tr>
<?php } ?>