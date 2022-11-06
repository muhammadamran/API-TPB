<?php
if (isset($_POST['findLimit'])) {
    $data = $db->query("SELECT *,a.ID AS ID_PDN ,b.ID AS ID_KBC, b.KODE_KANTOR AS KODE_KANTOR_KBC, b.URAIAN_KANTOR 
                        FROM referensi_pelabuhan AS a
                        LEFT OUTER JOIN referensi_kantor_pabean AS b ON a.KODE_KANTOR=b.KODE_KANTOR
                        WHERE LEFT(a.KODE_PELABUHAN,2)='ID' ORDER BY a.KODE_PELABUHAN ASC LIMIT " . $_POST['Limit'] . "", 0);
} else {
    $data = $db->query("SELECT *,a.ID AS ID_PDN ,b.ID AS ID_KBC, b.KODE_KANTOR AS KODE_KANTOR_KBC, b.URAIAN_KANTOR 
                        FROM referensi_pelabuhan AS a
                        LEFT OUTER JOIN referensi_kantor_pabean AS b ON a.KODE_KANTOR=b.KODE_KANTOR
                        WHERE LEFT(a.KODE_PELABUHAN,2)='ID' ORDER BY a.KODE_PELABUHAN ASC LIMIT 100", 0);
}

$no = 0;
while ($row = $data->fetch_assoc()) {
    $no++;
?>
    <tr>
        <td width="1%" class="f-s-600 text-inverse"><?= $no ?>.</td>
        <td style="text-align: center;"><?= $row['ID_PDN'] ?></td>
        <td style="text-align: center;"><?= $row['KODE_PELABUHAN'] ?></td>
        <td style="text-align: left;"><?= $row['URAIAN_PELABUHAN'] ?></td>
        <td style="text-align: center;"><?= $row['KODE_KANTOR_KBC'] ?></td>
        <td style="text-align: left;"><?= $row['URAIAN_KANTOR'] ?></td>
    </tr>
<?php } ?>