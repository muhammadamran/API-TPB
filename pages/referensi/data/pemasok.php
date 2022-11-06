<?php
if (isset($_POST['findLimit'])) {
    $data = $db->query("SELECT *,b.ID AS ID_RN, b.KODE_NEGARA AS KODE_NEGARA_RN 
                        FROM referensi_pemasok AS a
                        JOIN referensi_negara AS b ON a.KODE_NEGARA=b.KODE_NEGARA 
                        ORDER BY a.ID ASC LIMIT " . $_POST['Limit'] . "", 0);
} else {
    $data = $db->query("SELECT *,b.ID AS ID_RN, b.KODE_NEGARA AS KODE_NEGARA_RN 
                        FROM referensi_pemasok AS a
                        JOIN referensi_negara AS b ON a.KODE_NEGARA=b.KODE_NEGARA 
                        ORDER BY a.ID ASC LIMIT 100", 0);
}

$no = 0;
while ($row = $data->fetch_assoc()) {
    $no++;
?>
    <tr>
        <td width="1%" class="f-s-600 text-inverse"><?= $no ?>.</td>
        <td style="text-align: center;"><?= $row['ID'] ?></td>
        <td style="text-align: center;"><?= $row['NPWP'] ?></td>
        <td style="text-align: left;"><?= $row['NAMA'] ?></td>
        <td style="text-align: left;"><?= $row['ALAMAT'] ?></td>
        <td style="text-align: center;"><?= $row['KODE_NEGARA'] ?></td>
        <td style="text-align: left;"><?= $row['URAIAN_NEGARA'] ?></td>
    </tr>
<?php } ?>