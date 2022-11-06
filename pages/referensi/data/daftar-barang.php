<?php
if (isset($_POST['findLimit'])) {
    $data = $db->query("SELECT * FROM referensi_kode_barang ORDER BY KODE_BARANG ASC LIMIT " . $_POST['Limit'] . "", 0);
} else {
    $data = $db->query("SELECT * FROM referensi_kode_barang ORDER BY KODE_BARANG ASC LIMIT 100", 0);
}

$no = 0;
while ($row = $data->fetch_assoc()) {
    $no++;
?>
    <tr>
        <td width="1%" class="f-s-600 text-inverse"><?= $no ?>.</td>
        <td style="text-align: center;"><?= $row['ID'] ?></td>
        <td style="text-align: center;"><?= $row['NOHS'] ?></td>
        <td style="text-align: center;"><?= $row['KODE_BARANG'] ?></td>
        <td style="text-align: left;"><?= $row['URAIAN_BARANG'] ?></td>
        <td style="text-align: center;"><?= $row['MERK'] ?></td>
        <td style="text-align: center;"><?= $row['TIPE'] ?></td>
        <td style="text-align: center;"><?= $row['SPESIFIKASI_LAIN'] ?></td>
    </tr>
<?php } ?>