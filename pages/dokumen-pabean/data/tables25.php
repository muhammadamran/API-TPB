<?php
$data = $db->query("SELECT *,sts.KODE_STATUS,sts.URAIAN_STATUS 
                    FROM tpb_header AS hdr 
                    JOIN referensi_status AS sts ON hdr.KODE_STATUS=sts.KODE_STATUS 
                    WHERE hdr.KODE_DOKUMEN_PABEAN=25 GROUP BY hdr.NOMOR_AJU ORDER BY hdr.NOMOR_AJU", 0);
$no = 0;
while ($row = $data->fetch_assoc()) {
    $no++;
?>
<tr>
    <td width="1%" class="f-s-600 text-inverse"><?= $no ?>.</td>
    <td style="text-align: center;"><?= $row['NOMOR_AJU'] ?></td>
    <td style="text-align: center;"><?= $row['NAMA_PEMASOK'] ?></td>
    <td style="text-align: center;"><?= $row['NAMA_PENGANGKUT'] ?></td>
    <td style="text-align: center;"><?= $row['JUMLAH_BARANG'] ?></td>
    <td style="text-align: center;"><?= $row['JUMLAH_KONTAINER'] ?></td>
    <td style="text-align: center;"><?= $row['JUMLAH_KEMASAN'] ?></td>
    <td style="text-align: center;"><?= $row['URAIAN_STATUS'] ?></td>
</tr>
<?php } ?>