<?php
if (isset($_POST['findLimit'])) {
    $data = $db->query("SELECT * FROM view_ref_pln ORDER BY KODE_PELABUHAN ASC LIMIT " . $_POST['Limit'] . "", 0);
} else {
    $data = $db->query("SELECT * FROM view_ref_pln ORDER BY KODE_PELABUHAN ASC LIMIT 100", 0);
}

$no = 0;
while ($row = $data->fetch_assoc()) {
    $no++;
?>
    <tr>
        <td width="1%" class="f-s-600 text-inverse"><?= $no ?>.</td>
        <td style="text-align: center;"><?= $row['ID'] ?></td>
        <td style="text-align: center;"><?= $row['KODE_PELABUHAN'] ?></td>
        <td style="text-align: left;"><?= $row['URAIAN_PELABUHAN'] ?></td>
    </tr>
<?php } ?>